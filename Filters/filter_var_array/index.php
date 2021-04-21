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
     * The filter_var_array() function gets multiple variables and optionally filters them
     * this funciton is useful for filtering many values without calling filter_var() many times.
     * 
     * Syntax : filter_var_array(data_array, args,add_empty)
     */
        $data = array(
            'fullname' => 'EM Nayon',
            'age' => '41',
            'email' => 'emnayon@gmail.com'
        );
        $mydata = filter_var_array($data,FILTER_VALIDATE_EMAIL);
        var_dump($mydata);
    ?>
</body>
</html>