<?php

class Home extends BaseController
{

    public function index()
    {
        $this->renderView('home/');
    }
}
