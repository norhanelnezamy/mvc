<?php
  class URL {

  function __construct() {

    $url = isset($_GET['url']) ? $_GET['url'] : null ;;
    $url = rtrim($url,'/');
    $url = explode('/',$url);

    // redirect to the default index page "mvc/index.php"
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
        // calling controller method
        if(isset($url[1])) {
          // if this method exists
          if (method_exists($controller,$url[1])) {
            //  passing parameter to controller method
            if(isset($url[2])){
                $controller->{$url[1]}($url[2]);
            }
            //  calling method without parameter
            else {
              $controller->{$url[1]}();
            }
          }
          //  if not find the method
          else {
            echo 'there is an error in find '.$url[1].' method';
          }
       }
       else {
         //  calling index() method by default in any controller
         $controller->index();
       }
    }
    //  if not find the controller
    else {
      echo "there is an error in find ".$url[0]. ' controller';
    }
  }
}
