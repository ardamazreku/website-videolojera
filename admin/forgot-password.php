<?php
session_start();

if(!isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot Password</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="carousel-control-next-icon" src="../public/favicon.png" alt="">
                    </div>
                    <h6 class="mb-4 text-muted">Reset Password</h6>
                    <?php
                        $email = $newPass = "";

                        $errorEmail = $errorPass = $errorPassTooltip = "";
                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            include 'src/validate/resetPassword.php';
                        }
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter email address" value="<?php echo $email; ?>" required>
                            <?php echo "<span style='color: red'>$errorEmail<span>";?>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label">New Password</label>
                            <input name="newPass" type="password" class="form-control" placeholder="Enter new password" value="<?php echo $newPass; ?>">
                            <?php echo "<span style='color: red'>$errorPass<span>";?>
                            <?php echo "<span style='color: red'>$errorPassTooltip<span>";?>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" type="submit">Reset Password</button>
                    </form>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}

else {
    //nese perdoruesi eshte i kyqur, atehere ridrejtoje ne faqen baze pas kyqjes
    header("Location: login.php");
}
?>