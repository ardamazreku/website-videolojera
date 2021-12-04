<?php
$titulli = $_POST['titulli'];
$permbajtja = $_POST['permbajtja'];
$cmimi = $_POST['cmimi'];
$file = $_POST['file'];
$kategoria = $_POST['kategoria'];
$kategoriaelojes = $_POST['kategoriaelojes'];
$link = $_POST['link'];

$data  = date('Y-m-d',strtotime('now'));
require "../database/connect.php";

$post = true;

if(empty($titulli) && empty($permbajtja)) {
    $post = false;
}

else {
    if($post == true) {

        $querysql = "INSERT INTO store(id,emri,permbajtja,cmimi,kategoria,data,foto,kategoriaelojes,link)
            VALUES(NULL, '$titulli', '$permbajtja', '$cmimi', '$kategoria', '$data', 'src/assets/images/$file', '$kategoriaelojes', '$link');";

        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Game posted successfully!")';
            echo '</script>';
            echo'<script> window.open("../store.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}

?>