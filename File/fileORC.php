<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Open/Read/Close</title>
</head>
<body>

    <?php
    /**
     * 'r' => Open for reading only. Place the file poiner at the beginnig of the file.
     *  'r+' => Open for reading and writing; place the file pointer at the beginning of the file.
     *  'w' => Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length.
     *  'w+' => Open for reading and writing; place the file pointer at the beginnig of the file and truncate the file to zero length. If the file does not exist , attempt to create it.
     * 'a' => Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. 
     * 'a+' => Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it.
     * 'x' => Create and open for writing only; place the file pointer at the beginning of the file.
     * 'x+' => Create and open for reading and writing; otherwise it has the same behavior as 'x'. 
     * 'c' => Open the file for writing only. If the file does not exist, it is created.
     * 'c+' => Open the file for reading and writing; otherwise it has the same behavior as 'c'
     * 'e' => Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems. 
     */
        //fread function read the all string
        // $myfile = fopen("./Text/text.txt", "r") or die("File not found!!");
        // echo fread($myfile, filesize("./Text/text.txt"));
        // fclose($myfile);

        //fgets function read the first line
        // $myfile = fopen("./Text/text.txt", "r") or die("File not found!!");
        // echo fgets($myfile, filesize("./Text/text.txt"));
        // fclose($myfile);

        //fgetc function read the first character
        // $myfile = fopen("./Text/text.txt", "r") or die("File not found!!");
        // echo fgetc($myfile);
        // fclose($myfile);

        //fgets/feof function read the line by line
        // $myfile = fopen("./Text/text.txt", "r") or die("File not found!!");
        // while(!feof($myfile)){
        //     echo fgets($myfile)."<br>";
        // }
        // fclose($myfile);

        //fgetc/feof function read the character by chareacter
        $myfile = fopen("./Text/text.txt", "r") or die("File not found!!");
        while(!feof($myfile)){
            echo fgetc($myfile)."<br>";
        }
        fclose($myfile);

    ?>
</body>
</html>