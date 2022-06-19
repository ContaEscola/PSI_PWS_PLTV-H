<?php

class UserFuncionario extends ActiveRecord\Model
{
    static $table_name = 'users';
    static $primary_key = 'id';

    static $connection = 'funcionario';


    static $validates_presence_of = array(
        array('username', 'message' => 'Tem de inserir o seu nome de utilizador/a !'),
        array('password', 'message' => 'Tem de inserir a sua password !')

    );
}
