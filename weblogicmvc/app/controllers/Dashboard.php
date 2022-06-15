<?php


class Dashboard extends BaseController
{

    public function index()
    {
        $auth = $this->loadModel('Auth');
        if ($auth->isLoggedIn([null])) {

            $usernameLoggedIn = $auth->getUsername();
            $roleLoggedIn = $auth->getRole();

            switch ($roleLoggedIn) {

                case 'Cliente':
                    $this->renderView('loggedIn/asClient/index', ['username' => $usernameLoggedIn, 'role' => $roleLoggedIn]);
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
