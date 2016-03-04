<?php
/**
 *
 */
class UserModel extends Model
{
  public function __construct(){
    parent::__construct();
  }

  public function auth()
  {
    $query = $this->db->prepare(" select id from users where  email = ? and password = ? ");
    $query->execute(array($_POST['email'], md5($_POST['password'])));
    if($query->fetchAll()){
      Session::set('login_status' , TRUE);
      return TRUE ;
    }
    else {
      Session::set('login_status' , FALSE);
      return FALSE ;
    }
  }

}


 ?>
