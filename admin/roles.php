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
    <title>User Roles</title>
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
                    <div class="page-title">
                        <h3> User Roles </h3>
                        <a href="users.php" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        <div id="myTab" role="tablist" class="nav">
                            <a href="#home" id="home-tab" data-bs-toggle="tab" role="tab" aria-controls="home" aria-selected="false" class="btn btn-sm btn-outline-primary float-start nav-link">
                            <i class="fas fa-plus-circle"></i> Add</a>
                        </div>
                    </div>
                    <!-- ADD ROLE -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">Add a Role</div>
                                    <div class="card-body">
                                        <h5 class="card-title">New role</h5>
                                        <?php
                                            $id = $roli = "";
                                            $errorID = $errorRoli = $errorGen = "";
                                            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                include 'src/validate/addRoli.php';
                                            }
                                        ?>
                                        <form accept-charset="utf-8" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                            <div class="row g-2">
                                                <div class="col">
                                                    <label for="name" class="form-label sr-only">ID</label>
                                                    <input name="id" type="number" placeholder="Role ID" class="form-control" value="<?php echo $id; ?>">
                                                    <br />
                                                    <?php echo "<span style='color: red;'>$errorID<span>";?>
                                                </div>
                                                <div class="col">
                                                    <label for="username" class="form-label sr-only">Role</label>
                                                    <input type="text" name="roli" placeholder="Roli" class="form-control" value="<?php echo $roli; ?>">
                                                    <br />
                                                    <?php echo "<span style='color: red;'>$errorRoli<span>";?>
                                                    <br />
                                                    <?php echo "<span style='color: red;'>$errorGen<span>";?>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: ADD Role -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Role ID</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require "../database/connect.php";
                                    $stmt = $connect->prepare("SELECT * FROM roli");
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while($row = $result->fetch_assoc()):
                                ?>
                                    <tr>
                                        <td title="id"><?= $row['id'] ?></td>
                                        <td><?= $row['roli'] ?></td>
                                        </div>
                                        <td class="text-end">
                                            <a href="updateRoli.php" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="src/validate/deleteRoliDB.php?id=<?=$row['id']?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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