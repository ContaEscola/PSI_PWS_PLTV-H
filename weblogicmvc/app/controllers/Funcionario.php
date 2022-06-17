<?php


class Funcionario extends BaseController
{
    private $auth;
    private $sessionInfo;

    private $allFuncionarios;
    private $defaultNewFuncionario;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');

        if (!$this->auth->isLoggedIn(['Administrador']))
            $this->redirectTo('Dashboard');

        $this->sessionInfo = $this->getSessionInfo();

        $cond = array('conditions' => array('role = ?', 'Funcionário'));
        $this->allFuncionarios = FuncionarioAdmin::all($cond);

        $this->defaultNewFuncionario = new FuncionarioAdmin();
        $this->defaultNewFuncionario->role = 'Funcionário';
    }

    public function index()
    {

        $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->defaultNewFuncionario, 'funcionarioOld' => $this->defaultNewFuncionario, 'addModalToggle' => "false", "editModalToggle" => "false"]);
    }

    public function delete($id)
    {
        try {
            $conditions = "role = 'Funcionário' AND id = " . $id;
            $funcionario = FuncionarioAdmin::first(array('conditions' => $conditions));
            if ($funcionario == null)
                throw new Exception();

            $funcionario->delete();

            $this->redirectTo('Funcionario');
        } catch (Exception $ex) {
            $this->redirectTo('Funcionario');
        }
    }

    public function create()
    {
        $newFuncionario = new FuncionarioAdmin($_POST);
        $newFuncionario->role = 'Funcionário';


        if ($newFuncionario->is_valid()) {

            $funcionarioName = $newFuncionario->username;
            $funcionarioNIF = $newFuncionario->nif;

            $customErrors = array();

            $conditionsName = array('username = ?', $funcionarioName);
            $oldFuncionarioName = FuncionarioAdmin::all(array('conditions' => $conditionsName));



            $conditionsNIF = array('nif = ?', $funcionarioNIF);
            $oldFuncionarioNIF = FuncionarioAdmin::all(array('conditions' => $conditionsNIF));


            if (!empty($oldFuncionarioName)) {
                $customErrors['username'] = 'Nome já utilizado!';
            }

            if (!empty($oldFuncionarioNIF)) {
                $customErrors['nif'] = 'NIF já utilizado';
            }

            if (!empty($oldFuncionarioName) || !empty($oldFuncionarioNIF)) {
                $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $newFuncionario, 'funcionarioOld' => $this->defaultNewFuncionario, 'addModalToggle' => 'true', "editModalToggle" => 'false', "customErrors" => $customErrors]);
                return;
            }

            $password = $newFuncionario->password;
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $newFuncionario->password = $hashPassword;

            $newFuncionario->save();

            $this->redirectTo('Funcionario');
        } else {

            $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $newFuncionario, 'funcionarioOld' => $this->defaultNewFuncionario, 'addModalToggle' => 'true', "editModalToggle" => 'false']);
        }
    }

    public function update($username = null, $id = null)
    {
        if ($username != null && $id == null) {

            $conditions = "role = 'Funcionário' AND username = '" . $username . "'";
            $oldFuncionario = FuncionarioAdmin::first(array('conditions' => $conditions));

            $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->defaultNewFuncionario, 'funcionarioOld' => $oldFuncionario, 'addModalToggle' => 'false', "editModalToggle" => 'true']);
            return;
        } else {
            $receivedFuncionario = new FuncionarioAdmin($_POST);
        }

        if ($receivedFuncionario->is_valid()) {

            $customErrorsOnOld = array();




            $checkNames = FuncionarioAdmin::all(array('conditions' => array("username = ?", $receivedFuncionario->username)));
            $checkNifs = FuncionarioAdmin::all(array('conditions' => array("nif = ?", $receivedFuncionario->nif)));

            if (count($checkNames) > 1 && $checkNames != $receivedFuncionario->username)
                $customErrorsOnOld['username'] = 'Nome já utilizado!';

            if (count($checkNifs) > 1 && $checkNifs != $receivedFuncionario->nif)
                $customErrorsOnOld['nif'] = 'NIF já utilizado';



            if (!empty($customErrorsOnOld)) {
                $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->defaultNewFuncionario, 'funcionarioOld' => $receivedFuncionario, 'addModalToggle' => 'false', "editModalToggle" => 'true', "customErrorsOnOld" => $customErrorsOnOld]);
                return;
            }

            $receivedPassword = $receivedFuncionario->password;
            $hashPassword = password_hash($receivedPassword, PASSWORD_DEFAULT);

            $receivedFuncionario->password = $hashPassword;

            $conditions = "role = 'Funcionário' AND id = " . $id;
            $funcionarioToUpdate = FuncionarioAdmin::first(array('conditions' => $conditions));
            $funcionarioToUpdate->update_attributes($_POST);

            $this->redirectTo('Funcionario');
        } else {

            $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->defaultNewFuncionario, 'funcionarioOld' => $receivedFuncionario, 'addModalToggle' => 'false', "editModalToggle" => 'true']);
        }
    }
}
