<?php
session_start();
if(isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Settings </title>
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
                    <div class="page-title">
                        <h3>Page Settings</h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <?php
                                        $titulli = $logo = $favicon = $errorGen = "";
                                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                            include 'src/validate/updateSettings.php';
                                        }
                                    ?>
                                    <div class="col-md-6">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                        <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                                        <div class="mb-3">
                                            <label for="site-title" class="form-label">Site Title</label>
                                            <input type="text" name="titulli" class="form-control" value="<?php echo $titulli;?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Site Logo</label>
                                            <input class="form-control" name="logo" type="file" id="formFile1" value="<?php echo $logo;?>" required>
                                            <small class="text-muted">The image must have a maximum size of 1MB</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Favicon</label>
                                            <input class="form-control" name="favicon" type="file" id="formFile2" value="<?php echo $favicon;?>" required>
                                            <small class="text-muted">The image must have a maximum size of 1MB</small>
                                        </div>
                                        <div class="mb-3">
                                            <?php echo "<span style='color: red;'>$errorGen<span>";?>
                                        </div>
                                        <div class="mb-3 text-end">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
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