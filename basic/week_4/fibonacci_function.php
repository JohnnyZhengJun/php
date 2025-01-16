<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci number Function</title>
</head>
<body>
    <form method="post">
        <input type="number" name="number" placeholder="Enter a number">
        <input type="submit">
    </form>
    <?php
        if(isset($_POST['number']))
        {
            $number = $_POST['number'];

            function Fibonacci($number)
            {
                if ($number <= 0) 
                {
                    return ["Invalid input. Please enter a positive integer."];
                }
                elseif ($number == 1)
                {
                    return [0];
                }
                else
                {
                    $fib = array(0, 1);
                    for ($i = 2; $i < $number; $i++)
                    {
                        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                    }
                    return $fib;
                }
            }
            $result = Fibonacci($number);
            echo "<p>The Fibonacci sequence is: </p>";
            foreach($result as $value) 
            {
                echo "$value, ";
            }
        }
        else{
            print("No data inputted");
        }
    ?>
</body>
</html>
