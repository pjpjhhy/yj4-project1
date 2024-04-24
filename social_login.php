<?php

// include 'config/const.php';  // social_login_controller에서 이미 const.php를 불러왔기 때문에 선언할 필요 X
include 'controller/social_login_controller.php';
include 'repository/social_login_repository.php';

$code = $_GET['code'];
$state = $_GET['state'];

$repository = new social_login_repository($db_connect);
$social_login_instance = new social_login_controller($code, $state, $repository);

$social_login_instance->get_tokent();
$social_login_instance->get_profile();
$social_login_instance->login();
