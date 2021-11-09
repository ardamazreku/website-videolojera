<?php

$titulli = $_POST['titulli'];
$permbajtja = $_POST['permbajtja'];
$file = $_POST['file'];
$email = $_SESSION['email'];

$data  = date('Y-m-d',strtotime('now'));

require "database/connect.php";

$komentPost = true;

if(empty($titulli) && empty($permbajtja)) {
    $error = "Fields are required!";
    $komentPost = false;
}

else {
    if($komentPost == true) {

        $query3 = "SELECT id, nickname, foto, data_regj FROM perdoruesi WHERE email = '$email';";
        $query3Res = mysqli_query($connect, $query3);
        $query3Row = mysqli_fetch_array($query3Res);
        $perdoruesi_id = $query3Row['id'];
        $perdoruesi_emri = $query3Row['nickname'];
        $perdoruesi_foto = $query3Row['foto'];
        $data_regj = $query3Row['data_regj'];

         $_SESSION['id'] = $perdoruesi_id;
         $_SESSION['nickname'] = $perdoruesi_emri;
         $_SESSION['foto'] = $perdoruesi_foto;
         $_SESSION['data_regj'] =  $data_regj;

         $querysql = "INSERT INTO forum(id,roli_id,perdoruesi_id,email,emri,profile_pic,data_regjistrim,data_postim,titulli,permbajtja,attachment,file)
         VALUES (NULL,2,'$perdoruesi_id','$email','$perdoruesi_emri','$perdoruesi_foto','$data_regj','$data','$titulli','$permbajtja','src/assets/images/$file',NULL);";

        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script> alert("Reply posted!") </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}

?>