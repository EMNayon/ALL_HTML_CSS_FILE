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
        Username: <input type="text" name = "username">
        <input type="submit" value = "Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // same work post method
            $name = $_REQUEST['username'];
            if(empty($name)){
                echo "<span style='color:red'> Username field must not be empty!!</span>";
            }
            else {
                echo "<span style='color:green'> You have submitted ".$name."</span>";
            }
        }
    ?>
</body>
</html>