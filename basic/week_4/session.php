<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
        session_start();
        //  $_SERVER['REQUEST_METHOD'] == 'POST' ensures that the form submission method is POST.
        //  header('Location:') means that the user will be redirected to the specified URL or page or file.
        // week_4_THU login, logout idea.
    ?>
    <form action="session.php" method="post">
        <input type="text" name="username" placeholder="Enter your username" required>
        <!-- Session hold info about one single user, and are available to all pages in one application.  -->
        <!-- session_start() must be used before using session variables. -->
    </form>
</body>
</html>