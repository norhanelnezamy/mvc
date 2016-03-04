<?php
/**
 *
 */
class View
{

  function __construct()
  {
    //echo 'this is view class<br>';
  }

  public static function  render($file){
    if(file_exists($file)){
        require 'views/layout/header.php';
        require $file ;
        require 'views/layout/footer.php';
    }
    else {
      echo "this file not exists";
    }


  }
}

 ?>
