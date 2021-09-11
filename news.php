<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | News </title>
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
        
        <li><span>News</span></li>
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">

            <!-- START: Tabs  -->
            <div class="nk-tabs">
                <h3 class="nk-decorated-h-2"><span> Categories </span></h3>
                <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabs-1-1" role="tab" data-toggle="tab">FPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">Single</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Racing</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                        <?php
                            require "database/connect.php";
                            $conn = $connect->prepare("SELECT * FROM lajmet WHERE id = 1");
                            $conn->execute();
                            $res = $conn->get_result();

                            while($row = $res->fetch_assoc()):
                        ?>
                        <div class="nk-gap"></div>

                        <!-- START: FPS Tab -->
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="<?= $row['file']?>" class="nk-post-img">
                                <img src="<?= $row['foto']?>">
                                <span class="nk-post-categories">
                                    <span class="bg-main-1"><?= $row['kategoria']?></span>
                                </span>
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?= $row['data']?>
                            </div>
                            <div class="nk-post-text">
                                <p><?= $row['permbajtja']?></p>
                            </div>
                        </div>
                        <?php endwhile;?>

                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <div class="row vertical-gap">
                                <?php
                                    require "database/connect.php";
                                    $conn = $connect->prepare("SELECT * FROM lajmet LIMIT 5,1000");
                                    $conn->execute();
                                    $res = $conn->get_result();

                                    while($row = $res->fetch_assoc()):
                                ?>
                                <div class="col-lg-3 col-md-5">
                                    <a href="<?= $row['file']?>" class="nk-post-img">
                                        <img src="<?= $row['foto']?>">

                                        <span class="nk-post-categories">
                                            <span class="bg-main-1"><?= $row['kategoria']?></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?= $row['data']?>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?= $row['permbajtja']?></p>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                            <!-- END: FPS Tab -->
                            <div class="nk-gap"></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                        <?php
                            require "database/connect.php";
                            $conn = $connect->prepare("SELECT * FROM lajmet WHERE id = 2");
                            $conn->execute();
                            $res = $conn->get_result();

                            while($row = $res->fetch_assoc()):
                        ?>
                        <div class="nk-gap"></div>
                        <!-- START: Single Tab -->
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="<?= $row['file']?>" class="nk-post-img">
                                <img src="<?= $row['foto']?>">

                                <span class="nk-post-categories">
                                    <span class="bg-main-4"><?= $row['kategoria']?></span>
                                </span>
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?= $row['data']?>
                            </div>
                            <div class="nk-post-text">
                                <p><?= $row['permbajtja']?></p>
                            </div>
                        </div>
                        <?php endwhile;?>

                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <div class="row vertical-gap">
                                <?php
                                    require "database/connect.php";
                                    $conn = $connect->prepare("SELECT * FROM lajmet LIMIT 3,1000");
                                    $conn->execute();
                                    $res = $conn->get_result();

                                    while($row = $res->fetch_assoc()):
                                ?>
                                <div class="col-lg-3 col-md-5">
                                    <a href="<?= $row['file']?>" class="nk-post-img">
                                        <img src="<?= $row['foto']?>">
                                        <span class="nk-post-categories">
                                            <span class="bg-main-4"><?= $row['kategoria']?></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?= $row['data']?>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?= $row['permbajtja']?></p>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                        <!-- END: Single Tab -->
                        <div class="nk-gap"></div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                        <div class="nk-gap"></div>
                        <!-- START: Racing Tab -->
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <?php
                                require "database/connect.php";
                                $conn = $connect->prepare("SELECT * FROM lajmet WHERE id = 3");
                                $conn->execute();
                                $res = $conn->get_result();

                                while($row = $res->fetch_assoc()):
                            ?>
                            <a href="<?= $row['file']?>" class="nk-post-img">
                                <img src="<?= $row['foto']?>" alt="">
                                <span class="nk-post-categories">
                                    <span class="bg-main-3"><?= $row['kategoria']?></span>
                                </span>
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?= $row['data']?>
                            </div>
                            <div class="nk-post-text">
                                <p><?= $row['permbajtja']?></p>
                            </div>
                            <?php endwhile;?>
                        </div>

                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <div class="row vertical-gap">
                                <?php
                                require "database/connect.php";
                                $conn = $connect->prepare("SELECT * FROM lajmet WHERE kategoria = 'Racing' LIMIT 4,1000");
                                $conn->execute();
                                $res = $conn->get_result();

                                while($row = $res->fetch_assoc()):
                                ?>
                                <div class="col-lg-3 col-md-5">
                                    <a href="<?= $row['file']?>" class="nk-post-img">
                                        <img src="<?= $row['foto']?>" alt="">
                                        <span class="nk-post-categories">
                                            <span class="bg-main-3"><?= $row['kategoria']?></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="<?= $row['file']?>"><?= $row['titulli']?></a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?= $row['data']?>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?= $row['permbajtja']?></p>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                        <!-- END: Racing Tab -->
                        <div class="nk-gap"></div>
                    </div>
                </div>
            </div>
            <!-- END: Tabs -->
        </div>
        <?php include "src/components/aside.php";?>
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