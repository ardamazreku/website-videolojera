<?php
session_start();
if(isset($_SESSION['email'])) {
$email = $_SESSION['email'];
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
            $conn = $connect->prepare("SELECT * FROM blog WHERE id = 2");
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
                        <img src="<?= $row['foto'] ?>">
                    </div>
                    <div class="nk-gap-1"></div>
                    <h1 class="nk-post-title h4"><?= $row['titulli'] ?></h1>
                    <div class="nk-post-by">
                        <img src="<?= $row['profile_pic'] ?>" class="rounded-circle" width="35">
                        by <?= $row['autori'] ?> in&nbsp; <span class="fa fa-calendar"></span> &nbsp;<?= $row['data'] ?>

                        <div class="nk-post-categories">
                            <span class="bg-main-1"><?= $row['kategoria'] ?></span>
                        </div>

                    </div>
                    <div class="nk-gap"></div>
                    <p><?= $row['permbajtja'] ?></p>

                    <div class="nk-gap"></div>

                    <h3 class="h4"><?= $row['titulli2'] ?></h3>

                    <p><?= $row['permbajtja2'] ?></p>

                    <div class="nk-gap"></div>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=Wz8Vw5tOf5M&ab_channel=Marvel%27sMidnightSuns"></div>
                    <div class="nk-gap"></div>
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=PkqgCYxHSOk&ab_channel=Xbox"></div>

                    <div class="nk-gap-2"></div>
                    <p> HALO GETS A RELEASE DATE AND A SPECIAL EDITION CONSOLE <br>
                        This one actually leaked out a bit before the show, but it’s big news nonetheless:
                        Halo Infinite is finally launching on December 8th. The game was originally expected to launch last
                        year, serving as a big showcase for the Xbox Series X, but those plans were delayed in part due to the pandemic.
                        The new trailer, meanwhile, focuses on the story for the game’s multiplayer component.</p>
                    <div class="nk-gap"></div>
                </div>
                <!-- END: Post Text -->

                <!-- START: Comments -->
                <div id="comments"></div>
                <h3 class="nk-decorated-h-2"><span> Comments</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-comments">
                    <?php
                        require "database/connect.php";
                        $conn = $connect->prepare("SELECT * FROM blog_comments WHERE blog_id = 2");
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
                            <p><?= $row['permbajtja'] ?></p>
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
                    <?php
                        $komenti = $errorKoment = "";

                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            include 'src/validate/komentBlog.php';
                        }
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="nk-form" method="POST">
                        <textarea class="form-control required" name="komenti" rows="5" placeholder="Comment *"><?php echo $komenti; ?></textarea>
                        <div class="nk-gap-1"></div>
                        <?php echo "<span class='error'>$errorKoment</span>";?>
                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Post</button>
                    </form>
                </div>
                <!-- END: Reply -->
            </div>
            <!-- END: Post -->
        </div>
        <?php endwhile; ?>

    <?php include "src/components/aside.php"; ?>
    </div>
</div>

<div class="nk-gap-2"></div>
    <?php include "src/components/footer.php"; ?>
</div>

<?php include"scripts.php";?>
</body>
</html>
<?php
}
else {
    echo'<script> location.replace("login.php"); </script>';
}
?>
