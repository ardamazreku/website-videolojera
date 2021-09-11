<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Gallery </title>
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
    <ul class="nk-breadcrumbs">
        
        <li><a href="index.php">Home</a></li>
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Gallery</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Latest Pictures -->
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Latest</span> Pictures</span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-1-thumb.jpg" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                <h4>Called Let</h4>
                                Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-2-thumb.jpg" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-3-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-4-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-5-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-6-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-7.jpg" class="nk-gallery-item" data-size="960x540">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-7-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-8.jpg" class="nk-gallery-item" data-size="473x390">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-8-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-9.jpg" class="nk-gallery-item" data-size="750x486">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-9-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-10.jpg" class="nk-gallery-item" data-size="960x557">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-10-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-11.jpg" class="nk-gallery-item" data-size="600x362">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-11-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="src/assets/images/gallery-12.jpg" class="nk-gallery-item" data-size="1200x670">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="src/assets/images/gallery-12-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Latest Pictures -->

            <!-- START: Recent Galleries-->
            <div class="nk-gap-2"></div>
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Recent</span> Galleries</span></h2>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <div class="col-md-6">
                    <div class="nk-gallery-item-group">
                        <a href="#" class="nk-gallery-item">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="src/assets/images/gallery-group-1.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4 class="nk-gallery-item-description-title h5">Screenshots Gallery</h4>
                            <div class="nk-gallery-item-description-info">
                                <span class="far fa-image"></span>
                                <span>58</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-gallery-item-group">
                        <a href="#" class="nk-gallery-item">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="src/assets/images/gallery-group-2.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4 class="nk-gallery-item-description-title h5">Art Gallery</h4>
                            <div class="nk-gallery-item-description-info">
                                <span class="far fa-image"></span>
                                <span>96</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-gallery-item-group">
                        <a href="#" class="nk-gallery-item">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="src/assets/images/gallery-group-3.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4 class="nk-gallery-item-description-title h5">RTS Gallery</h4>
                            <div class="nk-gallery-item-description-info">
                                <span class="far fa-image"></span>
                                <span>167</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-gallery-item-group">
                        <a href="#" class="nk-gallery-item">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="src/assets/images/gallery-group-4.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4 class="nk-gallery-item-description-title h5">Action Gallery</h4>
                            <div class="nk-gallery-item-description-info">
                                <span class="far fa-image"></span>
                                <span>4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-gallery-item-group">
                        <a href="#" class="nk-gallery-item">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="src/assets/images/gallery-group-5.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4 class="nk-gallery-item-description-title h5">Moba Gallery</h4>
                            <div class="nk-gallery-item-description-info">
                                <span class="far fa-image"></span>
                                <span>17</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nk-gallery-item-group">
                        <a href="#" class="nk-gallery-item">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="src/assets/images/gallery-group-6.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4 class="nk-gallery-item-description-title h5">Indie Gallery</h4>
                            <div class="nk-gallery-item-description-info">
                                <span class="far fa-image"></span>
                                <span>40</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Recent Galleries -->

            <!-- START: Video Galleries-->
            <div class="nk-gap-2"></div>
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Video</span> Galleries</span></h2>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <div class="col-md-6">
                    <h4>Double rainbow? What does it mean?</h4>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=eBERVWYa-1Y"></div>
                </div>
                <div class="col-md-6">
                    <h4>We will never be slaves! But we will... be conquerors</h4>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=6cXyQg_5uoc"></div>
                </div>
                <div class="col-md-6">
                    <h4>There is only the Emperor, and he is our shield and protector</h4>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=pYC44YPb_5k"></div>
                </div>
                <div class="col-md-6">
                    <h4>It looks like we don't have any Quotes for this title yet</h4>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=BXJPwBCJES8"></div>
                </div>
            </div>
            <!-- END: Video Galleries -->
        </div>
        <?php include "src/components/aside.php";?>
    </div>
</div>

<div class="nk-gap-2"></div>
    <?php include "src/components/footer.php";?>
</div>
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="src/assets/images/bg-top-3.png" alt="">
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
