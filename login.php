<?php
session_start();

if(!isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Login </title>
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
    <link rel="stylesheet" href="src/assets/css/login.css">
    <!-- jQuery -->
    <script src="src/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>
<body>
<?php include "src/components/navbar.php";?>

<?php

    $email = "";

    $errorGen = $errorEmail =$errorPassword= "";

    $email = $pass = "";

    //kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //POST
        include 'src/validate/loginValidate.php';
    }
?>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="src/assets/images/slide-3.jpg" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2">Sign in </h3>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="row px-3">
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label>
                        <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" value="<?php echo $email; ?>">
                        <?php echo "<span class='error'>$errorEmail<span>";?>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="row px-3">
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label>
                        <input type="password" name="password" placeholder="Enter password" value="<?php echo $pass; ?>">
                        <?php echo "<span class='error'>$errorPassword<span>";?>
                        <?php echo "<span class='error'>$errorGen<span>";?>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="row mb-3 px-3">
                        <button type="submit" class="btn btn-blue text-center">Login</button>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="row mb-4 px-3">
                        <p class="font-weight-bold">Don't have an account?
                            <a class="text-danger" href="signup.php">Register</a>
                        </p>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4" style ="padding: 20px">
            <script>
                const date = new Date();
                const year = date.getFullYear();
            </script>
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Copyright &copy;
                    <script>
                        document.write(year);
                    </script>. All rights reserved.
                </small>
            </div>
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>
<?php include"src/components/footer.php"; ?>

<!-- START: Page Background -->
<img class="nk-page-background-top" src="src/assets/images/bg-top.png" alt="">
<img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->

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

<!-- SoundManager2 -->
<script src="src/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="src/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="src/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<script src="src/assets/js/goodgames.min.js"></script>
<script src="src/assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->
</body>
</html>
<?php
}

else {
    //nese perdoruesi eshte i kyqur, atehere ridrejtoje ne faqen baze pas kyqjes
    header("Location: index.php");
}
?>
