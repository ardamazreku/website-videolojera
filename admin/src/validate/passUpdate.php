<?php

$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$pass = $_POST['currentPassword'];
$newPass = $_POST['newPassword'];
$email = $_SESSION['email'];

require "../database/connect.php";

$passUpdate = true;

$queryEmail = mysqli_query($connect, "SELECT email FROM perdoruesi WHERE email='$email';");
$countEmail = @mysqli_num_rows($queryEmail);

if(empty($pass) && empty($newPass) && empty($emri) && empty($mbiemri)) {
    $errorGen = "Fields are required!";
    $passUpdate = false;
}

else {
    if(empty($pass)) {
        $errorPass= "Password field is required!";
        $passUpdate = false;
    }

    //fjalekalimi ka vlere, validoje ate
    else {
        $uppercase = preg_match("@[A-Z]@", $newPass);
        $lowercase = preg_match("@[a-z]@", $newPass);
        $number = preg_match("@[0-9]@", $newPass);

        //nese fjalekalimi eshte i dobet
        //nese nuk plotesohet njeri nga kushtet e meposhtem atehere konsiderohet qe fjalekalimi eshte i dobet
        if(!$uppercase || !$lowercase || !$number || strlen($newPass) < 5) {
            $errorConfirmPass = "Weak password.";
            $errorPassTooltip = "Password should have minimum 5 characters and should include an uppercase and a number!";
            $passUpdate = false;
        }
    }

    if($pass == $newPass)
    {
        $errorConfirmPass="That's the same as your current password!";
        $passUpdate=false;
    }

    if(empty($emri) && empty($mbiemri)) {
        $errorGen = "Name & Surname are required fields!";
        $passUpdate = false;
    }

    if($passUpdate == true) {

        $querysql = "UPDATE perdoruesi 
                     SET password='$newPass', emri='$emri', mbiemri='$mbiemri' WHERE email='$email';";

        //funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Profile updated successfully!")';
            echo '</script>';
            echo'<script> location.replace("profile.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}

?>
