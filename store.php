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

    <!-- START: Top 10 Best Sellers -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Top 10</span> Best Sellers</span></h3>
    <div class="nk-gap"></div>
    <div class="nk-carousel nk-carousel-x4" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
        <div class="nk-carousel-inner">
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">So saying he unbuckled</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 23.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-2-xs.jpg" alt="However, I have reason">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">However, I have reason</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 32.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-3-xs.jpg" alt="It was some time before">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">It was some time before</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 14.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-4-xs.jpg" alt="She was bouncing">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">She was bouncing</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 20.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-5-xs.jpg" alt="In all revolutions of">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">In all revolutions of</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 23.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-6-xs.jpg" alt="Just then her head ">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">Just then her head </a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 32.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-7-xs.jpg" alt="With what mingled joy">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">With what mingled joy</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 14.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-8-xs.jpg" alt="She was bouncing away">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">She was bouncing away</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 20.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-9-xs.jpg" alt="The word was">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">The word was</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 23.00</div>
                    </div>
                </div>
            </div></div>
            
            
            <div><div class="pl-5 pr-5">
                <div class="nk-product-cat-3">
                    <a class="nk-product-image" href="store-product.php">
                        <img src="src/assets/images/product-10-xs.jpg" alt="My mother was so much">
                    </a>
                    <div class="nk-product-cont">
                        <div class="nk-gap-1"></div>
                        <h3 class="nk-product-title h5"><a href="store-product.php">My mother was so much</a></h3>
                        <div class="nk-gap-1"></div>
                        <div class="nk-product-price">€ 32.00</div>
                    </div>
                </div>
            </div></div>
            
        </div>
    </div>
    <!-- END: Top 10 Best Sellers -->

    <!-- START: Featured Games -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Featured</span> Games</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        
        
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-7-md.jpg" alt="With what mingled joy">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">With what mingled joy</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    She clutched the matron by the arm, and forcing her into a chair by the bedside, was about to speak, when looking round, she caught sight of the two old women
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">€ 14.00</div>
                    <div class="nk-gap-1"></div>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-8-md.jpg" alt="She was bouncing away">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">She was bouncing away</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                    <div class="nk-gap-1"></div>
                    For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob. After we had jogged on for some little time
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">€ 20.00</div>
                    <div class="nk-gap-1"></div>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-9-md.jpg" alt="The word was">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">The word was</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">€ 23.00</div>
                    <div class="nk-gap-1"></div>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-6">
            <div class="nk-product-cat-2">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-10-md.jpg" alt="My mother was so much">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">My mother was so much</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    A hundred thousand grateful loves to your dear papa and mamma . Is your poor brother recovered of his rack - punch ? Oh, dear!Oh, dear!How men should beware of wicked
                    <div class="nk-gap-2"></div>
                    <div class="nk-product-price">€ 32.00</div>
                    <div class="nk-gap-1"></div>
                    <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END: Featured Games -->

    <!-- START: Most Popular -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Most</span> Popular</span></h3>
    <div class="nk-gap"></div>
    <div class="row vertical-gap">
        
        
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-11-xs.jpg" alt="She gave my mother">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">She gave my mother</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 14.00</div>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-12-xs.jpg" alt="A hundred thousand">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">A hundred thousand</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 20.00</div>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-13-xs.jpg" alt="So saying he unbuckled">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">So saying he unbuckled</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 23.00</div>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-14-xs.jpg" alt="However, I have reason">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">However, I have reason</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 32.00</div>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-15-xs.jpg" alt="At first, for some time">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">At first, for some time</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 14.00</div>
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-4 col-md-6">
            <div class="nk-product-cat">
                <a class="nk-product-image" href="store-product.php">
                    <img src="src/assets/images/product-16-xs.jpg" alt="When the last &#39;natural&#39;">
                </a>
                <div class="nk-product-cont">
                    <h3 class="nk-product-title h5"><a href="store-product.php">When the last &#39;natural&#39;</a></h3>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                    <div class="nk-gap-1"></div>
                    <div class="nk-product-price">€ 20.00</div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END: Most Popular -->
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