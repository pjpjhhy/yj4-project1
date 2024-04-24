<?php 

class profile_model {
  public $uid;
  public $email;
  public $name;
  public $profile_picture;
  public $social_type;
  public $member_role;

  public function __construct($uid, $email, $name, $profile_picture, $social_type, $member_role) {
    $this->uid = $uid;
    $this->email = $email;
    $this->name = $name;
    $this->profile_picture = $profile_picture;
    $this->social_type = $social_type;
    $this->member_role = $member_role;
  }
}