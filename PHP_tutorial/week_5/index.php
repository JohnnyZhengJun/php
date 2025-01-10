<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $formats = ['image/jpeg', 'image/png', 'image/gif', 'image/png'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_FILES['img'])) // checking whether file is submitted
        {
            $file = $_FILES['img']; 

            if(in_array($file['type'], $formats)) //checking whether file is of the correct type
            {
                move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);
            //move the file to the uploads folder, tmp_name => temp file   
                print("File upload successful.");
            }
            else{
                echo "Invalid file type";
            }

        }

        


    }
    ?>
    <form method="post">
        <input type="file" name="img" enctype="multipart/form-data"/>
<!-- enctype=multipart/form-data-->
        <button type ="submit">Upload</button>
    </form>
</body>
</html>