<?php


class SiteController
{
    //É PRECISO QUE ACEITEM O PULL REQUEST NO GIT
    public function landingpage(){

        require_once '../views/landingpage/pandingpage.php';
    }

    public function home(){
        require_once '../views/home/login.html';

    }

    public function loggedcliente(){
        require_once '../views/loggedIn/asClient/index.html';


    }

    public function loggednotcliente(){
        require_once '../views/loggedIn/asNotClient/index.html';



    }

}