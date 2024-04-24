<?php

include 'config/const.php';

$id = $_POST['id'];
$pw = $_POST['pw'];
$email = $_POST['email'];
$name = $_POST['name'];
$profile = "./assets/profiles/default.jpg";
$social_type = "일반";
$member_role = "일반회원";
$created_at = date("Y-m-d H:i:s");

$sql = "insert into member(id, password, email, name, profile_url, social_type, member_role, created_at) ";
$sql .= "values('$id', '$pw', '$email', '$name', '$profile', '$social_type', '$member_role', '$created_at')";

mysqli_query($db_connect, $sql);
mysqli_close($db_connect);

header("Location: index.php");



?>