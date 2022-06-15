<?php
use \ActiveRecord\Model;

class Produto  extends Model
{
    static $validates_presence_of = array(
        array('id'),
        array('referencia', 'message' => 'YooaaH it must be provided')
    );

}