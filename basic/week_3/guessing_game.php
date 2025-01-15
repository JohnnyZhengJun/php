<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing random number game</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="guess" placeholder="Guess a number">
        <button type="submit">Submit</button>
        <?php
            $number = rand(1,10);
            $tries = 3;
            if(isset($_POST['guess']))
            {
                $guess = $_POST['guess'];
                if($guess == $number)
                {
                    print("You guessed it!");
                }
                else{
                    print("Try again");
                    $tries--;
                }
            }

        ?>
    </form>
</body>
</html>