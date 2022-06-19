<?php

class UserAdmin extends ActiveRecord\Model
{
    static $table_name = 'users';
    static $primary_key = 'id';

    static $connection = 'admin';

    static $validates_presence_of = array(
        array('username', 'message' => 'Tem de inserir o seu nome de utilizador/a!'),
        array('password', 'message' => 'Tem de inserir a sua password !'),
        array('email', 'message' => 'Tem de inserir o seu email !'),
        array('telefone', 'message' => 'Tem de inserir o seu número telefone !'),
        array('nif', 'message' => 'Tem de inserir o seu NIF !'),
        array('morada', 'message' => 'Tem de inserir a sua morada !'),
        array('codpostal', 'message' => 'Tem de inserir o seu código postal !'),
        array('localidade', 'message' => 'Tem de inserir a sua localidade !')
    );
}
