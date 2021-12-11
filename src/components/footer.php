<!-- START: Footer -->
<footer class="nk-footer">
    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> Us</h4>
                    <div class="nk-widget-content">
                        <?php
                            $mesazhi = $errormesazhi = "";

                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                include 'src/validate/contactMessage.php';
                            }
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="nk-form" method="POST">
                            <textarea class="form-control required" name="mesazhi" rows="5" placeholder="Message *"><?php echo $mesazhi; ?></textarea>
                            <div class="nk-gap-1"></div>
                            <?php echo "<span class='error'>$errormesazhi</span>";?>
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            <?php
                                require "database/connect.php";
                                $conn = $connect->prepare("SELECT * FROM blog");
                                $conn->execute();
                                $res = $conn->get_result();

                                while($row = $res->fetch_assoc()):
                            ?>
                            <div class="col-lg-12">
                                <div class="nk-widget-post-2">
                                    <a href="<?= $row['blog_file']?>" class="nk-post-image">
                                        <img src="<?= $row['foto']?>" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="<?= $row['blog_file']?>"><?= $row['titulli']?></a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> <?= $row['data']?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <!-- START: Bottom Footer -->
    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                <p> Designed by: <a href="https://www.github.com/ardamazreku" target="_blank"> Arda Mazreku</a>.
                <script>
                    const date = new Date();
                    const year = date.getFullYear();
                </script>
                Copyright &copy; <script> document.write(year); </script>. All rights reserved. </p>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                    <li><a class="nk-social-github" href="www.github.com/ardamazreku"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-steam" href="https://steamcommunity.com/id/ardellem/"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="www.facebook.com/ardamazreku"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-twitter" href="www.twitter.com" target="_blank"><span class="fab fa-twitter"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Bottom Footer -->