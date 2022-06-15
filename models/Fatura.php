<?php
use \ActiveRecord\Model;

class Fatura extends Model
{
    static $validates_presence_of = array(
        array('id'),
        array('data', 'message' => 'YooaaH it must be provided')
    );
}