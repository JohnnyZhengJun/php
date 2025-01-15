<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Project of Buying Item List</title>
</head>
<body>
    <form method="post">
        <input type="text" name="list">
        <button type="submit">Add to list</button>
    </form>
    <?php
        session_start();
        if (!isset($_SESSION['list'])) 
        {
            $_SESSION['list'] = array();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['list'])) 
        {
            $_SESSION['list'][] = $_POST['list'];
        }
        $total = count($_SESSION['list']); // If there's an item in the list, $total++;
        
        echo "Items:<br>";
        
        foreach ($_SESSION['list'] as $item)
        {
            echo $item . "<br>";
        }
        echo "Total number of items: $total<br>";
    ?>
</body>
</html>
