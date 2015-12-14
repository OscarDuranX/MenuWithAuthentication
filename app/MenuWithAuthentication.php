<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

/**
 * Class MenuWithAuthentication
 * @package MenuWithAuthentication
 */
class MenuWithAuthentication
{
    /**
     * @var null
     */
    protected static $instance = null;

    /**
     * @var MenuItem[]
     */
    protected $menu;

    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct($id)
    {
        $this->menu = static::menu($id);
    }

    /**
     * @param $id
     * @return MenuItem
     */
    public static function menu($id)
    {
        return new MenuItem($id);
    }

    /**
     * @return null|static
     */
    public static function instance($id)//Genera objectes de ell mateix (statics)
    {
        if(is_null(static::$instance)){//assegurem que es crea una sola vegada
            return static::$instance = new static($id);
        }
        return static::$instance;//retornem el que ja tenim creat
    }

    /**
     *
     */
    public function getMenu()
    {
        return $this->menu->items() ;
    }

}