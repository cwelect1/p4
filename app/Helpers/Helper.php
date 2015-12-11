<?php

namespace App\helpers;

class Helper{

  public static function buildNavMenu(){
  
    //echo 'session.save_path()';

    $activePage = basename($_SERVER['PHP_SELF']);
    $header_count = 0;
    $menuItems = file('menu_items.txt');

    echo '<div class="col-sm-3 col-md-2 sidebar">';

    foreach($menuItems as $menuItem){
      
        $nav = explode(":", $menuItem);
        $page = trim($nav[0]);
        $link = trim($nav[1]);
        
        if($link == 'Header'){

          if($header_count >= 1){
            echo '</ul>';
          }

          echo '<ul class="nav nav-sidebar">';
          echo '<li><a href="' . $activePage .  '">' . $page . '</a></li>';

          $header_count++;

        }
        elseif($link == $activePage)
        {
            echo '<li  class="active"><a>' . $page . '</a></li>';
        }
        else
        {
            echo '<li><a href="' . $link .  '">' . $page . '</a></li>';
        }
    }
    echo '</ul>
        </div>';

  }

    public function buildNavMenuNew(){
  
    $buildNavMenu ='<div class="col-sm-3 col-md-2 sidebar">';

    $activePage = \Request::route()->getPath();//basename($_SERVER['PHP_SELF']);
    $header_count = 0;
    $menuItems = file('menu_items.txt');

    foreach($menuItems as $menuItem){
      
        $nav = explode(":", $menuItem);
        $page = trim($nav[0]);
        $link = trim($nav[1]);
        
        //if($link == 'Header'){
        if(starts_with($link, 'Header')){

          if($header_count >= 1){
            $buildNavMenu = $buildNavMenu . '</ul>';
          }

          $buildNavMenu = $buildNavMenu .  '<ul class="nav nav-sidebar">';
          $buildNavMenu = $buildNavMenu .  '<li><a href="' . substr($link, 7) .  '">' . $page . '</a></li>';

          $header_count++;

        }
        elseif($link == $activePage)
        {
            $buildNavMenu = $buildNavMenu .  '<li  class="active"><a>' . $page . '</a></li>';
        }
        else
        {
            $buildNavMenu = $buildNavMenu .  '<li><a href="' . $link .  '">' . $page . '</a></li>';
        }
    }
    $buildNavMenu = $buildNavMenu .  '</ul></div>';

    return $buildNavMenu;
  }
}

?>