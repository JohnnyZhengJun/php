<?php
// $_POST to collect the val of the input field. 
    $input;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['input']))
        {
            $input = $_POST['input'];
        }
        print("The input is $input.<br>");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <form action="review.php" method = "post">
<!--without action, it will redirect to original page. -->
        <input type="text" name="input" placeholder="Enter your text here"/>
        <br/>
        <br/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>