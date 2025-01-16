<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Game</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="factorial" placeholder="Enter your factorial number here">
        <button type="submit">Submit</button>
    </form>
    
        <?php
        // print_r(): prints datatype of array
            $factorial = null;
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                if(isset($_POST['factorial']))
                {
                    $factorial = $_POST['factorial'];
                }
            }
            print("The factorial of $factorial is : ". factorial($factorial));
            function factorial($factorial)
            {
                if ($factorial <= 1) 
                {
                    return 1;
                } 
                else {
                    return $factorial * factorial($factorial - 1);
                }
            }
        ?>
    
</body>
</html>