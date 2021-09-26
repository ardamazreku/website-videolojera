<?php

require "../database/connect.php";

$titulli = $_POST['titulli'];
$logo = $_POST['logo'];
$favicon = $_POST['favicon'];

$queryID = mysqli_query($connect, "SELECT * FROM webapp WHERE id=1;");
$countKodi = mysqli_num_rows($queryID);

$updateSettings = true;

if(empty($titulli) && empty($logo) && empty($favicon)) {
    $errorGen = "All fields are required.";
    $updateSettings = false;
}

else {
    if($updateSettings == true) {
        $queryUpdate = "UPDATE webapp SET titulli='$titulli', logo='src/assets/images/$logo', favicon='public/$favicon';";

        if (mysqli_query($connect, $queryUpdate)) {
            echo '<script type="text/javascript">';
            echo 'alert("Page settings successfully updated!")';
            echo '</script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong.")';
            echo '</script>';
        }
    }
}

?>