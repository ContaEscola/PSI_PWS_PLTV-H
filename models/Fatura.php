<?php
use \ActiveRecord\Model;

class Fatura extends Model
{
    static $table_name = 'faturas';
    static $primary_key = 'id';

    static $connection = 'cliente';

    static $validates_presence_of = array(
        array('id'),
        array('data', 'message' => 'insira a data da fatura ')
    );


    static $validates_size_of = array(
        array('title', 'within' => array(1,5), 'too_short' => 'too short!'),
        array('cover_blurb', 'is' => 20),
        array('data', 'maximum' => 10, 'too_long' => 'data da fatura ')
    );


}