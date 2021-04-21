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
        $url  = "https://www.w3schools.com";
        //Remove all illegal characters from a url
        $newurl = filter_var($url, FILTER_SANITIZE_URL);
        //validate url
        if(!filter_var($newurl, FILTER_VALIDATE_URL) === false){
            echo "$newurl is a valid URL.";
        }
        else {
            echo "$newurl is not a valid URL.";
        }
    ?>
</body>
</html>