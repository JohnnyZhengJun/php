<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List of What Customer Bought</title>
</head>
<body>
    <?php
    // Initialize variables
    $name = '';
    $items_customer_bought = '';
    $price = 0;
    $quantity = 0;
    $total_price = 0;
    $types_of_items = 0;
    // Check if the form has been submitted
    if (isset($_POST['submit'])) 
    {
        // Get the values from the form
        if (isset($_POST['name'])) 
        {
            $name = $_POST['name'];
        }
        if (isset($_POST['items_customer_bought'])) 
        {
            $items_customer_bought = $_POST['items_customer_bought'];
            $types_of_items += 1;
        }
        if (isset($_POST['price'])) {
            $price = $_POST['price'];
        }
        if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
        }

        // Calculate total price if inputs are valid
        if (isset($_POST['price']) && isset($_POST['quantity']))
        {
            $total_price = $price * $quantity;
        }
    }
    ?>

    <h1>Item List and Item Count</h1>
    <form method="post">
        <label>Name:</label>
        <br>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <br>
        <label>Things Customer Bought:</label>
        <br>
        <input type="text" name="items_customer_bought" value="<?php echo $items_customer_bought; ?>">
        <br>
        <label>Price:</label>
        <br>
        <input type="number" name="price" value="<?php echo $price; ?>">
        <br>
        <label>Quantity:</label>
        <br>
        <input type="number" name="quantity" value="<?php echo $quantity; ?>">
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>
    <label>Name: <?php echo $name; ?> </label>
    <br>
    <label>Things Customer Bought: <?php echo $items_customer_bought; ?> </label>
    <br>
    <label>Total Price: <?php echo $total_price; ?> </label>
    <br>
    <label>Types of items: <?= $types_of_items; ?></label>
    <br>
</body>
</html>