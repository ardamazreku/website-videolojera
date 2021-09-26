<?php

//validimi i te dhenave te formes se kycjes

//marrja e te dhenave te formes permes metodes POST
$email = $_POST['email'];
$pass = $_POST['password'];

require "../database/connect.php";

$login = true;

//nese asnjera nga fushat nuk eshte plotesuar
if(empty($email) && empty($pass)) {
    $errorGen = "Email and password are required!";
    $login = false;
}

//nese te pakten njera nga fushat ka vlere, atehere validoje ate vleren
else {
    //validimi i username-it

    //nese username eshte i zbrazet
    if(empty($email)) {
        $errorEmail = "Email is required!";
        $login = false;
    }

    //nese username ka vlere, validoje ate
    else {
        //nese perdoruesi nuk ekziston

        $query1 = "SELECT * FROM perdoruesi WHERE email = '$email' AND roli_id='1';";
        $query1Res = mysqli_query($connect, $query1);
        $count1 = mysqli_num_rows($query1Res);

        //nese nuk ka rreshta rezultat => perdoruesi nuk ekziston
        if($count1 == 0) {
            $errorEmail = "This user doesn't exist!";
            $login = false;
        }
    }

    //validimi i password-it
    //nese fjalekalimi eshte i zbrazet
    if(empty($pass)) {
        $errorPassword = "Password is required!";
        $login = false;
    }

    //nese fjalekalimi ka vlere, validoje ate
    else {
        //nese fjalekalimi per kete perdorues nuk eshte i sakte
        $query2 = "SELECT password FROM perdoruesi WHERE email = '$email';";
        $query2Res = mysqli_query($connect, $query2);
        $query2Row = mysqli_fetch_array($query2Res);
        $passwordDB = $query2Row['password'];
        $pass1 = $pass;

        //nese vlerat e fjalekalimeve nuk perputhen
        if($pass1 != $passwordDB) {
            $errorPassword = "Password is incorrect!";
            $login = false;
        }
    }

    //nese asnje gabim nuk ka ndodhur, atehere asnjehere nuk eshte plotesu asnje kusht qe perfaqeson nje gabim te ndodhur => variabla login ende e permban vleren fileestare true
    if($login == true) {
        //perdoruesi kyqet ne sistem, varesisht prej rolit te tij

        $query3 = "SELECT roli_id FROM perdoruesi WHERE email = '$email';";
        $query3Res = mysqli_query($connect, $query3);
        $query3Row = mysqli_fetch_array($query3Res);
        $roli = $query3Row['roli_id'];

        $_SESSION['email'] = $email;
        $_SESSION['roli_id'] = $roli;

        //ridrejtoje ne faqen baze e cila mund te qaset pas kyqjes
        echo'<script> location.replace("index.php"); </script>';
    }
}
?>