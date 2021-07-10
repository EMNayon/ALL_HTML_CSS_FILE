<?php

define('DB','/opt/lampp/htdocs/Test/CRUD Project/data/db.txt');

function seed(){
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Kamal',
            'lname' =>  'Hasan',
            'roll' => '11'
        ),array(
            'id' => 2,
            'fname' => 'Emran',
            'lname' => 'Masud',
            'roll' => '20'
        ),array(
            'id' => 3,
            'fname' => 'Nayon',
            'lname' => 'Hossain',
            'roll' => '7'
        ),array(
            'id' => 4,
            'fname' => 'Sakil',
            'lname' => 'Mona',
            'roll' => '5'
        ),array(
            'id' => 5,
            'fname' => 'Alamgir',
            'lname' => 'Hossain',
            'roll' => '1'
        ), 
    );
    $serializedData = serialize($data);
    file_put_contents(DB, $serializedData,LOCK_EX);
}

function generateReport(){
    $serializedData = file_get_contents(DB);
    $students = unserialize($serializedData);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th width='25%'>Action</th>
        </tr>
        <?php
            foreach($students as $student){
            ?>
            <tr>
                <td><?php printf('%s %s', $student['fname'], $student['lname']); ?></td>
                <td><?php printf('%s', $student['roll']); ?></td>
                <td><?php printf('<a href="../CRUD Project/index.php?task=edit&id=%s"> Edit</a> | <a class="delete" href="../CRUD Project/index.php?task=delete&id=%s"> Delete </a>',$student['id'], $student['id']); ?></td>
            </tr>
            <?
            }
        ?>
    </table>
<?php
}

function addStudent($fname, $lname, $roll){
    $found = false;
    $serializedData = file_get_contents(DB);
    $students = unserialize($serializedData);
    foreach($students as $_student){
        if($_student['roll'] == $roll){
            $found = true;
            break;
        }
    }
    if(!$found){
        $newId = getNewId($students);

        $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll
        );
        array_push($students,$student);
        $serializedData = serialize($students);
        file_put_contents(DB, $serializedData, LOCK_EX);
        return true;
    }
   return false;
}

function getStudent($id){
    $serializedData = file_get_contents(DB);
    $students = unserialize($serializedData);
    foreach($students as $_student){
        if($_student['id'] == $id){
            return $_student;
        }
    }
    return false;
}

function updateStudent($id,$fname,$lname,$roll){
    $found = false;
    $serializedData = file_get_contents(DB);
    $students = unserialize($serializedData);

    foreach($students as $_student){
        if($_student['roll'] == $roll & $_student['id'] != $id){
            $found = true;
            break;
        }
    }

    if(!$found){
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['roll'] = $roll;

        $serializedData = serialize($students);
        file_put_contents(DB, $serializedData, LOCK_EX);
        return true;
    }
    return false;
}

function deleteStudent($id){
    $serializedData = file_get_contents(DB);
    $students = unserialize($serializedData);

    foreach($students as $offset=>$_student){
        if($_student['id'] == $id){
            unset($students[$offset]);
        }
    }

    $serializedData = serialize($students);
    file_put_contents(DB, $serializedData, LOCK_EX);
}

// function printRaw(){
//     $serializedData = file_get_contents(DB);
//     $students = unserialize($serializedData);

//     print_r($students);
// }

function getNewId($students){
    $maxId = max(array_column($students,'id'));
    return $maxId+1;
}