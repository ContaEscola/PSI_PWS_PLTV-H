<?php


class FaturaCliente extends ActiveRecord\Model
{
    static $table_name = 'faturas';
    static $primary_key = 'id';

    static $connection = 'cliente';
}
