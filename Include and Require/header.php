<?php
    $fonts = "verdana";
    $bgcolor = "#444";
    $fontcolor = "#fff";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Required </title>
    <style>
        body{
            font-family: <?php echo $fonts; ?>
        }
        .phpcoding{
            width:900px; 
            margin: 0 auto;
            background:<?php echo "#ddd" ?>;
        }
        .headeroption, .footeroption{
            background:<?php echo $bgcolor; ?>; 
            color:<?php echo $fontcolor; ?>; 
            text-align:center; 
            padding: 20px;
        } 
        .headeroption h2, .footeroption h2{
            margin: 0;
        } 
        .maincontent{
            min-height:400px; 
            padding:20px;
        }
        p{
            margin:0;
        }
        
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "Learn PHP"; ?></h2>
        </section>