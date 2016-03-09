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
    $query = $this->db->prepare(" select * from users where  email = ? and password = ? ");
    $query->bindValue(1, $_POST['email']);
    $query->bindValue(2, md5($_POST['password']));
    $status =$query->execute();
    if($status){
      $data = $query->fetchAll();
      Session::set('login_status' , TRUE);
      Session::set('user_role' , $data[0]['role']);
      Session::set('user_id' , $data[0]['id']);
      return TRUE ;
    }
    else {
      Session::set('login_status' , FALSE);
      return FALSE ;
    }
  }

  public function addUser(){
    $query = $this->db->prepare(" insert into users (email,password,username,role) values (?,?,?,?)");
    $query->bindValue(1, $_POST['new_email']);
    $query->bindValue(2, md5($_POST['new_password']));
    $query->bindValue(3, $_POST['new_username']);
    $query->bindValue(4, $_POST['role']);
    $status =$query->execute();
    if ($status) {
      return TRUE;
    }
    else {
      return False;
    }
  }

  public function listUsers(){
    $query = $this->db->prepare(" select email from users");
    $status =$query->execute();
    if ($status) {
      $data = $query->fetchAll();
      return $data;
    }
  }

}


 ?>
