<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method = "post">
                    <table>
                        <tr>
                            <td colspan = "2" align = "center">Form Validation for PHP</td>
                        </tr>
                        <tr>
                            <td>Name </td>
                            <td><input type="text" name="name" id=""></td>
                        </tr>
                        <tr>
                            <td>E-mail </td>
                            <td><input type="text" name="email" id=""></td>
                        </tr>
                        <tr>
                            <td>Website </td>
                            <td><input type="text" name="website" id=""></td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td>
                            <input type="radio" name="gender" value = "Male" id=""> Male
                            <input type="radio" name="gender" value = "Female" id=""> Female
                            </td>
                        </tr>
                        <tr>
                            <td>Comment </td>
                            <td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td>
                            <input type="submit" name="submit" value = "Submit" id="">
                            <input type="reset" name = "reset" value = "Reset">
                            </td>
                        </tr>
                    </table>
                </form>

                <?PHP
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $name = validate($_POST['name']);
                        $email = validate($_POST['email']);
                        $website = validate($_POST['website']);
                        $gender = validate($_POST['gender']);
                        $comment = validate($_POST['comment']);

                        echo "Name : ".$name."<br>";
                        echo "E-mail : ".$email."<br>";
                        echo "Website : ".$website."<br>";
                        echo "Gender : ".$gender."<br>";
                        echo "Comment : ".$comment."<br>";

                    }
                    function validate($value){
                        //Strip whitespace (or other characters) from the beginning and end of a string
                        $trim = trim($value);
                        //Returns a string with backslashes stripped off
                        $stripcslashes = stripcslashes($trim);
                        // Convert special characters to HTML entities
                        return $htmlspecialchars = htmlspecialchars($stripcslashes);
                    }
                ?>

            </div>
        </div>
    </div>

</body>
</html>