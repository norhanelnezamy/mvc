<?php
/**
 *
 */
class Index extends Controller
{

  function __construct()
  {
    
  }
  function index(){
    View::render('views/index.php');
  }
}

 ?>
