<?php


class EmpresaFuncionario extends ActiveRecord\Model
{
    static $table_name = 'empresas';
    static $primary_key = 'id';

    static $connection = 'funcionario';

    static $validates_presence_of = array(
        array('designacaosocial', 'message' => 'Tem de inserir a designação social da empresa !'),
        array('email', 'message' => 'Tem de inserir o email da empresa !'),
        array('telefone', 'message' => 'Tem de inserir o telefone da empresa !'),
        array('nif', 'message' => 'Tem de inserir o nif da empresa !'),
        array('morada', 'message' => 'Tem de inserir a morada da empresa !'),
        array('capitalsocial', 'message' => 'Tem de inserir a capital social da empresa !'),
        array('localidade', 'message' => 'Tem de inserir a localidade da empresa !'),
        array('codpostal', 'message' => 'Tem de inserir o código postal da empresa !')
    );
}
