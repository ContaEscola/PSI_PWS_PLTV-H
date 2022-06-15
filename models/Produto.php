<?php
use \ActiveRecord\Model;

class Produto  extends Model
{

    static $table_name = 'produtos';
    static $primary_key = 'id';

    static $connection = 'cliente';

    static $validates_presence_of = array(
        array('id'),
        array('descricao', 'message' => 'insira a descricao do produto ')
    );

    static $validates_size_of = array(
           array('title', 'within' => array(1,5), 'too_short' => 'too short!'),
      array('cover_blurb', 'is' => 20),
      array('descricao', 'maximum' => 10, 'too_long' => 'descricao do produto')
    );





}