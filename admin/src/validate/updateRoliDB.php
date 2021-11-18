<?php

require "../database/connect.php";

    $id = $_POST['id'];
    $roli = $_POST['newRoli'];

    $update = true;

if (empty($roli)) {
    $errorRoli = "You should type a new role title!";
    $update = false;
}

else {
    if($update == true) {

    $updateQuery = "UPDATE roli set roli='$roli' where id='$id'";

        if(mysqli_query($connect, $updateQuery)) {
            echo '<script type="text/javascript">';
            echo 'alert("Role edited successfully!")';
            echo '</script>';

        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
            echo '<script> location.replace("roles.php"); </script>';
        }

    }
}
?>