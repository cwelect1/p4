<?php

namespace App\helpers;

class Helper{
  public static function buildNavMenu(){
  
    //echo 'session.save_path()';

    $activePage = basename($_SERVER['PHP_SELF']);

    $menuItems = file('menu_items.txt');

    echo '<div class="col-sm-3 col-md-2 sidebar">';

    foreach($menuItems as $menuItem){
      
        $nav = explode(":", $menuItem);
        $page = trim($nav[0]);
        $link = trim($nav[1]);
        $header_count = 0;
        
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
}

?>