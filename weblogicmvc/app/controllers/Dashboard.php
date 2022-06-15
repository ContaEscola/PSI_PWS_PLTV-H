<?php


class Dashboard extends BaseController
{

    private $auth;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');
    }

    public function index()
    {

        if ($this->auth->isLoggedIn([null])) {

            $sessionInfo = $this->getSessionInfo();

            $idLoggedIn = $this->auth->getID();

            switch ($sessionInfo['role']) {

                case 'Cliente':
                    $cond = array('conditions' => array('referenciaCliente = ? AND estado = ?', $idLoggedIn, 'Em Lançamento'), 'order' => 'data asc');
                    $faturas = FaturaCliente::all($cond);
                    $this->renderView('loggedIn/asClient/index', ['sessionInfo' => $sessionInfo, 'faturas' => $faturas]);
                    break;

                case 'Administrador':
                case 'Funcionário':
                    $this->renderView('loggedIn/asNotClient/index', ['sessionInfo' => $sessionInfo]);
                    break;
            }
        } else {

            $this->redirectTo();
        }
    }
}
