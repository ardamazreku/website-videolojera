<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Blog List </title>
    <meta name="description" content="SteCord - Gaming community and store">
    <meta name="keywords" content="game, gaming, Bootstrap, premium">
    <meta name="author" content="Arda Mazreku">
    <link rel="icon" type="image/png" href=public/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="src/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <script defer src="src/assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="src/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
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
        
        <li><a href="blog-list.php">Blog</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Blog List</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">
                <!-- START: Posts List -->
                <div class="nk-blog-list">
                    <?php
                        require "database/connect.php";
                        $conn = $connect->prepare("SELECT * FROM blog");
                        $conn->execute();
                        $res = $conn->get_result();

                        while($row = $res->fetch_assoc()):
                    ?>
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <div class="row vertical-gap">
                                <div class="col-md-5 col-lg-6">
                                    <a href="blog-article.php" class="nk-post-img">
                                        <img src="<?= $row['foto']?>" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 col-lg-6">
                                    <h2 class="nk-post-title h4"><a href="blog-article.php"><?= $row['titulli']?></a></h2>
                                    <div class="nk-post-text">
                                        <p><?= $row['permbajtja']?></p>
                                    </div>
                                    <div class="nk-post-by">
                                        by <?= $row['autori']?> in <?= $row['data']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                        <!-- END: Post -->

                </div>
                <!-- END: Posts List -->

            </div>
            <?php include"src/components/aside.php"; ?>
        </div>
    </div>

    <div class="nk-gap-2"></div>
    <?php include "src/components/footer.php";?>
    </div>

        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="src/assets/images/bg-top-3.png" alt="">
    <img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

<?php include "src/components/modals.php";?>

<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="src/assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="src/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="src/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="src/assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="src/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="src/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="src/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="src/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="src/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="src/assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="src/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="src/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="src/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="src/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="src/assets/vendor/moment/min/moment.min.js"></script>
<script src="src/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="src/assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="src/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="src/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="src/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="src/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="src/assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="src/assets/js/goodgames.min.js"></script>
<script src="src/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->
</body>
</html>
