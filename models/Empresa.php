<?php
use \ActiveRecord\Model;

class Empresa extends Model
{
    static $table_name = 'empresas';
    static $primary_key = 'id';

    static $connection = 'cliente';

    static $validates_presence_of = array(
        array('id'),
        array('designacaosocial', 'message' => 'tem que inseir  a designacaosocial da empresa')
    );

    static $validates_size_of = array(
        array('title', 'within' => array(1,5), 'too_short' => 'too short!'),
        array('cover_blurb', 'is' => 20),
        array('designacaosocial', 'maximum' => 10, 'too_long' => 'desigançao da empresa')
    );

}