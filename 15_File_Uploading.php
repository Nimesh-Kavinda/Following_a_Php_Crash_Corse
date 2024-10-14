<?php

if(isset($_POST['submit'])) {

    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif', 'webp');

    if(!empty($_FILES['upload']['name'])){
        
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";


        // get file extention
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate file ext ention

        if(in_array($file_ext , $allowed_ext)){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);


        $message = '<p style = "color:green;">File Uploaded</p>';

            }else{
        $message = '<p style = "color:red;"> The File is too Large</p>';

            }
        }else{
        $message = '<p style = "color:red;"> Invalid File Type</p>';

        }

    } else{
        $message = '<p style = "color:red;"> Please Choose a File</p>';
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploding</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
         Select Image to Upload:   <br>
        <input type="file" name="upload">  <br>
        <input type="submit" value="Submit" name="submit"> <br>
    </form>
</body>
</html>

