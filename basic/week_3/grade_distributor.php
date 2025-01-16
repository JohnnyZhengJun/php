<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Distributor</title>
</head>
<body>
    <form action="switch.php" method="post">
        <input type="text" name="grade" placeholder="Enter your grade here">
        <button type="submit">Submit</button>
        <?php
            $grade = null;
            if(isset($_POST['grade']))
            {
                $grade = $_POST['grade'];
            }
            //Same as C++
            switch ($grade) 
            {
                case 'A':
                    print("What an excellent score!");
                    break;
                case 'B':
                    print("Good job!");
                    break;
                case 'C':
                    print("You passed!");
                    break;
                case 'D':
                    print("You barely passed!");
                    break;
                case 'F':
                    print("You failed!");
                    break;
                default: 
                    print("Invalid grade!");
                    break;
            }
        ?>
    </form>
</body>
</html>