<?php

class Fatura extends BaseController
{

    public function __construct()
    {
        $auth = $this->loadModel('Auth');

        if (!$auth->isLoggedIn(['Cliente']))
            $this->redirectTo();
    }

    public function index($id)
    {
        try {

            $faturaToCheck = FaturaCliente::find([$id]);

            $auth = $this->loadModel('Auth');
            $clienteID = $auth->getID();

            if ($faturaToCheck == null || ($faturaToCheck->referenciacliente != $clienteID)) {
                $this->redirectTo('Dashboard');
            }

            $select = 'lf.quantidade, lf.valorUnitario, lf.valorIva, p.referencia, p.descricao, p.preco';
            $from = 'linhafaturas as lf';
            $joins = 'INNER JOIN produtos as p ON(lf.produto_id = p.id)';
            $conditions = array('lf.fatura_id = ?', $id);
            $order = 'lf.valorUnitario desc';
            $faturaFormatada = FaturaCliente::all(array('select' => $select, 'from' => $from, 'joins' => $joins, 'conditions' => $conditions, 'order' => $order));



            $client = UserToLogin::find([$faturaToCheck->referenciacliente]);
            $funcionario = UserToLogin::find([$faturaToCheck->referenciafuncionario]);

            $empresa = EmpresaCliente::first();

            $auth = $this->loadModel('Auth');
            $usernameLoggedIn = $auth->getUsername();
            $roleLoggedIn = $auth->getRole();


            $this->renderView('loggedIn/asClient/fatura', ['username' => $usernameLoggedIn, 'role' => $roleLoggedIn, 'fatura' => $faturaToCheck, 'cliente' =>  $client, 'empresa' => $empresa, 'funcionario' => $funcionario, 'faturaFormatada' => $faturaFormatada]);
        } catch (Exception $ex) {
            $this->redirectTo('Dashboard');
        }
    }
}
