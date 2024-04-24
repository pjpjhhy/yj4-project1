<?php 

$google_id = getenv('GOOGLE_ID');
$google_pw = getenv('GOOGLE_PW');
$kakao_id = getenv('KAKAO_ID');
$naver_id = getenv('NAVER_ID');
$naver_pw = getenv('NAVER_PW');

define("GOOGLE_CLIENT_ID", $google_id);
define("GOOGLE_CLIENT_SECRET", $google_pw);
define("KAKAO_CLIENT_ID", $kakao_id);
define("NAVER_CLIENT_ID", $naver_id);
define("NAVER_CLIENT_SECRET", $naver_pw);

class db_info {
  const HOST = "localhost";
  const USER = "user1";
  const PASSWORD = "12345";
  const DB = "nara";
}

class social_login {
  public const REDIRECT_URL = "http://localhost/social_login.php";

  static public function social_login_url($loginState) {
    switch($loginState){
      case "google":
          return 'https://accounts.google.com/o/oauth2/v2/auth?client_id='.GOOGLE_CLIENT_ID.'&redirect_uri='.self::REDIRECT_URL.'&response_type=code&state=google&scope=https://www.googleapis.com/auth/userinfo.email+https://www.googleapis.com/auth/userinfo.profile&access_type=offline&prompt=consent';
      case "kakao":
          return 'https://kauth.kakao.com/oauth/authorize?client_id='.KAKAO_CLIENT_ID.'&redirect_uri='.self::REDIRECT_URL.'&response_type=code&state=kakao&prompt=login';
      case "naver":
          return 'https://nid.naver.com/oauth2.0/authorize?client_id='.NAVER_CLIENT_ID.'&redirect_uri='.self::REDIRECT_URL.'&response_type=code&state=naver';
      default:
          return "";
  }
  }
}

$db_connect = mysqli_connect(db_info::HOST, db_info::USER, db_info::PASSWORD, db_info::DB);

?>