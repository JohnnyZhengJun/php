<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php login form</title>
</head>
<body>
     <?php
     /* A session is a way to store info to be used across multiple pages.  */
    session_start();
    $usernameErr = $passwordErr = "";
    $username = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["username"]))
        {
            $usernameErr = "Username is required";
        }
        else{
            $username = $_POST['username'];
        }

        if(empty($_POST["password"]))
        {
            $usernameErr = "Password is required";
        }
        else{
            $username = $_POST['password'];
        }

        if($username === 'admin' && $password === '123')
        {
            $_SESSION["isLoggedIn"] = true;
            //die('successfully login');
            header('Location: home.php');
        }
        else{
            $message = "Invalid credential";
        }
    }
     ?>
    <h1>Login Page</h1>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username"/>
        <span>(*<?= $usernameErr ?>)</span>
        <br/><br/> 
        
        <label>Password</label>
        <input type="password" name="password"/>
        <span>(*<?= $passwordErr ?>)</span>
        <!-- input type="password" name="password" -> inputting the type of password -->
        <br/><br/>
         
        <button type="submit">Login</button>
</body>
</html>