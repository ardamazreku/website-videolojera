<?php
session_start();

if(isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Community and More </title>
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
        
        <li><a href="store.php">Store</a></li>

        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="store-catalog.php">Action Games</a></li>

        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Just then her head </span></li>
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <div class="nk-store-product">
                <div class="row vertical-gap">
                    <div class="col-md-6">
                        <!-- START: Product Photos -->
                        <div class="nk-popup-gallery">
                            <div class="nk-gallery-item-box">
                                <a href="src/assets/images/product-6.jpg" class="nk-gallery-item" data-size="1200x554">
                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                    <img src="src/assets/images/product-6-lg.jpg" alt="">
                                </a>
                            </div>

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap sm-gap">
                                <div class="col-6 col-md-4">
                                    <div class="nk-gallery-item-box">
                                        <a href="src/assets/images/product-7.jpg" class="nk-gallery-item" data-size="622x942">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="src/assets/images/product-7-square.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nk-gallery-item-box">
                                        <a href="src/assets/images/product-8.jpg" class="nk-gallery-item" data-size="1920x907">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="src/assets/images/product-8-square.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nk-gallery-item-box">
                                        <a href="src/assets/images/product-9.jpg" class="nk-gallery-item" data-size="1500x750">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="src/assets/images/product-9-square.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Product Photos -->
                    </div>
                    <div class="col-md-6">

                        <h2 class="nk-product-title h3">Just then her head </h2>

                        <select class="form-control">
                            <option value="" disabled selected>Select Platform</option>
                            <option value="ps4">PS4</option>
                            <option value="xbox">Xbox 1</option>
                            <option value="pc">PC</option>
                        </select>

                        <div class="nk-product-description">
                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone; yesterday I was at home, in the sweet company of a sister, whom I shall ever, ever cherish! I was awakened at daybreak by the charwoman, and having arrived at the inn, was at first placed inside the coach. But, when we got to a place called Leakington. Now the races of these two have been for some ages utterly extinct.</p>
                        </div>

                        <!-- START: Add to Cart -->
                        <div class="nk-gap-2"></div>
                        <form action="#" class="nk-product-addtocart">
                            <div class="nk-product-price">€ 32.00</div>
                            <div class="nk-gap-1"></div>
                            <div class="input-group">
                                <input type="number" class="form-control" value="1" min="1" max="21">
                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Add to Cart</button>
                            </div>
                        </form>
                        <div class="nk-gap-3"></div>
                        <!-- END: Add to Cart -->

                        <!-- START: Meta -->
                        <div class="nk-product-meta">
                            <div><strong>SKU</strong>: 300-200-503</div>
                            <div><strong>Categories</strong>: <a href="#">online</a>, <a href="#">FPS</a>, <a href="#">MMO</a>, <a href="#">Action games</a></div>
                            <div><strong>Tags</strong>: <a href="#">blizzard</a>, <a href="#">action</a>, <a href="#">MMO</a></div>
                        </div>
                        <!-- END: Meta -->
                    </div>
                </div>

                <!-- START: Share -->
                <div class="nk-gap-2"></div>
                <div class="nk-post-share">
                    <span class="h5">Share Product:</span>
                    <ul class="nk-social-links-2">
                        <li><span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook"><span class="fab fa-facebook"></span></span></li>
                        <li><span class="nk-social-google-plus" title="Share page on Google+" data-share="google-plus"><span class="fab fa-google-plus"></span></span></li>
                        <li><span class="nk-social-twitter" title="Share page on Twitter" data-share="twitter"><span class="fab fa-twitter"></span></span></li>
                        <li><span class="nk-social-pinterest" title="Share page on Pinterest" data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>

                        <!-- Additional Share Buttons
                            <li><span class="nk-social-linkedin" title="Share page on LinkedIn" data-share="linkedin"><span class="fab fa-linkedin"></span></span></li>
                            <li><span class="nk-social-vk" title="Share page on VK" data-share="vk"><span class="fab fa-vk"></span></span></li>
                        -->
                    </ul>
                </div>
                <!-- END: Share -->

                <div class="nk-gap-2"></div>
                <!-- START: Tabs -->
                <div class="nk-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab-description" role="tab" data-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Reviews (3)</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- START: Tab Description -->
                        <div role="tabpanel" class="tab-pane fade show active" id="tab-description">
                            <div class="nk-gap"></div>
                            <strong class="text-white">Release Date: 24/05/2018</strong>
                            <div class="nk-gap"></div>
                            <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday.	The word was appropriate to the moment. My mother was so much worse that Peggotty, coming in with the teaboard and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner if there had been light enough, - conveyed her upstairs to her own room with all speed; and immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in the house, unknown to my mother, as a special messenger in case of emergency, to fetch the nurse and doctor.</p>

                            <div class="nk-product-info-row row vertical-gap">
                                <div class="col-md-5">
                                    <div class="nk-product-pegi">
                                        <div class="nk-gap"></div>
                                        <img src="src/assets/images/pegi-icon.jpg" alt="">
                                        <div class="nk-product-pegi-cont">
                                            <strong class="text-white">Pegi Rating:</strong>
                                            <div class="nk-gap"></div>
                                            Suitable for people aged 12 and over.
                                        </div>
                                        <div class="nk-gap"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="nk-gap"></div>
                                    <strong class="text-white">Genre:</strong>
                                    <div class="nk-gap"></div>
                                    TBD
                                    <div class="nk-gap"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="nk-gap"></div>
                                    <strong class="text-white">Customer Rating:</strong>
                                    <div class="nk-gap"></div>
                                    <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                                    <div class="nk-gap"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Tab Description -->

                        <!-- START: Tab Reviews -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                            <div class="nk-gap-2"></div>
                            <!-- START: Reply -->
                            <h3 class="h4">Add a Review</h3>
                            <div class="nk-reply">
                                <form action="#" class="nk-form">
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" name="name" placeholder="Name *">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" name="title" placeholder="Title *">
                                        </div>
                                    </div>
                                    <div class="nk-gap-1"></div>
                                    <textarea class="form-control required" name="message" rows="5" placeholder="Your Review *" aria-required="true"></textarea>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-rating">
                                        <input type="radio" id="review-rate-5" name="review-rate" value="5">
                                        <label for="review-rate-5">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-4" name="review-rate" value="4">
                                        <label for="review-rate-4">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-3" name="review-rate" value="3">
                                        <label for="review-rate-3">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-2" name="review-rate" value="2">
                                        <label for="review-rate-2">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-1" name="review-rate" value="1">
                                        <label for="review-rate-1">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>
                                    </div>
                                    <button class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right">Submit</button>
                                </form>
                            </div>
                            <!-- END: Reply -->

                            <div class="clearfix"></div>
                            <div class="nk-gap-2"></div>
                            <div class="nk-comments">
                                <!-- START: Review -->
                                <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="src/assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"> by <a href="#">Witch Murder</a> in 20 September, 2018
                                        <div class="nk-review-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>Upon replenish great rule. Were tree, given day him night Fruit it moveth all. First they're creature seasons and creature fill a it have fifth, their own subdue brought above divided.</p>

                                        <p>Behold it set, seas seas and meat divided Moveth cattle forth evening above moveth so, signs god a fruitful his after called that whose.</p>
                                    </div>
                                </div>
                                <!-- END: Review -->
                                <!-- START: Review -->
                                <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="src/assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle" width="35"> by <a href="#">Hitman</a> in 14 Jule, 2018
                                        <div class="nk-review-rating" data-rating="0.5"> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p> I was awakened at daybreak by the charwoman, and having arrived at the inn, was at first placed inside the coach. :(</p>
                                    </div>
                                </div>
                                <!-- END: Review -->
                                <!-- START: Review -->
                                <div class="nk-comment">
                                    <div class="nk-comment-meta">
                                        <img src="src/assets/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="#">Wolfenstein</a> in 27 June, 2018
                                        <div class="nk-review-rating" data-rating="3.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p>Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.</p>
                                    </div>
                                </div>
                                <!-- END: Review -->
                            </div>
                        </div>
                        <!-- END: Tab Reviews -->

                    </div>
                </div>
                <!-- END: Tabs -->
            </div>

            <!-- START: Related Products -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Related</span> Products</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                
                
                <div class="col-md-6">
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
                
                
                <div class="col-md-6">
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
                
                
                <div class="col-md-6">
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
                
                
                <div class="col-md-6">
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
                
                
                <div class="col-md-6">
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
                
                
                <div class="col-md-6">
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
            <!-- END: Related Products -->
        </div>

        <div class="col-lg-4">
            <!-- START: Aside -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
                    <div class="nk-widget-content">
                        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type something...">
                                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Category</span> Menu</span></h4>
                    <div class="nk-widget-content">
                        <ul class="nk-widget-categories">
                            <li><a href="#">RTS</a></li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">RPG</a></li>
                            <li><a href="#">MMO</a></li>
                            <li><a href="#">MOBA</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Indie</a></li>
                            <li><a href="#">Strategy</a></li>
                            <li><a href="#">Racing</a></li>
                            <li><a href="#">Simulator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nk-widget nk-widget-highlighted">
                    <h4 class="nk-widget-title"><span><span class="text-main-1">Price</span> Filter</span></h4>
                    <div class="nk-widget-content">
                        <div class="nk-input-slider">
                            <input
                                type="text"
                                name="price-filter"
                                data-slider-min="0"
                                data-slider-max="1800"
                                data-slider-step="1"
                                data-slider-value="[200, 1200]"
                                data-slider-tooltip="hide"
                            >
                            <div class="nk-gap"></div>
                            <div>
                                <div class="text-white mt-4 float-left">
                                    PRICE:
                                    <strong class="text-main-1">€ <span class="nk-input-slider-value-0"></span></strong>
                                    -
                                    <strong class="text-main-1">€ <span class="nk-input-slider-value-1"></span></strong>
                                </div>
                                <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white float-right">Apply</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
</div>

<div class="nk-gap-2"></div>

<?php include"src/components/footer.php"; ?>

</div>

<!-- START: Page Background -->
    <img class="nk-page-background-top" src="src/assets/images/bg-top-4.png" alt="">
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
<?php
}
else {
    echo'<script> alert("You have to log in to view store products!"); 
         location.replace("login.php"); </script>';
}
?>