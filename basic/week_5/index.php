<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    <form method="post">
        <input type="file" name="image" id="file" enctype="multipart/form-data">
        <!-- enctype="multipart/form-data" means the form will be sent as a multipart/form-data request -->
         <!-- enctype specifies how the form-data should be encoded when submitting it to the server and can be used only if method="post" -->
    </form>
    <?php
    // create a folder with a name of fol_name if it doesn't exist
    /** https://www.phptutorial.net/php-tutorial/php-file-upload/ 
     * application/pdf for pdf fil
     * move_uploaded_file{
     * $file['tmp_name'], .'/fol_name/'. $file['name'] 
    * }; 
    *
    * in_array() function checks if a value exists in an array
    * convertPng2Jpg(), convertDoc2Pdf()
    */
    ?>
</body>
</html>