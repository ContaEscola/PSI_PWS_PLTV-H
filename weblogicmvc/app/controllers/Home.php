<?php

class Home extends BaseController
{

    public function __construct()
    {
        $this->checkLoggedIn([null]);
    }

    public function index()
    {
        $this->renderView('home/landingPage');
    }

    public function comoComecar()
    {
        $this->renderView('home/howToStart');
    }
}
