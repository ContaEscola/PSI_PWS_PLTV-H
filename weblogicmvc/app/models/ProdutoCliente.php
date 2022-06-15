<?php


class ProdutoCliente extends ActiveRecord\Model
{

    static $table_name = 'produtos';
    static $primary_key = 'id';

    static $connection = 'cliente';
}
