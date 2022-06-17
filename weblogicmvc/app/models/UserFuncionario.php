<?php

class UserFuncionario extends ActiveRecord\Model
{
    static $table_name = 'users';
    static $primary_key = 'id';
    
    static $connection = 'funcionario';
    
    
    static $validates_presence_of = array(
        array('username', 'message' => 'Tem de inserir o nome do utilizador'),
        array('password', 'message' => 'Tem de inserir a password do utilizador')
        
    );
    
    
    
    
    
}