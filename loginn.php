<?php

class User {
  private $username;
  private $password;
  
  public function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
  }
  
  public function authenticate() {
    // Add your authentication logic here
    if ($this->username === 'username' && $this->password === 'password') {
      return true;
    } else {
      return false;
    }
  }
}
?>