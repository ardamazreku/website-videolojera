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
    <title>Sign up | Admin Panel</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php

        $email = "";

        $errorGen = $errorEmail =$errorPassword= $errorPassTooltip =$errorEmri = $errorMbiemri = $errorNickname = $errorFoto = $errorConfirmPass = "";

        $email = $pass = $confirmpass = $emri = $mbiemri = $nickname = $foto = $data = "";

        //kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //POST
            include 'src/validate/SignupValidate.php';
        }
        ?>
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="carousel-control-next-icon" src="../public/favicon.png" alt="">
                    </div>
                    <h6 class="mb-4 text-muted">Create new account</h6>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="emri" class="form-control" placeholder="Enter Name" value="<?php echo $emri; ?>" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Surname</label>
                            <input type="text" name="mbiemri" class="form-control" placeholder="Enter Surname" value="<?php echo $mbiemri; ?>" required>
                        </div>
                        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email adress</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email;?>" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $pass;?>">
                            <?php echo "<span style='color: red;'>$errorPassword<span>";?>
                            <?php echo "<span style='color: red;'>$errorPassTooltip<span>";?>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Confirm Password</label>
                            </label>
                            <input type="password" class="form-control" name="confirmpass" placeholder="Enter password again" value="<?php echo $confirmpass; ?>">
                            <br />
                            <?php echo "<span style='color: red;'>$errorConfirmPass<span>";?>
                            <input type="hidden" name="data_regj"/ value ="<?php echo $data; ?>">
                            <?php echo "<span style='color: red'>$errorGen<span>";?>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4" type="submit">Register</button>
                    </form>
                    <p class="mb-0 text-muted">Already have an account? <a href="login.php">Log in</a></p>
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
    header("Location: index.php");
}
?>