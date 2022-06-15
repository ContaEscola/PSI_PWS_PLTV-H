<?php


class EmpresaCliente extends ActiveRecord\Model
{
    static $table_name = 'empresas';
    static $primary_key = 'id';

    static $connection = 'cliente';
}
