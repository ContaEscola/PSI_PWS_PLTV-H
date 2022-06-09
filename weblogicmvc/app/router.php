<?php


if(!(isset($_GET['c']) && isset($_GET['a']))){
    $siteController = //FALTA FAZER A CLASS
}else {
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $controller = $_GET['c'];
    $action = $_GET['a'];
    switch ($controller) {
        case 'fatura':
          //  $siteController = FALTA FAZER A CLASS
            switch ($action) {

                case 'cliente':
                   // $siteController->loggedcliente(); //AINDA NAO ACEITARAM O REQUEST NAO TENHO A CERTEZA SE É ESTA A FUNCÃO
                    break;
                case 'notcliente':
                 //  $siteController->loggednotcliente(); //AINDA NAO ACEITARAM O REQUEST NAO TENHO A CERTEZA SE É ESTA A FUNCÃO
                    break;
            }
    }
}
