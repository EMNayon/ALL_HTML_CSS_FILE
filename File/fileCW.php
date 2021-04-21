<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Create & Write</title>
</head>
<body>
    <?php
        //'w' => Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length.
        $creatingFile = fopen("one.txt", "w");
        // $writing1 = "Md Emran Masud Nayon.\n";
        // fwrite($creatingFile, $writing1);

        //overwrite in this mode 'w'. 
        $writing2 = "Mamun Mia.";
        fwrite($creatingFile, $writing2);

        fclose($creatingFile);

    ?>
</body>
</html>