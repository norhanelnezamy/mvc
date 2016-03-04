<?php
/**
 *
 */
class Dashboard extends Controller {

  function __construct(){
    parent::__Construct();
    Session::init();
    if(Session::get('login_status') == False) {
        Session::destroy();
        header('Location:/mvc/user/login');
        exit;
    }
  }
  public function index(){
    View::render('views/dashboard/index.php');
  }

}
