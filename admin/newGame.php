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
    <title> New Game </title>
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
                        <div class="col-md-12 col-lg-12">
                            <div class="page-title">
                                <h3>New Game</h3>
                            </div>
                                <?php
                                    $titulli = $permbajtja = $cmimi = $file = $kategoria = $kategoriaelojes = $link = "";
                                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                            include 'src/validate/postGame.php';
                                        }
                                ?>
                                <div class="col-md-6">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                                    <div class="mb-3">
                                                        <label for="game-title" class="form-label">Title</label>
                                                        <input type="text" name="titulli" class="form-control" value="<?php echo $titulli;?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="game-description" class="form-label">Content</label>
                                                        <textarea cols="30" rows="10" name="permbajtja" class="form-control" required><?php echo $permbajtja;?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="game-price" class="form-label">Price</label>
                                                        <input type="text" name="cmimi" value="<?php echo $cmimi;?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="game-category" class="form-label">Category</label>
                                                        <input type="text" name="kategoria" class="form-control" value="<?php echo $kategoria;?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="game-category2" class="form-label">Category of the game</label>
                                                        <input type="text" name="kategoriaelojes" class="form-control" value="<?php echo $kategoriaelojes;?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="formFile" class="form-label" required>Upload a photo</label>
                                                      <input class="form-control" type="file" id="formFile" name="file" value="<?php echo $file; ?>">
                                                    </div><div class="mb-3">
                                                      <label for="game-link" class="form-label" required>Upload a link</label>
                                                      <input class="form-control" type="text" name="link" value="<?php echo $link; ?>">
                                                    </div>
                                                    <div class="mb-3 text-end">
                                                        <button class="btn btn-success" type="submit"> Post </button>
                                                    </div>
                                    </form>
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