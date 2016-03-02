<?php
/**
 *
 */
class User extends Controller {
  function __construct(){
    parent::__Construct();
  }
  function index(){
    View::render('views/user/index.php');
  }

  public function help($attr = False){
    echo "you are in help method </br>";
    if(isset($attr)){
      echo $attr ;
    }
  }
}
