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
    <title>Update Role</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <?php include 'src/components/navbar.php'?>
        <div id="body" class="active">
            <?php include 'src/components/navbarProfile.php'?>
            <div class="content">
                <div class="container">
                    <!-- START: ADD Role -->
                            <div class="col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">Update a Role</div>
                                    <div class="card-body">
                                    <?php
                                            $roli = $errorRoli = "";
                                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                include 'src/validate/updateRoliDB.php';
                                            }
                                    ?>
                                        <form accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                            <div class="row g-2">
                                                <div class="col">
                                                    <select class="form-select" name="id">
                                                        <option selected> Select ID </option>
                                                        <?php
                                                            require "../database/connect.php";
                                                            $query = mysqli_query($connect, "SELECT id FROM roli");

                                                            //tani na nevojitet te i marrim keto rreshta rezultat nga query i ekzekutuar
                                                            //meqe rezultati permban disa rreshta si rezultat qe kthehen nga query i ekzekutuar me larte, atehere duhet te iterojme ne secilin rresht me nje cikel
                                                            while($row = @mysqli_fetch_assoc($query)) {
                                                            	$id = $row['id'];

                                                            	//vendosja e te dhenave te marra ne etiketat <option> ne HTML
                                                            	echo "<option value = '$id'> $id </option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="username" class="form-label sr-only">Role</label>
                                                    <input type="text" name="newRoli" placeholder="New role" class="form-control" value="<?php echo $roli; ?>">
                                                    <?php echo "<span style='color: red;'>$errorRoli<span>";?>
                                                    <br />
                                                </div>
                                                <div class="col">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    <!-- END: ADD Role -->
                </div>
            </div>
        </div>
    </div>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/datatables/datatables.min.js"></script>
        <script src="assets/js/initiate-datatables.js"></script>
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