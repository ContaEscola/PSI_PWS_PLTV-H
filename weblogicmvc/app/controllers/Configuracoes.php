<?php

class Configuracoes extends BaseController
{
    private $auth;
    private $sessionInfo;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');

        $this->sessionInfo = $this->getSessionInfo();
    }

    public function index()
    {
        $this->renderView('loggedIn/configuracoes', ['sessionInfo' => $this->sessionInfo,'id'=> $this->auth->getID()]);


    }


    public function update($id)
    {
        if ($this->sessionInfo['role'] == 'Funcionário'){

        $user = UserFuncionario::find([$id]);

        $this->redirectTo($controller = "Configuracoes");
    }





}}