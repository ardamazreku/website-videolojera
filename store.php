<?php
session_start();
if(isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> SteCord | Game Store </title>
<meta name="description" content="SteCord - Gaming community and store">
<meta name="keywords" content="game, gaming, Bootstrap, premium">
<meta name="author" content="Arda Mazreku">
<link rel="icon" type="image/png" href="public/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
<link rel="stylesheet" href="src/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="src/assets/vendor/bootstrap/dist/css/bootstrap-grid.min.css">
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
        <li><span>Store</span></li>
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
    <!-- START: Categories -->
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="src/assets/images/icon-mouse.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title">PC</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="src/assets/images/icon-gamepad.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"> PS & XBOX </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="src/assets/images/icon-nintendo.png" width="60%" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title">Nintendo</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->

    <div class="nk-gap-3"></div>

    <!-- START: Top 10 Best Sellers -->
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Top 10</span> Best Sellers</span></h3>
    <div class="nk-gap"></div>
    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner">
            <?php
                require "database/connect.php";
                $conn = $connect->prepare("SELECT * FROM store WHERE kategoriaelojes = 'best_selling';");
                $conn->execute();
                $res = $conn->get_result();

                while($row = $res->fetch_assoc()):
            ?>
                <div>
                    <div class="pl-5 pr-5">
                        <div class="nk-product-cat-3">
                            <a class="nk-product-image" href="<?= $row['link']?>" target="_blank">
                                <img src="<?= $row['foto']?>" alt="">
                            </a>
                            <div class="nk-product-cont">
                                <div class="nk-gap-1"></div>
                                <h3 class="nk-product-title h5">
                                    <a href="store-product.php"><?= $row['emri']?></a>
                                </h3>
                                <div class="nk-gap-1"></div>
                                <div class="nk-product-price"><?= $row['cmimi']?> €</div>
                                <div class="nk-gap-1"></div>
                                <a href="<?= $row['link']?>" target="_blank" class="nk-btn nk-btn-color-primary">
                                    <span class="nk-btn-effect-bg"></span>BUY ON STEAM
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
    <!-- END: Top 10 Best Sellers -->

    <div class="nk-gap-3"></div>

    <!-- START: Featured Games -->
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Featured</span> Games</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM store WHERE kategoriaelojes = 'featured_games';");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
        ?>
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="<?= $row['link']?>" target="_blank">
                    <img src="<?= $row['foto']?>" alt="">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5">
                        <a href="<?= $row['link']?>" target="_blank"><?= $row['emri']?></a>
                    </h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="5">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-post-categories" style="float:left">
                        <span class="bg-main-1"><?= $row['kategoria']?></span>
                    </div>
                    <div class="nk-gap-3"></div>
                    <p><?= $row['permbajtja']?></p>
                    <div class="nk-product-price">
                        <?= $row['cmimi']?> €
                    </div>
                    <div class="nk-gap-1"></div>
                    <a href="<?= $row['link']?>" target="_blank" class="nk-btn nk-btn-color-primary">
                        <span class="nk-btn-effect-bg"></span>BUY ON STEAM
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>
    <!-- END: Featured Games -->

    <!-- START: Most Popular Free -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">TOP</span> Free Games </span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM store WHERE kategoriaelojes = 'free_games';");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
        ?>
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" style="width:50%" href="<?= $row['link']?>" target="_blank">
                    <img src="<?= $row['foto']?>" alt="">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5">
                        <a href="<?= $row['link']?>" target="_blank"><?= $row['emri']?></a>
                    </h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-post-categories" style="float:left">
                        <span class="bg-main-1"><?= $row['kategoria']?></span>
                    </div>
                    <div class="nk-gap-3"></div>
                    <div class="nk-product-price">
                        <span class="text-main-1"><?= $row['cmimi']?></span>
                    </div>
                    <div class="nk-gap-1"></div>
                    <a href="<?= $row['link']?>" target="_blank" class="nk-btn nk-btn-color-primary">
                        <span class="nk-btn-effect-bg"></span> DOWNLOAD
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <!-- END: Most Popular Free -->
</div>
<div class="nk-gap-2"></div>
<?php include"src/components/footer.php"; ?>
</div>

<!-- START: Page Background -->
    <img class="nk-page-background-top" src="src/assets/images/bg-top-4.png" alt="">
    <img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->
<?php include "scripts.php";?>
</body>
</html>
<?php
}
else {
    echo'<script> alert("You have to log in order to access the store!"); 
         location.replace("login.php"); </script>';
}
?>