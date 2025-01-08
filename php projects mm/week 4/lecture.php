<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function isEven($number)
    {
        if($number % 2 == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    $number = 0;
    $result = null;
    if(isset($_POST['number']))
    {
        $number = $_POST['number'];
    }
    if(isset(isEven($number)))
    {
        $result = "Even";
    }
    else
    {
        $result = "Odd";
    }
    ?>

    <form method="post"></form>
        <input type="text" name="number" value="<?= $number; ?>">
        <button type="submit">Submit</button>
    </form>
    <hr/>
    <?= $result ?> 
</body>
</html>