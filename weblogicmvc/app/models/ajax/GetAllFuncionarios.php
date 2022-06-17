<?php

require_once '../../../vendor/autoload.php';

// Múltiplas conexões
$connections = array(
    'cliente' => 'mysql://cliente:clienteConnection@localhost/pwsDB',
    'funcionario' => 'mysql://funcionario:funcionarioConnection@localhost/pwsDB',
    'admin' => 'mysql://admin:adminConnection@localhost/pwsDB'

);


ActiveRecord\Config::initialize(function ($cfg) use ($connections) {
    $cfg->set_model_directory('../../models');
    $cfg->set_connections($connections);
});


require_once '../FuncionarioAdmin.php';

$input = $_GET['v'];
if (empty($input)) {
    echo "";
    return;
}

$conditions = array("role = ? AND username LIKE '" . $input . "%'", 'Funcionário');
$allFuncionarios = FuncionarioAdmin::all(array('conditions' => $conditions));

if ($allFuncionarios != null) {

    $stringFormatada = "";
    if (is_array($allFuncionarios)) {
        $counter = 0;
        foreach ($allFuncionarios as $funcionario) {

            if ($counter != 0) {
                $stringFormatada .= ";";
            }

            $stringFormatada .= $funcionario->username;

            $counter++;
        }

        echo $stringFormatada;
    }
} else
    echo "";
