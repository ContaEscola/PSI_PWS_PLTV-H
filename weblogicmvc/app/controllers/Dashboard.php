<?php


class Dashboard extends BaseController
{

    public function index()
    {
        $auth = $this->loadModel('Auth');
        if ($auth->isLoggedIn([null])) {

            $usernameLoggedIn = $auth->getUsername();
            $roleLoggedIn = $auth->getRole();
            $idLoggedIn = $auth->getID();

            switch ($roleLoggedIn) {

                case 'Cliente':
                    $cond = array('conditions' => array('referenciaCliente = ? AND estado = ?', $idLoggedIn, 'Em Lançamento'), 'order' => 'data asc');
                    $faturas = FaturaCliente::all($cond);
                    $this->renderView('loggedIn/asClient/index', ['username' => $usernameLoggedIn, 'role' => $roleLoggedIn, 'faturas' => $faturas]);
                    break;

                case 'Administrador':
                case 'Funcionário':
                    $this->renderView('loggedIn/asNotClient/index', ['username' => $usernameLoggedIn, 'role' => $roleLoggedIn]);
                    break;
            }
        } else {

            $this->redirectTo();
        }
    }
}
