<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

class MenuWithAuthentication
{
    protected static $instance = null;

    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {
    }

    public static function menu($id)
    {
        return new MenuItem($id);
    }

    public static function instance()//Genera objectes de ell mateix (statics)
    {
        if(is_null(static::$instance)){//assegurem que es crea una sola vegada
            return static::$instance = new static;
        }
        return static::$instance;//retornem el que ja tenim creat
    }
}