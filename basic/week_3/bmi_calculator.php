<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator and Distribution</title>
</head>
<body>
    <form method="post">
        <input type="float" name="height" placeholder="Enter your height here">
        <br>
        <input type="float" name="weight" placeholder="Enter your weight here">
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
        //Using operator && 
        $height = null;
        $weight = null;
        if(isset($_POST['height']) && isset($_POST['weight']))
        {
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            if($height < 0.9 || $height > 2.5)
            {
                print("#Invalid height (height >= 0.9 and height <= 2.5).");
            }
            if($weight < 20 || $weight > 200)
            {
                print("#Invalid weight (weight >= 20 and weight <= 200).");
            }
            if($height >= 0.9 && $height <= 2.5 && $weight >= 20 && $weight <= 200)
            {
                $myBMI= round ($weight/($height*$height) *10)/10.0; 
                if($myBMI < 10)
                {
                    
                    print("#Either weight or height might be wrongly given.");
                }
                else
                {
                    if($myBMI >= 18.5 && $myBMI <= 25)
                    {
                        print("#Your BMI is normal.");
                    }
                }
            }
        }
    ?>
</body>
</html>