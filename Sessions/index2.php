<?php
    //All session variable values are stored in the global $_SESSION variable.
    
    //Get PHP session variable values

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get PHP session Variable values</title>
</head>
<body>
    <?php

    //Echo session variables that were set on previous page.
    echo "Favorite color is ".$_SESSION["favColor"]."<br>";
    echo "Favorite color is ".$_SESSION["favAnimal"]."<br>";

    /**
     *  How does it word? How does it know it's me?
     * 
     * Most sessions set a user-key on the user's computer that looks something like this: 4584858fjjdrt4343urudsf. Then, when a session is opened on another page. it scans the computer for a user-key. if there is a match, it acesses that session, if not, it starts a new session.
     */

    //show all the session variable values for a user session is to run
    print_r($_SESSION);

    ?>
</body>
</html>