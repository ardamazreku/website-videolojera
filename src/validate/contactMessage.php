<?php

$mesazhi = $_POST['mesazhi'];
$email = $_SESSION['email'];

require "database/connect.php";

$komentPost = true;

if(empty($mesazhi)) {
    $errormesazhi = "Comment is required!";
    $komentPost = false;
}

else {
    if($komentPost == true) {

        $query3 = "SELECT nickname FROM perdoruesi WHERE email = '$email';";
        $query3Res = mysqli_query($connect, $query3);
        $query3Row = mysqli_fetch_array($query3Res);
        $perdoruesi_emri = $query3Row['nickname'];

        $querysql = "INSERT INTO kontakt(id,email,emri,mesazhi) VALUES (NULL, '$email', '$perdoruesi_emri', '$mesazhi');";

        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script> alert("Message sent!") </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}

?>