<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/15
 * Time: 21:48
 */
class Auth
{
    public function __construct()
    {
        $this->ci =& get_instance();
        session_start();
    }
}