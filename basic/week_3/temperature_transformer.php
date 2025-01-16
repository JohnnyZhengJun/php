<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformer</title>
</head>
<body>
<form action="temperature_transformer.php" method="post">
    <label for="temperature">Enter the temperature value:</label>
    <input type="number" name="temperature" id="temperature" required>
    <br/>
    <p>To what kind of unit do you want to change, Kelvin (K) or Celsius (C)?</p>
    <input type="radio" name="unit" id="K" value="K">
    <label for="K">K</label>
    <!-- for attribute of label must be equal to the id attribute of the related element to bind them together. -->
    <!-- form attribute of label specifies the form the label belongs to. -->
    <br/>
    <input type="radio" name="unit" id="C" value="C">
    <label for="C">C</label>
    <br/><br/>
    
    <button type="submit" color="gray">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $unit = $_POST['unit'];
    $temperature = $_POST['temperature'];

    if ($unit == "K") 
    {
        $converted = $temperature + 273.15;
        print("$temperature (°C) is equal to $converted (K)");
    } 
    else if ($unit == "C") 
    {
        $converted = $temperature - 273.15;
        echo "<p>$temperature K is equal to $converted (°C).</p>";
    } else {
        echo "<p>Please select a unit to convert to.</p>";
    }
}
?>
</body>
</html>