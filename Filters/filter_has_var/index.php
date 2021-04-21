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
     * Check if the input variable "email" is sent to the PHP page, through the "get" method
     * The filter_has_var() function checks whether a variable of a specified input type exist.
     * This function checks the content received by the PHP page. so the variable must be sent to the page via. e.g a querystring.
     * 
     *      Syntax
     * filter_has_var(type, variable)
     */
        if(!filter_has_var(INPUT_GET, "email")){
            echo "Email not found";
        }
        else {
            echo "Email found.";
        }


        /**
         *  Parameter Values :
         *  
         * INPUT_GET
         * INPUT_POST
         * INPUT_COOKIE
         * INPUT_SERVER
         * INPUT-ENV
         */
    ?>
</body>
</html>