<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fac_num = 0;
        function factorial($fac_num)
        {
            if ($fac_num == 0)
            {
                return 1;
            }
            else
            {
                return $fac_num * factorial($fac_num - 1);
            }
        }
        if(isset($_POST['number']))
        {
            $fac_num = $_POST['number'];
            echo "The factorial of $fac_num is " . factorial($fac_num);
        }
    ?>
    <form action="function.php" method="post">
        <input type="number" name="factorial" value=<?= $fac_num ?>>
        <button type="submit">Submit</button>
</body>
</html>
