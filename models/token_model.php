<?php 

class token_model {
  private $access_token;
  private $refresh_token;

  public function __construct($data) {
    $this->access_token = $data['access_token'];
    $this->refresh_token = $data['refresh_token'];
  }

  public function get_access_token() {
    return $this->access_token;
  }

  public function get_refresh_token() {
    return $this->refresh_token;
  }
}