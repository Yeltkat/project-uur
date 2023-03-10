<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
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