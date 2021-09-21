<?php

$pass = $_POST['currentPassword'];
$newPass = $_POST['newPassword'];
$email = $_SESSION['email'];

//konektimi me db
$server = 'localhost:3307';
$user = 'root';
$password = '';
$dbName = 'videolojera';

$connect = mysqli_connect($server,$user,$password,$dbName);

$passUpdate = true;

$queryEmail = mysqli_query($connect, "SELECT email FROM perdoruesi WHERE email='$email';");
$countEmail = @mysqli_num_rows($queryEmail);

if(empty($pass) && empty($newPass)) {
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

    if($passUpdate == true) {

        //ne rastin tone do te bejme nje insertim
        $querysql = "UPDATE perdoruesi 
                     SET password='$newPass' WHERE email='$email';";

        //funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Password updated successfully!")';
            echo '</script>';
            echo'<script> location.replace("login.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong! Pass:")';
            echo '</script>';
        }
    }
}

?>
