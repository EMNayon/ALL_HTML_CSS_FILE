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
        $int = 100;
        //if $int was set to 0, the function above will return "integer is not valid"
        //to solve tthis proble => problemwith0.php
        if(!filter_var($int,FILTER_VALIDATE_INT) === false){
            echo "Integer is valid.";
        }
        else {
            echo "Integer is not valid.";
        }
    ?>
</body>
</html>