<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Forum Topics </title>
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
        
        <li><span>Main Game Discussions</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

    <div class="container">

        <!-- START: Pagination -->
        <div class="row justify-content-end">
            <div class="col-md-3 text-right">
                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white">New Topic</a>
            </div>
        </div>
        <!-- END: Pagination -->

        <div class="nk-gap-2"></div>
        <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM forum");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
        ?>
        <!-- START: Forums List -->
        <ul class="nk-forum">
            <li>
                <div class="nk-forum-icon">
                    <i class="fad fa-dice-d8"></i>
                </div>
                <div class="nk-forum-title">
                    <h3><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h3>
                    <div class="nk-forum-title-sub">Started by <a href="#"><?= $row['emri']?></a>
                    <i class="fas fa-check-circle"></i> on <?= $row['data_postim']?></div>
                </div>
            </li>
        </ul>
        <?php endwhile;?>
        <!-- END: Forums List -->
    </div>

    <div class="nk-gap-2"></div>
    <?php include "src/components/footer.php";?>
    </div>

<!-- START: Page Background -->
    <img class="nk-page-background-top" src="src/assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->

<?php include "scripts.php";?>

</body>
</html>
