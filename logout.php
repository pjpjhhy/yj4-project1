<?php

include "controller/social_logout_controller.php";

session_start();

$access_token = $_SESSION['access_token'];
$user_social_type = $_SESSION['user_social_type'];
$logout = new logout_controller($access_token);

if($user_social_type == "kakao") {
  $logout->kakao_logout();
} else if($user_social_type == "naver") {
  $logout->naver_logout();
}


unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_email']);
unset($_SESSION['user_profile']);
unset($_SESSION['user_social_type']);
unset($_SESSION['user_role']);
unset($_SESSION['access_token']);

header("Location: index.php");

?>