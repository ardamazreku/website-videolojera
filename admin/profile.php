<?php
session_start();
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Account </title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<?php include 'src/components/navbar.php'?>
    <div id="body" class="active">
        <?php include 'src/components/navbarProfile.php'?>
        <div class="content">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <h5 class="card-title"> Personal Information </h5>
                            <form accept-charset="utf-8">
                            <?php
                                require "../database/connect.php";
                                $stmt = $connect->prepare("SELECT * FROM perdoruesi WHERE email='$email'");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                while($row = $result->fetch_assoc()):
                            ?>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 form-label" for="email">Your email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" placeholder="<?= $row['email'] ?>" class="form-control bg-light">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-lg-2 form-label" for="password">Your name</label>
                                    <div class="col-sm-10 col-lg-5">
                                        <input type="text" name="emri" value ="<?= $row['emri'] ?>" class="form-control">
                                    </div>
                                    <div class="col-sm-10 col-lg-5">
                                        <input type="text" name="mbiemri" value ="<?= $row['mbiemri'] ?>" class="form-control">
                                    </div>
                                </div>
                            </form>
                            <?php endwhile; ?>
                            <h5 class="card-title"> Reset your password </h5>
                            <?php
                                $errorPass = $errorConfirmPass = $errorGen = $errorPassTooltip = "";
                                $pass = $newPass = "";
                                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    include 'src/validate/passUpdate.php';
                                }
                            ?>
                            <form accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 form-label" for="email">Current Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="currentPassword" placeholder="Current Password" value="<?php echo $pass;?>" class="form-control">
                                        <small class="form-text"> Type your current password. </small>
                                        <br>
                                        <?php echo "<span style='color: red;'>$errorPass<span>";?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 form-label" for="password">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="newPassword" placeholder="New Password" value="<?php echo $newPass;?>" class="form-control">
                                        <small class="form-text"> Type your new password. </small>
                                        <br>
                                        <?php echo "<span style='color: red;'>$errorConfirmPass<span>";?>
                                        <?php echo "<span style='color: red;'>$errorPassTooltip<span>";?>
                                        <?php echo "<span style='color: red;'>$errorGen<span>";?>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <input type="submit" class="btn btn-primary" value="Reset Password">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chartsjs/chart.min.js"></script>
<script src="assets/js/dashboard-charts.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
<?php
}
else {
    echo'<script> location.replace("login.php"); </script>';
}
?>