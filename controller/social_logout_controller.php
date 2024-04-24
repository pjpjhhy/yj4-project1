<?php 

include "config/const.php";
class logout_controller {
  private $accessToken;
  public function __construct($accessToken) {
    $this->accessToken = $accessToken;
  }

  function kakao_logout() {
    $header = array("Authorization: Bearer ".$this->accessToken);
    $url = 'https://kapi.kakao.com/v1/user/logout';

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_exec($curl);
    curl_close($curl);
  }

  function naver_logout() {
    $url = "https://nid.naver.com/oauth2.0/token?grant_type=delete&client_id=".NAVER_CLIENT_ID."&client_secret=".NAVER_CLIENT_SECRET."&access_token=$this->accessToken&service_provider=NAVER";

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
  }
}