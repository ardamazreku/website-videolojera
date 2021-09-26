<?php
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmpass = $_POST['confirmpass'];
$data  = date('Y-m-d',strtotime('now'));

require "../database/connect.php";

$register = true;

$queryEmail = mysqli_query($connect, "SELECT email FROM perdoruesi WHERE email='$email';");
$countEmail = @mysqli_num_rows($queryEmail);

//error te pergjithshem
if(empty($emri) && empty($mbiemri) && empty($nickname) && empty($email) && empty($pass) && empty($confirmpass) && empty($foto)) {
    $errorGen = "All fields are required!";
    $register = false;
}

//nese te pakten njera nga fushat permban nje vlere perkatese, na nevojitet ta validojme ate vlere
else {
    //nese fusha e emrit eshte e zbrazet
    if(empty($emri)) {
        $errorEmri = "Name field is required!";
        $register = false;
    }

    //emri ka vlere, validoje ate
    else {
        //nese emri permban edhe karaktere tjera jo-shkronje
        if(!preg_match("/^[a-zA-Z ]*$/", $emri)) {
            $errorEmri = "Name should contain characters only!";
            $register = false;
        }
    }
    //nese fusha e mbiemrit eshte e zbrazet
    if(empty($mbiemri)) {
        $errorMbiemri = "Surname field is required!";
        $register = false;
    }
    else {
        //nese mbiemri permban edhe karaktere tjera jo-shkronje
        if(!preg_match("/^[a-zA-Z ]*$/", $mbiemri)) {
            $errorMbiemri = "Surname should contain characters only!";
            $register = false;
        }
    }
    //nese fusha e email adreses eshte e zbrazet
    if(empty($email)) {
        $errorEmail = "Email field is required!";
        $register = false;
    }
    //email adresa ka vlere, validoje ate
    else {
        //nese formati i email adreses se shenuar nuk eshte i sakte
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorEmail = "Please enter a valid email address.";
            $register = false;
        }
        //nese ekziston nje perdorues qe e ka kete email adrese
        else if($countEmail != 0) {
            $errorEmail = "This user already exists.";
            $register = false;
        }
    }
    if(empty($pass)) {
        $errorPassword = "Password field is required!";
        $register = false;
    }

    //fjalekalimi ka vlere, validoje ate
    else {
        $uppercase = preg_match("@[A-Z]@", $pass);
        $lowercase = preg_match("@[a-z]@", $pass);
        $number = preg_match("@[0-9]@", $pass);

        //nese fjalekalimi eshte i dobet
        //nese nuk plotesohet njeri nga kushtet e meposhtem atehere konsiderohet qe fjalekalimi eshte i dobet
        if(!$uppercase || !$lowercase || !$number || strlen($pass) < 5) {
            $errorPassword = "Weak password.";
            $errorPassTooltip = "Password should have minimum 5 characters and should include an uppercase and a number!";
            $register = false;
        }
    }
    if($pass != $confirmpass)
    {
        $errorConfirmPass="Passwords don't match!";
        $register=false;
    }

    if($register == true) {

        //ne rastin tone do te bejme nje insertim
        $querysql = "INSERT INTO perdoruesi
			(id,roli_id,email,emri,mbiemri,nickname,password,foto,data_regj)
			VALUES (NULL,1,'$email','$emri','$mbiemri','$nickname','$pass','src/assets/images/$foto','$data');";

        //funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Registered Successfully!")';
            echo '</script>';
            echo'<script> location.replace("login.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}
?>