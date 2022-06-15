<?php
use \ActiveRecord\Model;

class Empresa extends Model
{
    static $validates_presence_of = array(
        array('id'),
        array('designacaosocial', 'message' => 'YooaaH it must be provided')
    );

}