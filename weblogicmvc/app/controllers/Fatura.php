<?php

class Fatura extends BaseController
{

    public function __construct()
    {
        $auth = $this->loadModel('Auth');

        if (!$auth->isLoggedIn([null]))
            $this->redirectTo();
    }

    public function index($id)
    {
        try {
            $fatura = FaturaCliente::find([$id]);


            $auth = $this->loadModel('Auth');
            $clienteID = $auth->getID();

            if ($fatura == null || ($fatura->referenciacliente != $clienteID)) {
                $this->redirectTo('Dashboard');
            }

            $client = UserToLogin::find([$fatura->referenciacliente]);
            $funcionario = UserToLogin::find([$fatura->referenciafuncionario]);

            $empresa = EmpresaCliente::first();

            $auth = $this->loadModel('Auth');
            $usernameLoggedIn = $auth->getUsername();
            $roleLoggedIn = $auth->getRole();

            $this->renderView('loggedIn/asClient/fatura', ['username' => $usernameLoggedIn, 'role' => $roleLoggedIn, 'fatura' => $fatura, 'cliente' =>  $client, 'empresa' => $empresa, 'funcionario' => $funcionario]);
        } catch (Exception $ex) {
            $this->redirectTo('Dashboard');
        }
    }
}
