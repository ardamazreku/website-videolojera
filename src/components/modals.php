<!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->

<!-- START: Login Modal -->
<?php

$email = "";

$errorGen = $errorEmail =$errorPassword= "";

$email = $pass = "";

//kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //POST
    include '../validate/loginValidate.php';
}
?>
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            Use email and password:
                            <div class="nk-gap"></div>
                            <input type="email" value="<?php echo $email; ?>" name="email" class="form-control" placeholder="Email">
                            <br><?php echo "<span class='error'>$errorEmail<span>";?>
                            <div class="nk-gap"></div>
                            <input type="password" value="<?php echo $pass; ?>" name="password" class="required form-control" placeholder="Password">
                            <br><?php echo "<span class='error'>$errorPassword<span>";?>
                        </div>
                    </div>
                    <?php echo "<span class='error'>$errorGen<span>";?>
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <input type="submit" name="register" value="SIGN IN" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">
                            <br>
                            <b><a href ="#" data-toggle="modal" data-target="#modalSignup">Not a member? Sign up! </a></b>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

<!-- START: Sign Up Modal -->
<div class="nk-modal modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> Up </h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            Name:
                            <div class="nk-gap"></div>
                            <input type="text" value="" name="name" class=" form-control" placeholder="Name">
                            <br> Surname:
                            <div class="nk-gap"></div>
                            <input type="text" value="" name="surname" class=" form-control" placeholder="Surname">
                            <br> Email:
                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">
                            <br> Password:
                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-12">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block"> Register </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->