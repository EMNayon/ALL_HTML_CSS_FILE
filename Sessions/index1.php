<?php
/**
 * A session is a way to store information to be used across multiple pages.
 * Unlike a cookie, the information is not stored on the users computer.
 * Session variables hold information about one single user, and are abailable to all pages in one application
 * 
 * If you need a permanent storage , you may want to store the data in a database.
 

 * A session is started with the session_start() function
 * The session_start() function must be the very first thing in your document
 */
    //Start the session
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$_SESSION}</title>
</head>
<body>
    <?php
        //set session variables
        //Session variables are set with the PHP global variable: $_SESSION.

        $_SESSION["favColor"] = "green";
        $_SESSION["favAnimal"] = "cat";
        echo "Session variables are set.";

    ?>
</body>
</html>