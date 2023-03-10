<?php
if(isset($_POST['login']) && $_POST['login'] == "login"){

   // var_dump($_POST); 

require_once('classes/user.php');
$user = new User();

$user->username = $_POST['username'];
$user->SetPassword($_POST['password']);

$user->ShowUser();

// Validate gegevens
//$errors = $user->ValidateUser();

//var_dump($errors);

}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Login Screen</title>
</head>
<body>
    
    <form action="" method="POST">
        <h4>login here</h4>

        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login" value="login"><br>

        <br><a href="register_form.php">registration</a>
    </form>
</body>
</html>