<?php 

class Dumpster
{
    public static function _die($var) 
    {
        print_r($var, true);
        die();
    }
}
