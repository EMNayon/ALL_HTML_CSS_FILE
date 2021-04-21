<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOdify a PHP Session Variable</title>
</head>
<body>
    <?php
        //to change a session variable, just overwrite it

        $_SESSION["favColor"] = "yellow";
        print_r($_SESSION);
        
    ?>
</body>
</html>