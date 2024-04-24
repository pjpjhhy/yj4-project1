<?php

class social_login_repository {
  protected $db_connect;

  public function __construct($db_connect) {
    $this->db_connect = $db_connect;
  }

  public function find_user_by_email($email) {
    try {
      $sql = "select * from member where email='$email'";

      $result = mysqli_query($this->db_connect, $sql);

      if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        return $row;
      } else {
        return null;
      }
    } catch(Exception $e) {
      print($e->getMessage());
    }
  }

  public function signup($profile_model, $state) {
    try {
      $created_at = date("Y-m-d H:i:s"); 

      $sql = "insert into member(id, email, password, name, profile_url, social_type, member_role, created_at)";
      $sql .= "values('$profile_model->email', '$profile_model->email', '$profile_model->uid', '$profile_model->name', '$profile_model->profile_picture', '$state', '$profile_model->member_role', '$created_at')";

      mysqli_query($this->db_connect, $sql);
      mysqli_close($this->db_connect);
    } catch(Exception $e) {
      print($e->getMessage());
    }
  }
}