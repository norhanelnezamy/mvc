<?php
  class URL {

  function __construct(){


    $url = isset($_GET['url']) ? $_GET['url'] : null ;;
    $url = rtrim($url,'/');
    $url = explode('/',$url);
    //print_r($url);
    if (empty($url[0])) {
      require 'controllers/index.php';
      $controller = new Index();
      $controller->index();
      return false;
    }
    $file = 'controllers/'.$url[0].'.php';
    if(file_exists($file)){
        require $file ;
        $controller = new $url[0];
        $controller->index();
        if(isset($url[1])) {
          if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
          }
          else {
            $controller->{$url[1]}();
          }
       }
    }
    else {
      echo "there is an error";
    }
  }
}
