<?php

use ArmoredCore\Facades\Router;

/****************************************************************************
 *  URLEncoder/HTTPRouter Routing Rules
 *  Use convention: controllerName/methodActionName
 ****************************************************************************/
Router::get('/',			'HomeController/index');
Router::get('home/',		'HomeController/index');
Router::get('home/index',	'HomeController/index');
Router::get('home/howToStart',	'HomeController/startToSart');


Router::get('user/index','UserController/index');
Router::get('user/create','UserController/create');
Router::get('user/store','UserController/store');
Router::get('user/update','UserController/update');
Router::get('home/checklogin','HomeController/checklogin');


Router::resource('user','UserController');

Router::resource('cliente','ClienteController');

Router::resource('funcionario','FuncionarioController');

Router::resource('home','HomeController');

Router::resource('Faturas','FaturasController');


