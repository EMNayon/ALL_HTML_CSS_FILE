<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals Part</title>
</head>
<body>
    <!--find the location or url location or full path.-->
    <?php
        /* find the  current path */
        echo "The Current path is  ".$_SERVER['PHP_SELF'];
        echo "<br>";
        echo "The Current path is  ".$_SERVER['SCRIPT_NAME'];
        echo "<br>";
        /* find the server current name */
        echo "The server current name is ".$_SERVER['SERVER_NAME'];
        echo "<br>";
        /* find the browser name */
        echo "The browser name is/are  ".$_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        /*find the server ip address */
        echo "The server ip address is ".$_SERVER['SERVER_ADDR'];
    ?>
</body>
</html>