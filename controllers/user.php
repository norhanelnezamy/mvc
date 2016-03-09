<?php
/**
 *
 */
class User extends Controller {
  function __construct(){
    parent::__Construct();
    Session::init();
  }
  function index(){
    View::render('views/user/index.php');
  }

  public function help($attr = False){
    View::render('views/user/help.php');
    if(isset($attr)){
      echo $attr ;
    }
  }
  public function login(){
    View::render('views/user/login.php');
  }
  public function postLogin()
  {
    require 'models/userModel.php';
    $user = new UserModel();
    if($user->auth()== TRUE){
      header('Location:/mvc/dashboard');
    }
    else {
      header('Location:/mvc/user/login');
    }
  }
  public function create(){
    require 'models/userModel.php';
    $user = new UserModel();
    $status = $user->adduser();
    if ($status) {
      header('Location:/mvc/dashboard');
    }
    else {
      echo 'there is an error in adding user';
    }
  }
  public function show(){
    require 'models/userModel.php';
    $user = new UserModel();
    $users = $user->listUsers();
    foreach ($users as $u) {
      echo $u[0].'<br>';
    }
  }
  public function logout(){
    Session::destroy();
    header('Location:/mvc/user/login');
    exit;
  }

}
