<?php
/**
 *
 */
class Database extends PDO
{
  function __construct()
  {
    try{
      parent::__construct('mysql:host=localhost;dbname=social','root','super_nour');
    }
    catch(PDOException  $e ){
      echo "Error: ".$e;
    }
  }
}
