<?php
    /**
     * Validating data => Determine if the data is in proper form.
     * Sanitizing data => Remove any illegal character from the data. 
     * 
     * PHP filters are used to validate and sanitize external input. 
     * 
     * The filter_list() function can be used to list what the PHP filter extension offers. 
     */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Extension </title>
    <style>
        table, tr,td {
            border : solid purple 1px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Filter Name </td>
            <td>Filter ID </td>
        </tr>
        <?php
            foreach(filter_list() as $id => $filter){
                echo '<tr><td>'.$filter.'</td><td>' . filter_id($filter).'</td></tr>';
            }
        ?>
    </table>
</body>
</html>