<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_FILES['image'])) {
               $file = $_FILES['image'];
            }
        }
    ?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <button type="submit">Upload</button> 
    </form>
</body>
</html>