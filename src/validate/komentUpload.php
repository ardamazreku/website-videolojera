<?php
$komenti = $_POST['komenti'];
$email = $_SESSION['email'];
$forum_id = $_POST['forum_id'];

$data  = date('Y-m-d',strtotime('now'));

require "database/connect.php";
$komentPost = true;

if(empty($komenti)) {
    $errorKoment = "Comment is required!";
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

        $querysql = "INSERT INTO forum_comments(id,forum_id,perdoruesi_id,perdoruesi_emri,perdoruesi_foto,data_regj,data,permbajtja)
            VALUES (NULL,'$forum_id','$perdoruesi_id','$perdoruesi_emri','$perdoruesi_foto','$data_regj','$data', '$komenti');";

        //funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
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
