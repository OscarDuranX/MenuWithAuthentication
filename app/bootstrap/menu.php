<?php
//Home
MenuWithAuthentication::menu()
    -> title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('Oscar');

//Another Links
MenuWithAuthentication::menu()
    -> title('Another links')
    ->user(5);

//Multilevel
MenuWithAuthentication::menu() -> title('Multilevel')->icon('fa-battery-full');
    MenuWithAuthentication::menu() -> title('Link in lvl 1');
    MenuWithAuthentication::menu() -> title('Link in lvl 2');

MenuWithAuthentication::menu()
    -> title('Últim menú')
    ->icon('fa-briefcase')
    ->url('https://www.google.es/');