<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number" placeholder="Enter a number">
        <button type="submit">Submit</button>
    </form>
    <?php
        $number = null;
        if (isset($_POST['number']))
        {
            $number = $_POST['number'];
        }
        function is_prime($number)
        {
            if ($number <= 1)
            {
                print("$number is not prime.<br>");  
            }
            else
            {
                $count = 0;
                for($i = 1; $i <= $number; $i++)
                {
                    if($number % $i == 0)
                    {
                        $count++;
                    }
                }
                if ($count == 2) 
                {
                    print("$number is prime.<br>");
                } 
                else 
                {
                    print("$number is not prime.<br>");
                }
            }
        }
        $result = is_prime($number);
    ?>
</body>
</html>