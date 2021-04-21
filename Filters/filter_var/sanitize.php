<!--
    The filter_var() function both validate and sanitize data.
    The filter_var() function filter a single variable with a specified filter.
    It takes two pieces of data .
            * The variable you want to check
            * The type of check to use
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
        $str = "<h1> Hello World!</h1>";
        /**
         * Sanitize a string
         * the Filter_var() function remove all HTML tags from a string
         */
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
    ?>
</body>
</html>