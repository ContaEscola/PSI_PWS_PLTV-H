<?php

use \ActiveRecord\Model;
class Iva  extends Model
{
    static $validates_presence_of = array(
        array('id'),
        array('percentagem', 'message' => 'YooaaH it must be provided')
    );

}