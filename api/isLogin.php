<?php

include '../config/const.php';

if(empty($_SESSION["user_id"])) {
  session_start();
}

if(isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
} else {
  $user_id = "";
}


echo json_encode($user_id);