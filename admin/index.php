<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['roli_id'])) {

    if($_SESSION['roli_id'] == 1) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Dashboard | SteCord </title>
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
        <div id="body" class="active" style="background-image: url('../src/assets/images/white.jpg'); background-repeat: no-repeat; background-size: cover">
            <?php include 'src/components/navbarProfile.php'?>
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h1 class="d-flex justify-content-center"> Admin Panel &nbsp;<i class="fas fa-users-cog"></i></h1>
                    </div>
                    <br />
                    <div class="row" style="padding: 10px; color:black">
                    <div class="col-lg-6" style="background-color: rgba(255,255,255,0.2);">
                        <div class="page-title">
                            <h3> Inbox <i class="fas fa-inbox"></i></h3>
                        </div>
                        <div class="row" style="background-color: rgba(200,200,200,0.2);">
                            <div class="col-lg-12" style="border-top: 1px solid black;
                             border-left:1px solid black; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 10px">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <p> ID </p>
                                    </div>
                                    <div class="col-lg-5">
                                        <p> Email </p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p> Name </p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p> Message </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="border-bottom: 1px solid black; border-left:1px solid black;
                             border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding: 15px">
                                <div class="row">
                                    <?php
                                        require "../database/connect.php";
                                        $stmt = $connect->prepare("SELECT * FROM kontakt");
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while($row = $result->fetch_assoc()):
                                    ?>
                                    <div class="col-lg-1">
                                        <p> <?= $row['id'] ?> </p>
                                    </div>
                                    <div class="col-lg-5">
                                        <p> <?= $row['email'] ?> </p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p> <?= $row['emri'] ?> </p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p> <?= $row['mesazhi'] ?> </p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" style="background-color: rgba(255,255,255,0.2);">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-title">
                                    <h3> Newest Members <i class="fas fa-user-plus"></i></h3>
                                </div>
                                <div class="row" style="background-color: rgba(200,200,200,0.2);">
                                    <div class="col-lg-12" style="border-top: 1px solid black; border-right:1px solid black;
                                     border-left:1px solid black; border-top-left-radius: 10px; border-top-right-radius: 10px; padding: 10px">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <p> Email </p>
                                            </div>
                                            <div class="col-lg-2">
                                                <p> Nickname </p>
                                            </div>
                                            <div class="col-lg-2">
                                                <p> Profile pic </p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p> Date </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12" style="border-bottom: 1px solid black; border-left:1px solid black;
                                     border-right:1px solid black; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding: 15px">
                                        <div class="row">
                                            <?php
                                                require "../database/connect.php";
                                                $stmt = $connect->prepare("SELECT * FROM perdoruesi WHERE data_regj > '2021-09-01'");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while($row = $result->fetch_assoc()):
                                            ?>
                                            <div class="col-lg-5">
                                                <p> <?= $row['email'] ?> </p>
                                            </div>
                                            <div class="col-lg-2">
                                                <p> <?= $row['nickname'] ?> </p>
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="../<?= $row['foto'] ?>" alt="profile-pic" style="width: 100%;">
                                            </div>
                                            <div class="col-lg-3">
                                                <p> <?= $row['data_regj'] ?> </p>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
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
//nese perdoruesi nuk eshte admin ridrejtoje ne faqen baze pas kyqjes
else {
    header("Location: index.php");
}
}
//nese perdoruesi nuk eshte kyq ridrejtoje ne faqen e logimit
else {
    header("Location: login.php");
}
?>