<?php

include "../config/const.php";

$type;
$sql;
$message;
$isDuplicate;

if(isset($_POST)) {
  $data = file_get_contents("php://input");
  $json = json_decode($data, true);
  
  $type = $json['type'];
  $sql = $json['sql'];

  if($type == "look") {
    $result = mysqli_query($db_connect, $sql);
    $num = mysqli_num_rows($result);
    $arr = array();

    if($num > 0) {
      while($row = mysqli_fetch_array($result)) {
        $arr[] = $row;
      }
    } 
    mysqli_close($db_connect);
    echo json_encode($arr);

  } else if($type == "delete") {
    mysqli_query($db_connect, $sql);
    $message = "삭제완료";
    echo json_encode($message);

  } else if($type == "check") {
    $result = mysqli_query($db_connect, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record) {
    $isDuplicate = false;
    echo json_encode($isDuplicate);
  
   }else {
    $isDuplicate = true;
    echo json_encode($isDuplicate);
   }
  } else if($type == "find") {
    $email = $sql['email'];
    $id = $sql['id'];

    if($id == "") {
      $sql = "select id from member where email='$email';";
      $result = mysqli_query($db_connect, $sql);
      $num_record = mysqli_num_rows($result);

      $findId = array();

      if($num_record) {
        $findId['id'] = mysqli_fetch_row($result)[0];
        $findId['type'] = "id";
      } else {
        $findId['type'] = "nope";
      }
      echo json_encode($findId);
    } else {
      $sql = "select password from member where email='$email' and id='$id'";
      $result = mysqli_query($db_connect, $sql);
      $num_record = mysqli_num_rows($result);

      $findId = array();

      if($num_record) {
        $findId['password'] = mysqli_fetch_row($result)[0];
        $findId['type'] = "password";
      } else {
        $findId['type'] = "nope";
      }
      echo json_encode($findId);
    }
  } else if($type == "liked") {
    $user_id = $sql['user_id'];
    $performance_title = $sql['performance_title'];
    $isLiked = array();

    $sql = "select * from liked where member_id='$user_id' and performance_title='$performance_title'";
    $result = mysqli_query($db_connect, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record) {
      $isLiked['isLiked'] = true;
    }
    echo json_encode($isLiked);

  } else if($type == "pushLike") {
    $user_id = $sql['user_id'];
    $performance_title = $sql['performance_title'];
    $performance_poster_url = $sql['performance_poster_url'];
    $performance_code = $sql['performance_code'];
    
    $sql = "select * from liked where member_id='$user_id' and performance_title='$performance_title'";
    $result = mysqli_query($db_connect, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record) {
      $sql = "delete from liked where member_id='$user_id' and performance_title='$performance_title'";
      mysqli_query($db_connect, $sql);

      $message = "있슈";
      echo json_encode($message);
    } else {
      $sql = "insert into liked(member_id, performance_title, performance_poster_url, performance_code)";
      $sql .= "values('$user_id', '$performance_title', '$performance_poster_url', '$performance_code')";
      mysqli_query($db_connect, $sql);
      
      $message = "없슈";
      echo json_encode($message);
    }
  } else if($type == "view") {
     $user_id = $sql['user_id'];
     $sql = "select performance_title, performance_poster_url, performance_code from liked where member_id='$user_id'";
    
     $result = mysqli_query($db_connect, $sql);
     $num = mysqli_num_rows($result);
     $arr = array();

     if($num > 0) {
       while($row = mysqli_fetch_array($result)) {
         $arr[] = $row;
       }
     } 
     mysqli_close($db_connect);
     echo json_encode($arr);
  } else if($type == "update") {
    $user_id = $sql['user_id'];
    $update_value = $sql['update'];
    $update_type = $sql['updateType'];
    
    $sql = "update member set $update_type='$update_value' where id='$user_id'";
    mysqli_query($db_connect, $sql);
    mysqli_close($db_connect);
  }
}
?>