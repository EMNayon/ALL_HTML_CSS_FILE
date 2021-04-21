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
        /**
         * Return the filter ID of the VALIDATE_EMAIL filter
         */
        echo filter_id("validate_email")."<br>";
        echo filter_id("validate_url")."<br>";
        echo filter_id("validate_ip")."<br>";
        echo filter_id("magic_quotes")."<br>";
    ?>
</body>
</html>