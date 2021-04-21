<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy a PHP Session</title>
</head>
<body>
    <?php
        print_r($_SESSION);
        //remove all session variables
        session_unset();
        //print_r($_SESSION);
        
        //destory the session
        session_destroy();
        print_r($_SESSION);
    ?>
</body>
</html>