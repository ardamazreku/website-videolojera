<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require "database/connect.php";
        $stmt = $connect->prepare("SELECT * FROM webapp;");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()):
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $row['titulli'] ?></title>
    <meta name="description" content="SteCord - Gaming community and store">
    <meta name="keywords" content="game, gaming, Bootstrap, premium">
    <meta name="author" content="Arda Mazreku">
    <link rel="icon" type="image/png" href="<?= $row['favicon'] ?>">
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
    <?php endwhile; ?>
</head>
<body>
<?php include "src/components/navbar.php";?>
<div class="nk-main">

<div class="nk-gap-2"></div>

<div class="container">

    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
        <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM lajmet");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
        ?>
        <div class="nk-image-slider-item">
            <img src="<?= $row['foto']?>" alt="" class="nk-image-slider-img" data-thumb="<?= $row['foto']?>">
            <div class="nk-image-slider-content">
                <h3 class="h4"><?= $row['titulli']?></h3>
                <p class="text-white"><?= $row['permbajtja']?></p>
                <a href="<?= $row['file']?>" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
            </div>
        </div>
        <?php endwhile;?>
    </div>
    <!-- END: Image Slider -->

    <!-- START: Categories -->
    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="src/assets/images/icon-mouse.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="store.php">PC</a></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="src/assets/images/icon-gamepad.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="store.php">PS & XBOX </a></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="src/assets/images/icon-nintendo.png" width="60%" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="store.php"> NINTENDO </a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Categories -->

    <!-- START: Blog Posts -->
    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2">
        <span>
            <span class="text-main-1">Latest</span> Blog Posts
        </span>
    </h3>
    <div class="nk-gap"></div>
    <div class="nk-blog-grid">
        <div class="row">
            <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM blog");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
            ?>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="nk-blog-post">
                    <a href="<?= $row['blog_file']?>" class="nk-post-img">
                        <img src="<?= $row['foto']?>">
                        <span class="nk-post-categories">
                            <span class="bg-main-5"><?= $row['kategoria']?></span>
                        </span>
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.php"><?= $row['titulli']?></a></h2>
                    <div class="nk-post-text">
                        <p><?= $row['permbajtja'] ?>..</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="<?= $row['blog_file']?>" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right">
                    <img src="<?= $row['profile_pic'] ?>" class="rounded-circle" width="30">
                        &nbsp; Written By: <?=$row['autori']?> &nbsp; &nbsp;
                        <span class="fa fa-calendar"></span><?= $row['data']?>
                    </div>
                </div><div class="nk-gap-2"></div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
    <!-- END: Post -->

    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Latest Forum Posts -->
            <div class="nk-blog-grid">
                <div class="row">
                    <?php
                        if(isset($_SESSION['email'])) {
                    ?>
                    <?php
                        require "database/connect.php";
                        $conn = $connect->prepare("SELECT * FROM forum WHERE id = 3");
                        $conn->execute();
                        $res = $conn->get_result();

                        while($row = $res->fetch_assoc()):
                    ?>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Forum Posts</span></h3>
                    <div class="col-md-12 col-lg-12">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="<?= $row['file']?>" class="nk-post-img">
                                <img src="<?= $row['attachment']?>">
                            </a>
                            <div class="nk-gap"></div>
                            <div class="nk-post-by">
                                <img src="<?= $row['profile_pic']?>" class="rounded-circle" width="35">
                                by <a href="#"><?= $row['emri']?></a> in <?= $row['data_postim']?>
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p><?= $row['permbajtja']?></p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="<?= $row['file']?>" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>
                        <!-- END: Post -->
                    </div>
                    <?php endwhile;?>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- END: Latest Posts -->

            <!-- START: Latest News -->
            <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2">
                <span>
                    <span class="text-main-1">Latest</span> News
                </span>
            </h3>
            <div class="nk-gap"></div>

            <div class="nk-news-box">
                <div class="nk-news-box-list">
                    <div class="nano">
                        <div class="nano-content">
                            <?php
                                require "database/connect.php";
                                $conn = $connect->prepare("SELECT * FROM lajmet");
                                $conn->execute();
                                $res = $conn->get_result();

                                while($row = $res->fetch_assoc()):
                            ?>
                                <div class="nk-news-box-item nk-news-box-item-active">
                                    <div class="nk-news-box-item-img">
                                        <img src="<?= $row['foto']?>" alt="">
                                    </div>
                                    <img src="<?= $row['foto']?>" alt="" class="nk-news-box-item-full-img">
                                    <h3 class="nk-news-box-item-title"><?=$row['titulli'] ?></h3>

                                    <span class="nk-news-box-item-categories">
                                        <span class="bg-main-5"><?=$row['kategoria']?></span>
                                    </span>
                                    <div class="nk-news-box-item-text">
                                        <p><?=$row['permbajtja']?></p>
                                    </div>
                                    <a href="<?= $row['file']?>" class="nk-news-box-item-url">Read More</a>
                                    <div class="nk-news-box-item-date">
                                        Written By: <?=$row['autori']?> &nbsp; &nbsp; &nbsp;
                                        <span class="fa fa-calendar"></span> &nbsp; <?=$row['data']?>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>

                <div class="nk-news-box-each-info">
                    <div class="nano">
                        <div class="nano-content">
                            <!-- There will be inserted info about selected news-->
                            <div>
                                <img alt="" class="nk-news-box-item-full-img">
                                <span class="nk-news-box-item-categories">
                            <span class="bg-main-5"></span>
                        </span>
                            </div>
                            <h3 class="nk-news-box-item-title"></h3>
                            <div class="nk-news-box-item-text">
                                <p></p>
                            </div>
                            <a href="blog-article.php" class="nk-news-box-item-more">Read More</a>
                            <div class="nk-news-box-item-date">
                                <span class="fa fa-calendar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Latest News -->

            <!-- START: Best Selling -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <?php
                    require "database/connect.php";
                    $conn = $connect->prepare("SELECT * FROM store WHERE kategoriaelojes = 'featured_games';");
                    $conn->execute();
                    $res = $conn->get_result();

                    while($row = $res->fetch_assoc()):
                ?>
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store.php" target="_blank">
                            <img src="<?= $row['foto']?>" alt="">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store.php" target="_blank"><?= $row['emri']?></a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="3">
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
                            <div class="nk-product-price"><?= $row['cmimi']?> €</div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!-- END: Best Selling -->
    </div>
    <?php include"src/components/aside.php"; ?>
</div>
</div>
</div>

<div class="nk-gap-4"></div>

<?php include"src/components/footer.php"; ?>
</div>

<!-- START: Page Background -->
    <img class="nk-page-background-top" src="src/assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->
<?php include "scripts.php";?>
</body>
</html>