
<?php
    $errusername = $erremail = $errweb = $errgender = "";
    $username = $email = $web = $gender = $comment = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erremail = "<span style ='color:red'>Invalid E-mail format.</span>";
        }
        else {
            $email = validate($_POST['email']);
        }
        if(!filter_var($_POST['web'], FILTER_VALIDATE_URL)){
            $errweb = "<span style ='color:red'>Invalid website format.</span>";
        }
        else {
            $web = validate($_POST['web']);
        }
                 
        $username = validate($_POST['username']);
        $gender = validate($_POST['gender']);
        $comment = validate($_POST['comment']);
                 
        echo "Username : ".$username."<br>";
        echo "E-mail : ".$email."<br>";
        echo "Website : ".$web."<br>";
        echo "Gender : ".$gender."<br>";
        echo "Comment : ".$comment."<br>";
    }
    function validate($data){
        $trim = trim($data);
        $stripcslashes = stripcslashes($trim);
        return $htmlspecialchars = htmlspecialchars($stripcslashes);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL/E-mail Validation</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top : 30px;
        }
        .column-60 {
            border : solid purple 1px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method= "post" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <table>
                    <tr>
                        <td colspan="2" align= "center">URL / E-mail validation for PHP</td>
                    </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name= "username" placeholder = "Enter your username"><?php echo $errusername; ?></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="email" name="email" placeholder = "emnayon@gmail.com"><?php echo $erremail; ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><input type="text" name="web" placeholder = "http://www.emnayon.com"><?php echo $errweb; ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                            <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name=gender" value="Female"> Female <?php echo $errgender; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Comment</td>
                            <td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value = "submit">
                                <input type="reset" name="reset" value = "reset">
                            </td>
                        </tr>
                    </table>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>