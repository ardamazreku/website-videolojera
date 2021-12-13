<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['roli_id'])) {

    if($_SESSION['roli_id'] == 1) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Update Blog</title>
            <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
            <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
            <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
            <link href="assets/css/master.css" rel="stylesheet">
        </head>
        <body>
        <div class="wrapper">
            <?php include 'src/components/navbar.php' ?>
            <div id="body" class="active">
                <?php include 'src/components/navbarProfile.php'?>
                <div class="content">
                    <div class="container">
                        <!-- START: ADD Role -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">Update a blog</div>
                                <div class="card-body">
                                    <?php
                                    $roli = $errorBlog = $titulli = $titulli2 = $data = $permbajtja = $permbajtja2 = $kategoria = $perdoruesi_emri =
                                    $perdoruesi_id = $perdoruesi_foto = "";
                                    if($_SERVER['REQUEST_METHOD'] == 'POST') {

                                        require "../database/connect.php";

                                        $id = $_POST['id'];
                                        $titulli = $_POST['titulli'];
                                        $titulli2 = $_POST['titulli2'];
                                        $email = $_SESSION['email'];
                                        $data  = date('Y-m-d',strtotime('now'));
                                        $permbajtja = $_POST['permbajtja'];
                                        $permbajtja2 = $_POST['permbajtja2'];
                                        $kategoria = $_POST['kategoria'];

                                        $query3 = "SELECT id,nickname,foto FROM perdoruesi WHERE email = '$email';";
                                        $query3Res = mysqli_query($connect, $query3);
                                        $query3Row = mysqli_fetch_array($query3Res);
                                        $perdoruesi_emri = $query3Row['nickname'];
                                        $perdoruesi_id = $query3Row['id'];
                                        $perdoruesi_foto = $query3Row['foto'];
                                        $_SESSION['nickname'] = $perdoruesi_emri;
                                        $_SESSION['id'] = $perdoruesi_id;
                                        $_SESSION['foto'] = $perdoruesi_foto;

                                        $update = true;

                                        if (empty($titulli)) {
                                            $errorBlog = "This field is required";
                                            $update = false;
                                        } else {
                                            if ($update == true) {

                                                $updateQuery = "UPDATE blog set perdoruesi_id='$perdoruesi_id', titulli='$titulli', titulli2='$titulli2', 
                                                autori='$perdoruesi_emri', profile_pic='$perdoruesi_foto', data='$data', permbajtja='$permbajtja', 
                                                permbajtja2='$permbajtja2', kategoria='$kategoria' WHERE id='$id'";

                                                if (mysqli_query($connect, $updateQuery)) {
                                                    echo '<script type="text/javascript">';
                                                    echo 'alert("Blog edited successfully!")';
                                                    echo '</script>';
                                                    echo '<script> location.replace("posts.php"); </script>';

                                                } else {
                                                    echo '<script type="text/javascript">';
                                                    echo 'alert("Something went wrong!")';
                                                    echo '</script>';
                                                    echo '<script> location.replace("posts.php"); </script>';
                                                }

                                            }
                                        }

                                    }
                                    ?>
                                    <form accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                        <div class="row g-2">
                                            <div class="row">
                                                <select class="form-select" name="id">
                                                    <option selected> Select </option>
                                                    <?php
                                                    require "../database/connect.php";
                                                    $query = mysqli_query($connect, "SELECT id, titulli FROM blog");

                                                    //tani na nevojitet te i marrim keto rreshta rezultat nga query i ekzekutuar
                                                    //meqe rezultati permban disa rreshta si rezultat qe kthehen nga query i ekzekutuar me larte, atehere duhet te iterojme ne secilin rresht me nje cikel
                                                    while($row = @mysqli_fetch_assoc($query)) {
                                                        $id = $row['id'];
                                                        $titulli = $row['titulli'];

                                                        //vendosja e te dhenave te marra ne etiketat <option> ne HTML
                                                        echo "<option value = '$id'> $titulli </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <label for="username" class="form-label sr-only">Title</label>
                                                <input type="text" name="titulli" placeholder="Title 1" class="form-control">
                                                <?php echo "<span style='color: red;'>$errorBlog<span>";?>
                                            </div>
                                            <div class="row">
                                                <input type="text" name="titulli2" placeholder="Title 2" class="form-control">
                                            </div>
                                            <div class="row">
                                                <input type="text" name="permbajtja" placeholder="Content 1" class="form-control">
                                            </div>
                                            <div class="row">
                                                <input type="text" name="permbajtja2" placeholder="Content 2" class="form-control">
                                            </div>
                                            <div class="row">
                                                <input type="text" name="kategoria" placeholder="Category" class="form-control">
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END: ADD Role -->
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/datatables/datatables.min.js"></script>
        <script src="assets/js/initiate-datatables.js"></script>
        <script src="assets/js/script.js"></script>
        </body>
        </html>
        <?php
    }
//nese perdoruesi nuk eshte admin ridrejtoje ne faqen baze pas kyqjes
    else {
        header("Location: index.php");
    }
}
//nese perdoruesi nuk eshte kyq ridrejtoje ne faqen e logimit
else {
    header("Location: login.php");
}
?>