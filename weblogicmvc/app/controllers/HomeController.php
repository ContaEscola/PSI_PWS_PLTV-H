<?php


class HomeController extends BaseController
{
    public function index(){
        return View::make('home.index');
    }

    public function howTostart(){

        //View::attachSubView('titlecontainer', 'layout.pagetitle', ['title' => 'Quick Start']);
        return View::make('home.howToStart');
    }


    public function login(){
        return View::make('home.login');
    }

    public function logout(){
        session_unset();
        return View::make('home.index');
    }


    public function checklogin()
    {
        $users = User::all();

        foreach ($users as $user) {
            if (($user->username == $_POST['username']) && ($user->password == $_POST['password']) && ($user->estado != 'espera')) {
                $_SESSION['userid'] = $user->id;
                $_SESSION['login'] = 'sim';
                $_SESSION['username'] = $user->username;
                $_SESSION['tipo'] = $user->tipouser;
                return View::make('home.index');
            } else {
                echo "alert('I am an alert box!');";
            }
        }

    }




}