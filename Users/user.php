<?php
class User {
  // Properties
  private $username;
  private $password;
  private $email;

  // Methods
  function __construct($name, $password, $email) {
    $this->name = $name;
    $this->password = $password;
    $this->email = $email;
  }
  function get_name() {
    return $this->name;
  }
  function get_password(){
      return $this->password;
  }
  function get_email(){
      return $this->email;
  }
}
?>