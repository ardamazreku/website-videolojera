<?php
$titulli = $_POST['titulli3'];
$permbajtja = $_POST['permbajtja3'];
$email = $_SESSION['email'];
$file = $_POST['file3'];
$kategoria = $_POST['kategoria3'];

$data  = date('Y-m-d',strtotime('now'));
require "../database/connect.php";

$post = true;

if(empty($titulli) && empty($permbajtja)) {
    $post = false;
}

else {
    if($post == true) {

        $query3 = "SELECT nickname FROM perdoruesi WHERE email = '$email';";
        $query3Res = mysqli_query($connect, $query3);
        $query3Row = mysqli_fetch_array($query3Res);
        $perdoruesi_emri = $query3Row['nickname'];
        $_SESSION['nickname'] = $perdoruesi_emri;

        $querysql = "INSERT INTO lajmet(id,roli,titulli,autori,data,permbajtja,foto,kategoria,file)
            VALUES(NULL, 1, '$titulli', '$perdoruesi_emri', '$data', '$permbajtja', 'src/assets/images/$file', '$kategoria', 'news-5.php');";

        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("News article posted successfully!")';
            echo '</script>';
            echo'<script> window.open("../news.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}

?>