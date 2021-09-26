<?php

require "../database/connect.php";

$email = $_POST['email'];
$newPass = $_POST['newPass'];

$resetPass = true;

$queryEmail = mysqli_query($connect, "SELECT email FROM perdoruesi WHERE email='$email' AND roli_id=1;");
$countEmail = @mysqli_num_rows($queryEmail);

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorEmail = "Please enter a valid email address.";
    $resetPass = false;
}

else if($countEmail == 0) {
    $errorEmail = "This admin doesn't exist!";
    $resetPass = false;
}

if(empty($newPass)) {
    $errorPass = "Password field is required!";
    $resetPass = false;
}

//fjalekalimi ka vlere, validoje ate
else {
    $uppercase = preg_match("@[A-Z]@", $newPass);
    $lowercase = preg_match("@[a-z]@", $newPass);
    $number = preg_match("@[0-9]@", $newPass);

    //nese fjalekalimi eshte i dobet
    //nese nuk plotesohet njeri nga kushtet e meposhtem atehere konsiderohet qe fjalekalimi eshte i dobet
    if(!$uppercase || !$lowercase || !$number || strlen($newPass) < 5) {
        $errorPass = "Weak password.";
        $errorPassTooltip = "Password should have minimum 5 characters and should include an uppercase and a number!";
        $resetPass = false;
    }
}

if($resetPass==true) {
    //ne rastin tone do te bejme nje insertim
    $querysql = "UPDATE perdoruesi 
                     SET password='$newPass' WHERE email='$email';";

    if (mysqli_multi_query($connect, $querysql)) {
        echo '<script type="text/javascript">';
        echo 'alert("Password reset successfully!")';
        echo '</script>';
        echo'<script> location.replace("login.php"); </script>';
    }
    else {
        echo '<script type="text/javascript">';
        echo 'alert("Something went wrong!")';
        echo '</script>';
    }
}

?>