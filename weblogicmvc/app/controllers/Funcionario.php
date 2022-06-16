<?php


class Funcionario extends BaseController
{
    private $auth;
    private $sessionInfo;

    private $allFuncionarios;

    private $defaultNewFuncionario;
    private $defaultAddModalToggle;
    private $defaultEditModalToggle;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');

        if (!$this->auth->isLoggedIn(['Administrador']))
            $this->redirectTo('Dashboard');

        $this->sessionInfo = $this->getSessionInfo();

        $cond = array('conditions' => array('role = ?', 'Funcionário'));
        $this->allFuncionarios = FuncionarioAdmin::all($cond);

        $this->defaultNewFuncionario = new FuncionarioAdmin();
        $this->defaultAddModalToggle = 'false';
        $this->defaultEditModalToggle = 'false';
    }

    public function index($changeDefaultNewFuncionario, $changeAddModalToggle, $changeEditModalToggle)
    {
        var_dump($changeDefaultNewFuncionario);
        var_dump($changeAddModalToggle);
        var_dump($changeEditModalToggle);
        $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->defaultNewFuncionario, 'addModalToggle' => $this->defaultAddModalToggle, "editModalToggle" => $this->defaultEditModalToggle]);
    }

    public function delete($id)
    {
        try {

            $funcionario = FuncionarioAdmin::find([$id]);
            if ($funcionario == null)
                throw new Exception();

            $funcionario->delete();

            $this->allFuncionarios = FuncionarioAdmin::all($this->conditionForAllFuncionarios);

            $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->templateNewFuncionario, 'addModalToggle' => 'false', "editModalToggle" => 'false']);
        } catch (Exception $ex) {
            $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->templateNewFuncionario, 'addModalToggle' => 'false', "editModalToggle" => 'false']);
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
                $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $newFuncionario, 'addModalToggle' => 'true', "editModalToggle" => 'false', "customErrors" => $customErrors]);
                return;
            }

            $password = $newFuncionario->password;
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            $newFuncionario->password = $hashPassword;

            $newFuncionario->save();
            $this->allFuncionarios = FuncionarioAdmin::all($this->conditionForAllFuncionarios);

            $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo, 'funcionarios' => $this->allFuncionarios, 'funcionarioNovo' => $this->templateNewFuncionario, 'addModalToggle' => 'false', "editModalToggle" => 'false']);
        } else {
            $this->redirectTo('Funcionario', 'index', ['changeDefaultNewFuncionario' => $newFuncionario, 'overrideAction' => 'index', 'overrideParams' => 'changeDefaultNewFuncionario' => $newFuncionario, 'changeAddModalToggle' => 'true', 'changeEditModalToggle' => null]]);
        }
    }
}
