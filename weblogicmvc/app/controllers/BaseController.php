<?php


class BaseController
{
    // Renderiza a view, receb a string como localização da view e a data para a view conseguir utilizá-la
    protected function renderView($relativePath, $data = [])
    {
        // Extrai a data para conseguir usar o variável em vez de o array association
        extract($data);

        // Carrega a view
        require_once '../app/views/' . $relativePath . '.php';
    }

    // Carrega um modelo
    protected function loadModel($relativePath)
    {
        // Carrega o modelo
        require_once '../app/models/' . $relativePath . '.php';

        // Retorna o modelo carregado
        return new $relativePath;
    }

    // Redireciona para uma página, os defaults são o controlador home com o método index
    protected function redirectTo($controller = "Home", $action = "index", $params = [])
    {
        // Adiciona o controlador e a action ao url
        $url = APP_BASE_URL . "?c={$controller}&a={$action}";

        // Adicionar os parâmetros ao url
        foreach ($params as $key => $value) {
            $url .= "&{$key}={$value}";
        }

        // Redireciona para o url
        header("Location: " . $url);
    }



    protected function checkLoggedIn($expectedRole)
    {
        $auth = $this->loadModel('Auth');
        if ($auth->isLoggedIn($expectedRole))
            $this->redirectTo('Dashboard');
    }

    protected function getSessionInfo()
    {
        $auth = $this->loadModel('Auth');
        $username = $auth->getUsername();
        $role = $auth->getRole();

        return array("username" => $username, "role" => $role);
    }
}
