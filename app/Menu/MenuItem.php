<?php
namespace MenuWithAuthentication\Menu;


/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 14/12/15
 * Time: 17:46
 */
/**
 * Class MenuItem
 * @package MenuWithAuthentication\Menu
 */
/**
 * Class MenuItem
 * @package MenuWithAuthentication\Menu
 */
class MenuItem
{
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $icon;
    /**
     * @var
     */
    protected $user;
    /**
     * @var
     */
    protected $url;
    /**
     * @var
     */
    protected $rol;

    /**
     * @var
     */
    protected $permission;
    /**
     * @var
     */
    protected $level;
    /**
     * @var
     */
    private $id;

    protected $subItems = [];

    /**
     * @var MenuItem
     */
    public static $current;

    /**
     * MenuItem constructor.
     */
    public function __construct($id)
    {
        $this->id = $id;
        if(is_null(static::$current)){
            static::$current = $this;
            $this->level(0);
        }else{
            static::$current = addItem($this);
            $this->level(static::$current->level()+1);
        }
    }

    /**
     * @param $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->subItems[] = $item;
        return $this;
    }

    /**
     * @param null $title
     * @return $this|MenuItem
     */
    public function title($title=null)
    {
        if($title==null){
            return $this->title;
        }

        $this->title= $title;
        return $this;
    }

    /**
     * @param null $icon
     * @return $this|MenuItem
     */
    public function icon($icon=null)
    {
        if($icon==null){
            return $this->icon;
        }

        $this->icon= $icon;
        return $this;
    }

    /**
     * @param null $user
     * @return $this|MenuItem
     */
    public function user($user=null)
    {
        if($user==null){
            return $this->user;
        }

        $this->user= $user;
        return $this;
    }

    /**
     * @param null $url
     * @return $this|MenuItem
     */
    public function url($url=null)
    {
        if($url==null){
            return $this->url;
        }

        $this->url= $url;
        return $this;
    }

    /**
     * @param null $rol
     * @return $this|MenuItem
     */
    public function rol($rol=null)
    {
        if($rol==null){
            return $this->rol;
        }

        $this->rol= $rol;
        return $this;
    }

    /**
     * @param null $permission
     * @return $this
     */
    public function permission($permission=null)
    {
        if($$permission==null){
            return $this->$permission;
        }

        $this->$permission= $$permission;
        return $this;
    }

    /**
     * @param null $level
     * @return $this
     */
    public function level($level=null)
    {
        if($level==null){
            return $this->level;
        }

        $this->level= $level;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function render()
    {
        $data = array();
        $data['url']= $this->url;
        $data['icon']= $this->icon;
        $data['title']= $this->title;
        $data['id']= $this->id;
        //$data['permission']= $this->permission;
       // $data['user']= $this->user;
       // $data['rol']= $this->rol;
        return (String) view('menuitem',$data);
    }


}