<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['Username'] = ['admin_user'];
        $_SESSION['Password'] = ['admin_pass'];
        if($_SESSION["isLoggedIn"])
        {
            print("You are logged in.");
        }
        else{
            print("You are not logged in.");
        }

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        /*
         * take the input and check whether logout is pressed or not, if yes, 
         * logout then output You aren't logged in. 
        */
            if(isset($_POST['logout']))
            {
                session_destroy();
                header("Location: index.php");
            }
        }
    ?>
    <h1>Home</h1>
    <form method="post">
        <input type="submit" name="logout" value="Logout"/>
    </form>
    <!--Password hashing: https://www.php.net/manual/en/function.password-hash.php-->
    <!--PASSWORD_BCRYPT-->
</body>
</html>