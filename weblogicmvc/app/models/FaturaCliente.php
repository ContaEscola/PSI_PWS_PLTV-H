<?php


class FaturaCliente extends ActiveRecord\Model
{
    static $table_name = 'faturas';
    static $primary_key = 'id';

    static $connection = 'cliente';

    static $has_many = array(
        array('linhafaturas', 'class_name' => 'LinhaFaturaCliente', 'foreign_key' => 'fatura_id')
    );
}
