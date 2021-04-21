<!--
    Here filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $email = "emnayon@gmail.com";
        //Remove all illegal characters from email.
        $newemail = filter_var($email, FILTER_SANITIZE_EMAIL);
        // Validate e-mail
        if(!filter_var($newemail, FILTER_VALIDATE_EMAIL)=== false){
            echo "$newemail is a valid email address.";
        }
        else {
            echo "$newemail is not a valid email address.";
        }
    ?>
</body>
</html>