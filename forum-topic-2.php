<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Forum Topic </title>
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
    <!-- jQuery -->
    <script src="src/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>
<body>
<?php include "src/components/navbar.php";?>
<div class="nk-main">

    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM forum WHERE id = 3");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
            ?>
            <ul class="nk-breadcrumbs">
                <li><a href="index.php">Home</a></li>

                <li><span class="fa fa-angle-right"></span></li>

                <li><a href="forum-topics.php">Forum</a></li>

                <li><span class="fa fa-angle-right"></span></li>

                <li><span><?= $row['titulli']?></span></li>
            </ul>
        <?php endwhile; ?>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->

    <div class="container">

        <!-- START: Pagination -->
        <div class="row justify-content-end">
            <div class="col-md-3 text-right">
                <a href="#forum-reply" class="nk-btn nk-btn-rounded nk-btn-color-white nk-anchor">Reply</a>
            </div>
        </div>
        <!-- END: Pagination -->

        <div class="nk-gap-2"></div>

        <!-- START: Forums List -->
        <ul class="nk-forum nk-forum-topic">
            <li>
                <?php
                    require "database/connect.php";
                    $conn = $connect->prepare("SELECT * FROM forum WHERE id = 3");
                    $conn->execute();
                    $res = $conn->get_result();

                    while($row = $res->fetch_assoc()):
                    ?>
                    <div class="nk-forum-topic-author">
                        <a href="#">
                            <img src="<?= $row['profile_pic']?>">
                        </a>
                        <div class="nk-forum-topic-author-name">
                            <a href="#"><?= $row['emri']?></a>
                        </div>
                        <div class="nk-forum-topic-author-since">
                            Member since <?= $row['data_regjistrim']?>
                        </div>
                    </div>
                    <div class="nk-forum-topic-content">
                        <p><?= $row['permbajtja']?></p>
                    </div>
                    <div class="nk-forum-topic-footer">
                        <span class="nk-forum-topic-date"><?= $row['data_postim']?></span>
                        <span class="nk-forum-action-btn">
                            <a href="#forum-reply" class="nk-anchor"><span class="fa fa-reply"></span> Reply</a>
                        </span>
                        <span class="nk-forum-action-btn">
                            <a href="#"><span class="fa fa-flag"></span> Spam</a>
                        </span>
                    </div>
                    <!-- END: Forum Post -->
                <?php endwhile;?>
            </li>
            <!--START: Forum Post Replies -->
            <li>
                <?php
                    require "database/connect.php";
                    $conn = $connect->prepare("SELECT * FROM forum_comments WHERE forum_id = 3");
                    $conn->execute();
                    $res = $conn->get_result();

                    while($row = $res->fetch_assoc()):
                ?>
                <div class="nk-forum-topic-author">
                    <a href="#">
                        <img src="<?= $row['perdoruesi_foto']?>">
                    </a>
                    <div class="nk-forum-topic-author-name">
                        <a href="#"><?= $row['perdoruesi_emri']?></a>
                    </div>
                    <div class="nk-forum-topic-author-since">
                        Member since <?= $row['data_regj']?>
                    </div>
                </div>
                <div class="nk-forum-topic-content">
                    <p><?= $row['permbajtja']?></p>
                </div>
                <div class="nk-forum-topic-footer">
                    <span class="nk-forum-topic-date"><?= $row['data']?></span>
                    <span class="nk-forum-action-btn">
                        <a href="#forum-reply" class="nk-anchor"><span class="fa fa-reply"></span> Reply</a>
                    </span>
                    <span class="nk-forum-action-btn">
                        <a href="#"><span class="fa fa-flag"></span> Spam</a>
                    </span>
                </div>
                <?php endwhile;?>
            </li>
        </ul>
        <!-- END: Forums List -->

        <div class="nk-gap-2"></div>
        <div id="forum-reply"></div>
        <div class="nk-gap-4"></div>
        <!-- START: Reply -->
        <form action="#" novalidate>
            <h3 class="h4">Reply</h3>
            <div class="nk-gap-1"></div>
            <textarea name="reply" cols="30" rows="10" class="nk-summernote form-control"></textarea>
            <div class="nk-gap-1"></div>
            <button href="#" class="nk-btn nk-btn-rounded nk-btn-color-white">Reply</button>
        </form>
        <!-- END: Reply -->
    </div>

    <div class="nk-gap-2"></div>
    <?php include "src/components/footer.php";?>
</div>

<!-- START: Page Background -->

<img class="nk-page-background-top" src="src/assets/images/bg-top.png" alt="">
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
