<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" multiple>
        <!-- add multiple attribute to the input element to upload multiple files.  -->
        <!-- use accept attribute to allow certain file types to be uploaded -->
        <button type="submit">Upload</button>
        <!-- After this connect it with the database. -->
    </form>
    <?php
        session_start();
        const Allowed_files = 
        ['image/png' => 'png', 'image/jpeg' => 'jpg', 
        'image/jpg' => 'jpg', 'image/gif' => 'gif', 
        'application/pdf'=> 'pdf', 'application/zip' => 'zip',
        'text/html' => 'html', 'text/css' => 'css', 'text/javascript' => 'js', 
        'text/plain' => 'txt'
        ];

        const MAX_SIZE = 21 * 1024 * 1024; // 21MB
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(isset($_FILES['file']))
            {
                $file = $_FILES['file']['name']; // retrieves the original name of the uploaded file. 
                $tmp = $_FILES['file']['tmp_name']; // retrieves the temporary name of the uploaded file.
                $filesize = filesize($tmp);
                // can't use filesize($file) because $file only contains the original name of the uploaded file, not the real location on the server. 
                
                if($filesize > MAX_SIZE)
                {
                    echo "File size is too large. Max file size is 21MB.";
                }
                else
                {
                    print("Files uploaded successfully.");
                }
            }
            else
            {
                echo "No file selected";
            }
        }

    ?>
</body>
</html>