<?php

require_once '../Model.php';
session_start();


if(isset($_POST["save"])) {

  
  $data['name'] = $_POST['name'];
  $data['phone'] = $_POST['phone'];
  $data['email'] = $_POST['email'];
  $data['city'] = $_POST['city'];
  $data['country'] = $_POST['country'];
  $data['username'] = $_SESSION['username'];

  if(editInfo($data))
  {
    header('Location: ../Profile.php');
  }
  else
  {
    echo "ERROR";
  }


}


?>