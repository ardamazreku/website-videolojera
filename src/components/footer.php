<!-- START: Footer -->
<footer class="nk-footer">
    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> Us</h4>
                    <div class="nk-widget-content">
                        <form action="ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
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
                <p> Designed by: <a href="https://www.github.com/ardamazreku"> Arda Mazreku</a>.
                Copyright &copy; 2021. All rights reserved.</p>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
                    <li><a class="nk-social-github" href="www.github.com/ardamazreku"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-steam" href="www.steam.com"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="www.facebook.com"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-twitter" href="www.twitter.com" target="_blank"><span class="fab fa-twitter"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Bottom Footer -->