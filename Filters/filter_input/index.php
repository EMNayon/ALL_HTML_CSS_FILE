<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        E-mail: <input type="text" name="email" id="">
                <input type="submit" name = "submit" value="Submit">
    </form>

    <?php
        if(isset($_POST["email"])){
            // * Syntax : filter_input(type, variable, filter, options)
            if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) === false){
                echo "Email is valid.";
            }
            else {
                echo "Email is not valid.";
            }
        }
    ?>

</body>
</html>