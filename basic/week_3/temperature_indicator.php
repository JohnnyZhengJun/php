<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
</head>
<body>
    <form action="temperature_indicator.php" method="post">
        <input type="float" name="temp" placeholder="Enter your local temperature here">
        <button type="submit">Submit</button>
    </form>

    <br>
    <?php
        $temperature = null;
        if (isset($_POST['temp']))
        {
            $temperature = $_POST['temp'];
            if($temperature < 16)
            {
                print("Temperature is too low and too cold. Keep warm!");
            }
            else if($temperature > 40)
            {
                print("Temperature is too high and too hot. Stay hydrated!");
            }
            else
            {
                print("Temperature is neither too cold nor too hot. And it's just right!");
            }
        }
        else
        {
            print("You haven't submitted or inputted your local temperature. Try again!");
        }
    ?>
</body>
</html>