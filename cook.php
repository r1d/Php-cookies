<?php

/** ********************************************************************************
 * Cook class: easy cookies managment
 * 
 * usage:
 *      cook::set('var','val');
 *      $var=cook::get('var');
 *      $var=cook::forget('var');
 *
 * files:
 *      /helpers/cook.php
 * ***********************************************************************************/

namespace \helpers;

class Cook {
    
    static $set=[];
    
    static function get($var,$default=false)
    { 
        return isset(self::$set[$var]) ? self::$set[$var] : ($_COOKIE[$var] ?? $default);
    }
        
    static function set($var,$val,$expires=31104000) // default 12*60*60*24*30 = 1 year
    { 
        self::$set[$var]=$val;
        setcookie($var , $val, time()+$expires,'/'); //set for 1 year
    }
    
    static function forget($var)
    {
        $val=self::get($var);

        if(isset(self::$set[$var])) unset(self::$set[$var]);
        setcookie($var , '', time()-3600,'/');

        return $val;
    }

}
