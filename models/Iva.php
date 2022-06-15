<?php

use \ActiveRecord\Model;
class Iva  extends Model
{
    static $table_name = 'ivas';
    static $primary_key = 'id';

    static $connection = 'cliente';

    static $validates_presence_of = array(
        array('id'),
        array('percentagem', 'message' => 'YooaaH it must be provided')
    );


    static $validates_size_of = array(
        array('title', 'within' => array(1,5), 'too_short' => 'too short!'),
        array('cover_blurb', 'is' => 20),
        array('percentagem', 'maximum' => 10, 'too_long' => 'descricao do produto')
    );


}