<?php
include 'config/const.php';


$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select * from member where id='$id'";
$result = mysqli_query($db_connect, $sql);

$num_match = mysqli_num_rows($result);


if(!$num_match) {
  echo "
    <script>
      window.alert('등록되지 않은 아이디입니다!');
      history.go(-1);
    </script>    
    ";
} else {
  $row = mysqli_fetch_array($result);
  $db_pw = $row["password"];

  mysqli_close($db_connect);

  if($pw != $db_pw) {
    echo "
      <script>
        window.alert('비밀번호가 틀립니다!');
        history.go(-1);
      </script>    
      ";
    exit;
  } else {

    session_start();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_profile'] = $row['profile_url'];
    $_SESSION['user_social_type'] = $row['social_type'];
    $_SESSION['user_role'] = $row['member_role'];

    header("Location: index.php");
  }
}

?>
