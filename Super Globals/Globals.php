<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals Part</title>
</head>
<body>
    <!--
    There are many types of Super Globals variables:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
    -->
    <!-- <?php
        $x = 10;
        $y = 20;
        function sum(){
            global $x, $y;
            echo $z = $x + $y;
        }
        sum();
    ?> -->


    <!--We can use Superglobals variables for same works -->
    <?php
        $x = 10;
        $y = 20;
        function sumXY(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        sumXY();
        // We can access outside of a function
        echo $z;
    ?>
</body>
</html>