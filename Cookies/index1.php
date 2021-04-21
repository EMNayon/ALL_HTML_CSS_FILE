<?php
    /**
     * What is a cookie?
     * 
     * A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser. it will send the cookie too. With PHP, you can both create and retrieve cookie values
     * 
     * A cookie is created with the setcookie() function.
     * Syntax : setcookie(name, value, expire, path, domain, secure, httponly);
     * Here Only the name parameter is required. All other paramets are optional.
     */


    $cookie_name = "user";
    $cookie_value = "Emran Masud";
    // "/" => means that the cookie is avaiable in entire website 
    // The setcookie() function must appear before the <html> tag.
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP create/ retrieve a Cookie</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie named ".$cookie_name." is not set!";
        }
        else {
            echo "Cookie ". $cookie_name." is  set!<br>";
            echo "Value is ".$_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>