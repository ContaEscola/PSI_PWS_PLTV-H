<?php

class Configuracoes extends BaseController
{
    private $auth;
    private $sessionInfo;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');

        if (!$this->auth->isLoggedIn([null]))
            $this->redirectTo('Dashboard');

        $this->sessionInfo = $this->getSessionInfo();
    }

    public function index()
    {

        $configuracoes = UserFuncionario::find([$this->auth->getID()]);

        $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), 'configuracoes' => $configuracoes]);
    }


    public function update($id)
    {

        if ($this->sessionInfo['role'] == 'Administrador') {
            try {

                $checkFuncionario = UserAdmin::find([$id]);

                if ($checkFuncionario == null) {
                    $this->redirectTo('Configuracoes');
                    return;
                }

                $newFuncionarioData = new UserAdmin($_POST);


                if ($newFuncionarioData->is_valid()) {

                    $customErrors = array();

                    $checkNames = UserAdmin::all(array('conditions' => array("username = ?", $newFuncionarioData->username)));
                    $checkNifs = UserAdmin::all(array('conditions' => array("nif = ?", $newFuncionarioData->nif)));

                    if (count($checkNames) > 1)
                        $customErrors['username'] = 'Nome já utilizado!';
                    else if (count($checkNames) ==  1 && $checkNames[0]->username != $checkFuncionario->username)
                        $customErrors['username'] = 'Nome já utilizado!';


                    if (count($checkNifs) > 1)
                        $customErrors['nif'] = 'NIF já utilizado';
                    else if (count($checkNifs) == 1 && $checkNifs[0]->nif != $checkFuncionario->nif)
                        $customErrors['nif'] = 'NIF já utilizado';

                    if (!empty($customErrors)) {

                        $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), "configuracoes" => $newFuncionarioData, "customErrors" => $customErrors]);
                        return;
                    }

                    $conditions = "role = 'Administrador' AND id = " . $id;
                    $funcionarioToUpdate = UserAdmin::first(array('conditions' => $conditions));

                    $receivedPassword = $newFuncionarioData->password;

                    if (strcmp($receivedPassword, $funcionarioToUpdate->password)) {
                        $hashPassword = password_hash($receivedPassword, PASSWORD_DEFAULT);
                        $_POST['password'] = $hashPassword;
                    }

                    $funcionarioToUpdate->update_attributes($_POST);

                    $this->auth->setAuth($funcionarioToUpdate->username, $funcionarioToUpdate->role, $funcionarioToUpdate->id);
                    $this->redirectTo('Configuracoes');
                } else {
                    $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), "configuracoes" => $newFuncionarioData]);
                    return;
                }
            } catch (Exception $ex) {
                $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), "configuracoes" => $newFuncionarioData]);
                return;
            }
        } else if ($this->sessionInfo['role'] == 'Funcionário') {
            try {
                $checkFuncionario = UserFuncionario::find([$id]);

                if ($checkFuncionario == null) {
                    $this->redirectTo('Configuracoes');
                    return;
                }
                $newFuncionarioData = new UserAdmin($_POST);

                if ($newFuncionarioData->is_valid()) {



                    $customErrors = array();

                    $checkNames = UserFuncionario::all(array('conditions' => array("username = ?", $newFuncionarioData->username)));

                    if (count($checkNames) > 1)
                        $customErrors['username'] = 'Nome já utilizado!';
                    else if (count($checkNames) == 1 && $checkNames != $checkFuncionario->username)
                        $customErrors['username'] = 'Nome já utilizado!';

                    if (!empty($customErrors)) {
                        $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), "configuracoes" => $newFuncionarioData, "customErrors" => $customErrors]);
                        return;
                    }

                    $conditions = "role = 'Funcionário' AND id = " . $id;
                    $funcionarioToUpdate = UserFuncionario::first(array('conditions' => $conditions));

                    $receivedPassword = $newFuncionarioData->password;

                    if (strcmp($receivedPassword, $funcionarioToUpdate->password)) {
                        $hashPassword = password_hash($receivedPassword, PASSWORD_DEFAULT);
                        $_POST['password'] = $hashPassword;
                    }



                    $funcionarioToUpdate->update_attributes(array('username' => $newFuncionarioData->username, 'password' => $_POST['password']));

                    $this->auth->setAuth($funcionarioToUpdate->username, $funcionarioToUpdate->role, $funcionarioToUpdate->id);
                    $this->redirectTo('Configuracoes');
                } else {
                    $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), "configuracoes" => $newFuncionarioData]);
                    return;
                }
            } catch (Exception $ex) {
                $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo, 'id' => $this->auth->getID(), "configuracoes" => $newFuncionarioData]);
                return;
            }
        } else {
            $this->redirectTo('Configuracoes');
        }
    }
}
