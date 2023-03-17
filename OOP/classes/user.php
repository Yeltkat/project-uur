<?php
    // Functie: classdefinitie User 

    class User{

        // Eigenschappen 
        public $username;
        public $email;
        private $password;
        
        public function ShowUser() {
            echo "<br>Username: $this->username<br>";
            echo "<br>Password: $this->password<br>";
            echo "<br>Email: $this->email<br>";
        }

        public function RegisterUser(){
            
        }

        function SetPassword($password){
            $this->password = $password;
        }
        
        function GetPassword(){
            return $this->password;
        }

        function ValidateUser(){
            $errors=[];

            if (empty($this->username)){
                array_push($errors, "Invalid username");
            } else if (empty($this->password)){
                array_push($errors, "Invalid password");
            }
            
            return $errors;
        }

        public function LoginUser(){
            // Connect database
            $serverName = "localhost";
            $dBUsername = "root";
            $dBPassword = "";
            $dBName = "project-uur";

            $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            
            // zoek user in de table user
            
            // indeien gevonden dan sessie vullem

            return false;
        }
    }
?>