<?php
session_start();
if(isset($_SESSION['email'])) {
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | New Topic </title>
    <meta name="description" content="SteCord - Gaming community and store">
    <meta name="keywords" content="game, gaming, Bootstrap, premium">
    <meta name="author" content="Arda Mazreku">
    <link rel="icon" type="image/png" href="public/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="src/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="src/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="src/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <!-- IonIcons -->
    <link rel="stylesheet" href="src/assets/vendor/ionicons/css/ionicons.min.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="src/assets/vendor/flickity/dist/flickity.min.css">
    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="src/assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="src/assets/vendor/photoswipe/dist/default-skin/default-skin.css">
    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="src/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="src/assets/vendor/summernote/dist/summernote-bs4.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="src/assets/css/app.css">
    <!-- jQuery -->
    <script src="src/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>
<body>
<?php include "src/components/navbar.php";?>
<div class="nk-main">
    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">

            <li><a href="index.php">Home</a></li>

            <li><span class="fa fa-angle-right"></span></li>

            <li><a href="forum-topics.php">Forum</a></li>

            <li><span class="fa fa-angle-right"></span></li>

            <li><span>Create a new topic</span></li>

        </ul>
    </div>
    <!-- END: Breadcrumbs -->
    <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-forum">
                <div class="nk-widget">
                    <div class="nk-widget-content">
                        <?php
                            $titulli = $permbajtja = $file = $error = "";

                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                include 'src/validate/postForumTopic.php';
                            }
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                            <h4 class="nk-widget-title"><span class="text-main-1">FORUM</span> TITLE</h4>
                            <input type="text" placeholder="Title" class="form-control bg-dark" name="titulli" value="<?php echo $titulli; ?>" /><br>
                            <h4 class="nk-widget-title"><span class="text-main-1">FORUM</span> SUMMARY</h4>
                            <textarea class="form-control bg-dark required" name="permbajtja" rows="5" placeholder="Summary"><?php echo $permbajtja; ?></textarea>
                            <div class="nk-gap-1"></div>
                            <?php echo "<span class='error'>$error</span>";?>
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Upload a file (not required)</label>
                              <input class="form-control bg-dark" type="file" id="formFile" name="file" value="<?php echo $file; ?>">
                            </div>
                            <div class="nk-gap-1"></div>
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Post</span>
                            </button>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
</div>
<div class="nk-gap-2"></div>
<?php include "src/components/footer.php";?>
</div>

<!-- START: Page Background -->
    <img class="nk-page-background-top" src="src/assets/images/bg-top-5.png" alt="">
    <img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->

<?php include "scripts.php";?>

</body>
</html>
<?php
}
else {
    echo'<script> location.replace("login.php"); </script>';
}
?>