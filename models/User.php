<?php
use \ActiveRecord\Model;

class User extends Model
{

    static $validates_presence_of = array(
        array('id'),
        array('username', 'message' => 'YooaaH it must be provided')
    );




}