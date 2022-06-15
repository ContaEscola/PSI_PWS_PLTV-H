<?php

require_once '../vendor/autoload.php';

require_once '../app/controllers/BaseController.php';

define("APP_BASE_URL", "http://localhost/PSI_PWS_PLTV-H/weblogicmvc/public/");

// Múltiplas conexões
$connections = array(
    'cliente' => 'mysql://cliente:clienteConnection@localhost/pwsDB',
    'funcionario' => 'mysql://funcionario:funcionarioConnection@localhost/pwsDB',
    'admin' => 'mysql://admin:adminConnection@localhost/pwsDB'

);


ActiveRecord\Config::initialize(function ($cfg) use ($connections) {
    $cfg->set_model_directory('../app/models');
    $cfg->set_connections($connections);
});
