<?php

class User {
    public $username;
    private $password;

   public function ShowUser(){
    echo "<br>Username: $this->username<br>";
    echo "<br>USername: $this->password<br>";
   }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function authenticate($username, $password) {
        return ($this->username === $username && $this->password === $password);
    }
}

$user = new User('myusername', 'mypassword');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->authenticate($username, $password)) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}
?>