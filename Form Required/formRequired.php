<?php
    $errname = $erremail = $errwebsite = $errgender = $errcomment = "";

    $name = $email = $website = $gender = $comment = "";

                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if(empty($errname = $erremail = $errwebsite = $ergender = "")){
                            if(empty($_POST['name'])){
                                $errname = "<span style = 'color:red'>Name is required.</span>";
                            }
                            else {
                                $name = validate($_POST['name']); 
                            }
                            if(empty($_POST['email'])){
                                $erremail = "<span style = 'color:red'>E-mail is required.</span>";
                            }
                            else {
                                $email = validate($_POST['email']);
                            }
                            if(empty($_POST['website'])){
                                $errwebsite = "<span style = 'color:red'>Website is required.</span>";
                            }
                            else {
                                $website = validate($_POST['website']);
                            }
                            if(empty($_POST['gender'])){
                                $errgender = "<span style = 'color:red'>Gender is required.</span>";
                            }
                            else {
                                $gender = validate($_POST['gender']);
                            }
                        }
                        $comment = validate($_POST['comment']);

                        echo "Name : ".$name."<br>";
                        echo "E-mail : ".$email."<br>";
                        echo "Website : ".$website."<br>";
                        echo "Gender : ".$gender."<br>";
                        echo "Comment : ".$comment."<br>";
                    }

                    function validate($value){
                        $trim = trim($value);
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
    <title>Form Required </title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top : 30px;
        }
        /* .column-60 {
            border : solid purple 1px;
        } */
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                    <table>
                        <tr>
                            <td colspan = "2" align = "center">Form Required for PHP</td>
                        </tr>
                        <td><p style="color:red">* required field</p></td>
                        <tr>
                            <td>Name </td>
                            <td><input type="text" name = "name">*<?php echo $errname; ?></td>
                        </tr>
                        <tr>
                            <td>E-mail </td>
                            <td><input type="email" name="email">*<?php echo $erremail; ?></td>
                        </tr>
                        <tr>
                            <td>Website </td>
                            <td><input type="text" name="website">*<?php echo $errwebsite; ?></td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td>
                                <input type="radio" name = "gender" value ="Male"> Male
                                <input type="radio" name = "gender" value ="Female"> Female   *<?php echo $errgender; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Comment </td>
                            <td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value = "Submit">
                                <input type="reset" name="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </form>

                
            </div>
        </div>
    </div>
</body>
</html>