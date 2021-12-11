<?php
$titulli = $_POST['titulli'];
$titulli2 = $_POST['titulli2'];
$permbajtja = $_POST['permbajtja'];
$permbajtja2 = $_POST['permbajtja2'];
$email = $_SESSION['email'];
$kategoria = $_POST['kategoria'];
$file = $_POST['file'];

$data  = date('Y-m-d',strtotime('now'));

$post = true;

if(empty($titulli) && empty($permbajtja)) {
    $post = false;
}

else {
    if($post == true) {

        $query3 = "SELECT id,nickname,foto FROM perdoruesi WHERE email = '$email';";
        $query3Res = mysqli_query($connect, $query3);
        $query3Row = mysqli_fetch_array($query3Res);
        $perdoruesi_emri = $query3Row['nickname'];
        $perdoruesi_id = $query3Row['id'];
        $perdoruesi_foto = $query3Row['foto'];
        $_SESSION['nickname'] = $perdoruesi_emri;
        $_SESSION['id'] = $perdoruesi_id;
        $_SESSION['foto'] = $perdoruesi_foto;

        $querysql = "INSERT INTO blog(id,roli,perdoruesi_id,titulli,titulli2,autori,profile_pic,data,permbajtja,permbajtja2,foto,kategoria,blog_file)
    VALUES(NULL, 1, '$perdoruesi_id', '$titulli', '$titulli2', '$perdoruesi_emri', '$perdoruesi_foto', '$data', '$permbajtja', '$permbajtja2', 'src/assets/images/$file', '$kategoria', 'blog-article-3.php');";

        if (mysqli_multi_query($connect, $querysql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Article posted successfully!")';
            echo '</script>';
            echo'<script> window.open("../blog-list.php"); </script>';
        }
        else {
            echo '<script type="text/javascript">';
            echo 'alert("Something went wrong!")';
            echo '</script>';
        }
    }
}

?>