<?php

class FuncionarioAdmin extends ActiveRecord\Model
{
    static $table_name = 'users';
    static $primary_key = 'id';

    static $connection = 'admin';

    static $validates_presence_of = array(
        array('username', 'message' => 'Tem de inserir o nome do funcionário/a !'),
        array('password', 'message' => 'Tem de inserir a password do funcionário/a !'),
        array('email', 'message' => 'Tem de inserir o email do funcionário/a !'),
        array('telefone', 'message' => 'Tem de inserir o telefone do funcionário/a !'),
        array('nif', 'message' => 'Tem de inserir o nif do funcionário/a !'),
        array('morada', 'message' => 'Tem de inserir a morada do funcionário/a !'),
        array('codpostal', 'message' => 'Tem de inserir o código postal do funcionário/a !'),
        array('localidade', 'message' => 'Tem de inserir a localidade do funcionário/a !')
    );
}
