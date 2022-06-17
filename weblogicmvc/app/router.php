<?php

class Router
{
    // O controlodar, método e parâmetros por defeito
    private $controller = 'Home';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        // Obtém o url formatado
        $url = $this->parseUrl();

        // Verifica se existe o controlodor recebido
        if (file_exists(('../app/controllers/' . $url[0] . '.php'))) {

            // Passa o controlador recebido para o controller
            $this->controller = $url[0];
        }

        // Carrega o controller
        require_once '../app/controllers/' . $this->controller . '.php';

        // Instancia o controller no controller
        $this->controller = new $this->controller;

        // Verifica se a action recebida existe no controller
        if (method_exists($this->controller, $url[1])) {

            // Passa a action recebida para o method
            $this->method = $url[1];
        }


        // Função que chama o método do controlador com os devidos parâmetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    // Formata o url recebido
    private function parseUrl()
    {
        // Obtém todas as variáveis do url
        $urlOriginal = $_GET;

        // Inicia o url formatado, terá um controlador para o 1º elemento e a action no 2º elemento
        $urlParsed = ["", ""];


        // verifica se o controlador recebido está empty ou null
        if (!empty($_GET['c'])) {

            // Passa o controlador recebido para o 1º elemento do url formatado
            $urlParsed[0] = $urlOriginal['c'];

            // Remove o controlador recebido do url original
            unset($urlOriginal['c']);
        }

        // verifica se a action recebida está empty ou null
        if (!empty($_GET['a'])) {

            // Passa a action recebida para o 2º elemento do url formatado
            $urlParsed[1] = $urlOriginal['a'];

            // Remove a action recebida do url original
            unset($urlOriginal['a']);
        }

        // Dá um loop na restante parte do url original ou seja os parâmetros
        foreach ($urlOriginal as $key => $value) {

            // Passa cada parâmetro restante para o array dos pârametros
            $this->params[] = $value;
        }

        // Retorna o url formatado
        return $urlParsed;
    }
}
