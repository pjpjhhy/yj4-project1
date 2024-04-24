<?php

include '../config/const.php';

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "update member set ";
session_start();
if($name != NULL) {
  $sql .= "name='$name' where id='$id'";
  mysqli_query($db_connect, $sql);
  $_SESSION['user_name'] = $name;
}
if($password != NULL) {
  $sql .= "password='$password' where id='$id'";
  mysqli_query($db_connect, $sql);
}
if($email != NULL) {
  $sql .= "email='$email' where id='$id'";
  mysqli_query($db_connect, $sql);
  $_SESSION['user_email'] = $email;
}


header("Location: ../myPage.php");


