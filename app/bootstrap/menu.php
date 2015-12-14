<?php
//Home
MenuWithAuthentication::menu('home')
    -> title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('Oscar');

//Another Links
MenuWithAuthentication::menu('anotLink')
    -> title('Another links')
    ->user(5);

//Multilevel
MenuWithAuthentication::menu('multilevel')
    -> title('Multilevel')
    ->icon('fa-battery-full');
    MenuWithAuthentication::menu('link1')
        -> title('Link in lvl 1');
    MenuWithAuthentication::menu('link2')
        -> title('Link in lvl 2');

MenuWithAuthentication::menu('link4')
    -> title('Últim menú')
    ->icon('fa-briefcase')
    ->url('https://www.google.es/');

//$menuHome = MenuWithAuthentication::menu('home');