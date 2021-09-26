<?php

$id = $_POST['id'];
$roli = $_POST['roli'];

require "../database/connect.php";

$addRoli = true;

if(empty($id) && empty($roli)) {
    $errorGen = "Fields are required!";
    $addRoli = false;
}

else {
    if(empty($id)) {
        $errorID= "ID field is required!";
        $addRoli = false;
    }
    else {
        $number = preg_match("@[0-9]@", $id);
        if(!$number) {
            $errorID = "ID should be a number!";
            $addRoli = false;
        }
    }

    if(empty($roli)) {
        $errorRoli = "Roli field is required!";
        $addRoli = false;
    }

    if($addRoli == true) {
        $querysql = "INSERT INTO roli(id,roli) VALUES('$id','$roli');";

        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Role added successfully!")';
            echo '</script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}
?>