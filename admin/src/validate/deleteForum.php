<?php
session_start();

require "../../../database/connect.php";

//marrja e te dhenave me metoden GET
if(isset($_SESSION['email']) && isset($_SESSION['roli_id']) && $_SESSION['roli_id'] == 1 && isset($_GET['id'])) {

    $id = $_GET['id'];
    //query per fshirjen e lendes perkatese
    $deleteQuery = "DELETE FROM forum where id='$id'";

    //ekzekutimi i query-it per fshirjen
    if(mysqli_query($connect, $deleteQuery)) {
        echo '<script type="text/javascript">';
        echo 'alert("Forum topic deleted successfully!")';
        echo '</script>';
        echo '<script> location.replace("../../posts.php"); </script>';
    }
    else {
        echo '<script type="text/javascript">';
        echo 'alert("Something went wrong!")';
        echo '</script>';
        echo '<script> location.replace("../../posts.php"); </script>';
    }
}
?>