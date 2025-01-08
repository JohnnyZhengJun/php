<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = null;
        $result = null;
        if(isset($_POST['x']))
        {
            $x = $_POST['x'];
            $result = abs($x);
        }
    ?>
    <h1> Math Function </h1>
    <form method ="post">
        <label>x:</label>
        <input type="text" name="x" value=""/>
        <button type="submit">Submit</button>
    </form>
    <hr/>
    <label>Result: <?= $result ?></label>
</body>
</html>

