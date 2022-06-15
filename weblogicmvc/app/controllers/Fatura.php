<?php

class Fatura extends BaseController
{
    private $auth;
    private $sessionInfo;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');

        if (!$this->auth->isLoggedIn(['Cliente']))
            $this->redirectTo();

        $this->sessionInfo = $this->getSessionInfo();
    }

    public function index($id)
    {
        try {

            $faturaToCheck = FaturaCliente::find([$id]);

            $clienteID = $this->auth->getID();

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

            $this->renderView('loggedIn/asClient/fatura', ['sessionInfo' => $this->sessionInfo, 'fatura' => $faturaToCheck, 'cliente' =>  $client, 'empresa' => $empresa, 'funcionario' => $funcionario, 'faturaFormatada' => $faturaFormatada]);
        } catch (Exception $ex) {
            $this->redirectTo('Dashboard');
        }
    }
}
