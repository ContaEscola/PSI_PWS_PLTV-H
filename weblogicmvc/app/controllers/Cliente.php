<?php


class Cliente extends BaseController
{
    private $auth;
    private $sessionInfo;

    private $allClientes;
    private $defaultNewClient;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');


        if ($this->auth->getRole() != "Funcionário" && $this->auth->getRole() != "Administrador")
            $this->redirectTo('Dashboard');

        $this->sessionInfo = $this->getSessionInfo();

        $cond = array('conditions' => array('role = ?', 'Cliente'));
        $this->allClientes = UserToCreateCliente::all($cond);

        $this->defaultNewCliente = new UserToCreateCliente();
        $this->defaultNewCliente->role = 'Cliente';
    }

    public function index()
    {

        $this->renderView('loggedIn/asNotClient/clientes', ['sessionInfo' => $this->sessionInfo, 'clientes' => $this->allClientes, 'newCliente' => $this->defaultNewClient, 'oldCliente' => $this->defaultNewClient, 'addModalToggle' => "false", "editModalToggle" => "false"]);
    }

    public function delete($id)
    {
        try {
            $conditions = "role = 'Cliente' AND id = " . $id;
            $cliente =  UserToCreateCliente::first(array('conditions' => $conditions));
            if ($cliente == null)
                throw new Exception();

            $cliente->delete();

            $this->redirectTo('Cliente');
        } catch (Exception $ex) {
            $this->redirectTo('Cliente');
        }
    }


    public function create()
    {

        $newClient = new  UserToCreateCliente($_POST);
        $newClient->role = 'Cliente';


        if ($newClient->is_valid()) {

            $clientName = $newClient->username;
            $clientNIF = $newClient->nif;

            $customErrors = array();

            $conditionsName = array('username = ?', $clientName);
            $checkNames = UserToCreateCliente::all(array('conditions' => $conditionsName));



            $conditionsNIF = array('nif = ?', $clientNIF);
            $checkNifs =  UserToCreateCliente::all(array('conditions' => $conditionsNIF));


            if (count($checkNames) > 0)
                $customErrors['username'] = 'Nome já utilizado!';

            if (count($checkNifs) > 0)
                $customErrors['nif'] = 'NIF já utilizado';


            if (!empty($customErrors)) {
                $this->renderView('loggedIn/asNotClient/clientes', ['sessionInfo' => $this->sessionInfo, 'clientes' => $this->allClientes, 'newCliente' => $newClient, 'oldCliente' => $this->defaultNewClient, 'addModalToggle' => 'true', "editModalToggle" => 'false', "customErrors" => $customErrors]);
                return;
            }

            $password = $newClient->password;
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $newClient->password = $hashPassword;

            $newClient->save();

            $this->redirectTo('Cliente');
        } else {

            $this->renderView('loggedIn/asNotClient/clientes', ['sessionInfo' => $this->sessionInfo, 'clientes' => $this->allClientes, 'newCliente' => $newClient, 'oldCliente' => $this->defaultNewClient, 'addModalToggle' => 'true', "editModalToggle" => 'false']);
        }
    }

    public function update($username = null, $id = null)
    {
        if ($username != null && $id == null) {

            $conditions = "role = 'Cliente' AND username = '" . $username . "'";
            $oldClient =  UserToCreateCliente::first(array('conditions' => $conditions));

            $this->renderView('loggedIn/asNotClient/clientes', ['sessionInfo' => $this->sessionInfo, 'clientes' => $this->allClientes, 'newCliente' => $this->defaultNewClient, 'oldCliente' => $oldClient, 'addModalToggle' => 'false', "editModalToggle" => 'true']);
            return;
        } else {
            $oldCliente = UserToCreateCliente::find([$id]);
            $receivedCliente = new UserToCreateCliente($_POST);
            $receivedCliente->id = $oldCliente->id;
        }

        if ($receivedCliente->is_valid()) {

            $customErrorsOnOld = array();




            $checkNames = UserToCreateCliente::all(array('conditions' => array("username = ?", $receivedCliente->username)));
            $checkNifs = UserToCreateCliente::all(array('conditions' => array("nif = ?", $receivedCliente->nif)));

            if (count($checkNames) > 1)
                $customErrorsOnOld['username'] = 'Nome já utilizado!';
            else if (count($checkNames) == 1 && $checkNames[0]->username != $oldCliente->username)
                $customErrorsOnOld['username'] = 'Nome já utilizado!';



            if (count($checkNifs) > 1)
                $customErrorsOnOld['nif'] = 'NIF já utilizado';
            else if (count($checkNifs) == 1 && $checkNifs[0]->nif != $oldCliente->nif)
                $customErrorsOnOld['nif'] = 'NIF já utilizado';


            if (!empty($customErrorsOnOld)) {
                $this->renderView('loggedIn/asNotClient/clientes', ['sessionInfo' => $this->sessionInfo, 'clientes' => $this->allClientes, 'newCliente' => $this->defaultNewClient, 'oldCliente' => $receivedCliente, 'addModalToggle' => 'false', "editModalToggle" => 'true', "customErrorsOnOld" => $customErrorsOnOld]);
                return;
            }

            $conditions = "role = 'Cliente' AND id = " . $id;
            $clienteToUpdate = UserToCreateCliente::first(array('conditions' => $conditions));

            $receivedPassword = $receivedCliente->password;
            if (strcmp($receivedPassword, $clienteToUpdate->password)) {
                $hashPassword = password_hash($receivedPassword, PASSWORD_DEFAULT);
                $_POST['password'] = $hashPassword;
            }

            $clienteToUpdate->update_attributes($_POST);

            $this->redirectTo('Cliente');
        } else {

            $this->renderView('loggedIn/asNotClient/clientes', ['sessionInfo' => $this->sessionInfo, 'clientes' => $this->allClientes, 'newCliente' => $this->defaultNewClient, 'oldCliente' => $receivedCliente, 'addModalToggle' => 'false', "editModalToggle" => 'true']);
        }
    }
}
