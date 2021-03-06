<?php
namespace MenuWithAuthentication\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 14/12/15
 * Time: 17:10
 */
class SidebarComposer
{

    public function compose(View $view)
    {
        $view->with('menu',$this->getSideBarMenu());

    }

    public function getSideBarMenu()
    {
        return array();

      /*  $menu =
            MenuWithAuthentication::instance()
                ->getMenu();
        return array($menu);*/
    }

}