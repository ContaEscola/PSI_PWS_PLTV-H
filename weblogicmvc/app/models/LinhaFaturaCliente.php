<?php


class LinhaFaturaCliente extends ActiveRecord\Model
{
    static $table_name = 'linhafaturas';
    static $primary_key = 'id';

    static $connection = 'cliente';
}
