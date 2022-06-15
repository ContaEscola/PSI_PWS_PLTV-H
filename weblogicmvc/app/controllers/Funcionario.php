<?php


class Funcionario extends BaseController
{
    private $auth;
    private $sessionInfo;

    private $allFuncionarios;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');

        if (!$this->auth->isLoggedIn(['Administrador']))
            $this->redirectTo();

        $this->sessionInfo = $this->getSessionInfo();
    }

    public function index()
    {

        $this->renderView('loggedIn/asNotClient/funcionarios', ['sessionInfo' => $this->sessionInfo]);
    }
}
