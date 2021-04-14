<?php
//Get data from a data table in PHP.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

    <style>
        body{
            margin-top : 30px;
        }
        
        .tbltwo {
            border : solid purple 1px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method = "post" name = "myform" id="myform">
                    <table class = "tbltwo">
                        <tr>
                            <td>Name </td>
                            <td> <input type="text" name = "name" required = "1"> </td>
                        </tr>
                        <tr>
                            <td>Gender </td>
                            <td> 
                                <input type="radio" name = "gender" value = "male"> Male
                                <input type="radio" name = "gender" value = "female"> Female
                            </td>
                        </tr>
                        <tr>
                            <td>Department </td>
                            <td>
                                <input type="checkbox" name="department" value = "CSE" id=""> CSE
                                <input type="checkbox" name="department" value = "EEE" id=""> EEE
                                <input type="checkbox" name="department" value = "ICT" id=""> ICT
                                <input type="checkbox" name="department" value = "BBA" id=""> BBA
                                <input type="checkbox" name="department" value = "PHY" id=""> PHYSICS
                            </td>
                        </tr>
                        <tr>
                            <td>Coder </td>
                            <td>
                                <select name="coder" id="">
                                    <option>Select One</option>
                                    <option value="JAVA">Java</option>
                                    <option value="Python">Python</option>
                                    <option value="C">C</option>
                                    <option value="PHP">PHP</option>
                                    <option value="JS">JavaScript</option>
                                    <option value="PYTHON">Python</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>University </td>
                            <td>
                                <select name="versity" id="">
                                    <option>Select One</option>
                                    <option value="PU">Prime University</option>
                                    <option value="DIU">Daffodil International University</option>
                                    <option value="SUB">State University, Bangladesh</option>
                                    <option value="DU">Dhaka University</option>
                                    <option value="BRUR">Begum Rokeya University, Rangpur</option>
                                    <option value="HSTU">Hazi Danesh Science and Technology University</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name ="submit" value="Submit">
                                <input type="reset" name = reset" value = "Reset">
                            </td>
                        </tr>
                    </table>
                </form>

                <table class = "tblone">

                    <?php

                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $gender = $_POST['gender'];
                            $department = $_POST['department'];
                            $coder = $_POST['coder'];
                            $versity = $_POST['versity'];

                        

                    ?>

                        <tr>
                            <td colspan = "2" align = "center">Output</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <?php
                                    if($gender == 'male'){
                                        echo "Male";
                                    }
                                    else{
                                        echo "Female";
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td>
                                <?php echo $department; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Coder</td>
                            <td>
                                <?php echo $coder; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>University </td>
                            <td>
                                <?php echo $versity; ?>
                            </td>
                        </tr>                       
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>