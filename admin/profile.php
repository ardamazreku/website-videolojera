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
                <?php
                    require "../database/connect.php";
                    $stmt = $connect->prepare("SELECT * FROM perdoruesi WHERE email='$email'");
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while($row = $result->fetch_assoc()):
                ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <h5 class="card-title"> Personal Information </h5>
                            <form accept-charset="utf-8">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 form-label" for="email">Your email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" placeholder="<?= $row['email'] ?>" class="form-control bg-light">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 form-label" for="password">Your Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" value ="<?= $row['password'] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <a href="settings.php"><input value="Reset your password" class="btn btn-primary"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
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