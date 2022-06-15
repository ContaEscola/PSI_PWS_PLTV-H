<?php

use foo\bar\biz\User;
use User as GlobalUser;

class Login extends BaseController
{

    public function  __construct()
    {
        echo 'hey';
        $this->checkLoggedIn(null);
    }

    public function index()
    {
        $freshUser = new UserToLogin();

        $this->renderView('home/login', ['user' => $freshUser]);
    }

    public function login()
    {

        $username = "";
        $password = "";


        if (!empty($_POST['username'])) $username = $_POST['username'];
        if (!empty($_POST['password'])) $password = $_POST['password'];

        $attributes = array('username' => $username, 'password' => $password);
        $userToLogin = new UserToLogin($attributes);

        if ($userToLogin->is_valid()) {

            $customErrors = array();

            $userToLookup = UserToLogin::find_by_username($username);

            if ($userToLookup != null) {

                $userPasswordOnDB = $userToLookup->password;

                if (password_verify($password, $userPasswordOnDB)) {

                    $auth = $this->loadModel('Auth');
                    $auth->setAuth($username, $userToLookup->role);

                    $this->redirectTo('Dashboard', 'index');
                } else {
                    $customErrors['password'] = 'Password Errada!';
                    $this->renderView('home/login', ["user" => $userToLogin, 'customErrors' => $customErrors]);
                }
            } else {

                $customErrors['username'] = 'Utilizador Inválido!';
                $this->renderView('home/login', ["user" => $userToLogin, 'customErrors' => $customErrors]);
            }
        } else {
            $this->renderView('home/login', ["user" => $userToLogin]);
        }
    }
}
