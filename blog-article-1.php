<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SteCord | Blog Article </title>
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

    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
    
<div class="container">
    <div class="row vertical-gap">
        <?php
            require "database/connect.php";
            $conn = $connect->prepare("SELECT * FROM blog WHERE id = 1");
            $conn->execute();
            $res = $conn->get_result();

            while($row = $res->fetch_assoc()):
        ?>
        <div class="col-lg-8">
            <!-- START: Post -->
            <div class="nk-blog-post nk-blog-post-single">
                <!-- START: Post Text -->
                <div class="nk-post-text mt-0">
                    <div class="nk-post-img">
                        <img src="<?= $row['foto'] ?>" alt="">
                    </div>
                    <div class="nk-gap-1"></div>
                    <h1 class="nk-post-title h4"><?= $row['titulli'] ?></h1>
                    <div class="nk-post-by">
                        <img src="<?= $row['profile_pic'] ?>" class="rounded-circle" width="35">
                        by <?= $row['autori'] ?> in&nbsp; <span class="fa fa-calendar"></span> &nbsp;<?= $row['data'] ?>
                        <div class="nk-post-categories">
                            <span class="bg-main-1"><?= $row['kategoria'] ?></span>
                            <span class="bg-main-2">Adventure</span>
                        </div>
                    </div>
                    <div class="nk-gap"></div>
                    <p><?= $row['permbajtja'] ?></p>

                    <div class="nk-gap"></div>

                    <h3 class="h4"><?= $row['titulli2'] ?></h3>

                    <p><?= $row['permbajtja2'] ?></p>

                    <div class="nk-gap"></div>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=ohIUD15dypk"></div>
                    <p>Death Stranding Walkthrough Gameplay Part 1 includes a Review, Prologue and Campaign Mission 1 of the Death Stranding 2019
                    Single Player Campaign for PS4 Pro and PC at a later date. </p>
                </div>
                <!-- END: Post Text -->

                <div class="nk-gap-2"></div>

                <ul class="nk-breadcrumbs">
                    <li><span class="fa fa-angle-right"></span></li>
                </ul>

                <div class="nk-gap-2"></div>

                <!-- START: Comments -->
                <div id="comments"></div>
                <h3 class="nk-decorated-h-2"><span>Comments</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-comments">
                    <?php
                        require "database/connect.php";
                        $conn = $connect->prepare("SELECT * FROM blog_comments WHERE blog_id = 1");
                        $conn->execute();
                        $res = $conn->get_result();

                        while($row = $res->fetch_assoc()):
                    ?>
                    <!-- START: Comment -->
                    <div class="nk-comment">
                        <div class="nk-comment-meta">
                            <img src="<?= $row['perdoruesi_foto'] ?>" class="rounded-circle" width="35">
                            by <a href="#"><?= $row['perdoruesi_emri'] ?></a> in <?= $row['data'] ?>
                        </div>
                        <div class="nk-comment-text">
                            <p> <?= $row['permbajtja'] ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <!-- END: Comment -->
                </div>
                <!-- END: Comments -->

                <!-- START: Leave a Reply -->
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Leave</span> a Reply</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-reply">
                    <form action="#" class="nk-form" novalidate="novalidate">
                        <div class="row sm-gap vertical-gap">
                            <div class="col-md-4">
                                <input type="email" class="form-control required" name="email" placeholder="Email *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="name" placeholder="Name *">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" placeholder="Website">
                            </div>
                        </div>
                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="5" placeholder="Message *" aria-required="true"></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Post Comment</button>
                    </form>
                </div>
                <!-- END: Reply -->
            </div>
            <!-- END: Post -->
        </div>
        <?php endwhile; ?>

    <?php include"src/components/aside.php"; ?>
    </div>
</div>

<div class="nk-gap-2"></div>
    <?php include"src/components/footer.php"; ?>
</div>

<!-- START: Page Background -->
    <img class="nk-page-background-top" src="src/assets/images/bg-top-5.png" alt="">
    <img class="nk-page-background-bottom" src="src/assets/images/bg-bottom.png" alt="">
<!-- END: Page Background -->

<?php include "scripts.php";?>

</body>
</html>
