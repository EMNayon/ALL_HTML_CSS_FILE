<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploading</title>
</head>
<body>

    <?php 
        if(isset($_FILES['image'])){
            $filename = $_FILES['image']['name'];
            $filetmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($filetmp,"Picture/".$filename);
            echo "Image uploaded Successfully!";
        }
    ?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST" enctype = "multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Submit">
    </form>
</body>
</html>