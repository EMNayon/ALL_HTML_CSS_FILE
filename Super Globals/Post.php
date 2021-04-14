<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals Part</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post">
        Username : <input type="text" name="username" id="">
        <input type="submit" value = "Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['username'];
            if(empty($name)){
                echo "Required the username!!";
            }
            else{
                echo "You have submitted : ".$name;
            }
        }
    ?>
</body>
</html>