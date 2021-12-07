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
    <title> Posts | SteCord </title>
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
                                <h3>All Posts</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Blog Posts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">News Posts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="forum-tab" data-bs-toggle="tab" href="#forum" role="tab" aria-controls="forum" aria-selected="false">Forum Posts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="game-tab" data-bs-toggle="tab" href="#game" role="tab" aria-controls="game" aria-selected="false">Games</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p> ID </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Author </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Title </p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p> Content </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Post pic </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Date </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Delete </p>
                                                </div>
                                            </div>
                                            <?php
                                                require "../database/connect.php";
                                                $stmt = $connect->prepare("SELECT * FROM blog");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while($row = $result->fetch_assoc()):
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p><?= $row['id'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p><?= $row['autori'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['titulli'] ?></p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p><?= $row['permbajtja'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="../<?= $row['foto'] ?>" style="width:100%; height: auto" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['data'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <a href="src/validate/deleteBlog.php?id=<?=$row['id']?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>

                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p>ID</p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Author </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Title </p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p> Content </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Post pic </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Date </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Delete </p>
                                                </div>
                                            </div>
                                            <?php
                                                require "../database/connect.php";
                                                $stmt = $connect->prepare("SELECT * FROM lajmet");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while($row = $result->fetch_assoc()):
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p><?= $row['id'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p><?= $row['autori'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['titulli'] ?></p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p><?= $row['permbajtja'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="../<?= $row['foto'] ?>" style="width:100%; height: auto" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['data'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <a href="src/validate/deleteNews.php?id=<?=$row['id']?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>

                                        <div class="tab-pane fade active show" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p> ID </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Author </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Title </p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p> Content </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Post pic </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Date </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Delete </p>
                                                </div>
                                            </div>
                                            <?php
                                                require "../database/connect.php";
                                                $stmt = $connect->prepare("SELECT * FROM forum");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while($row = $result->fetch_assoc()):
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p><?= $row['id'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p><?= $row['emri'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['titulli'] ?></p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p><?= $row['permbajtja'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="../<?= $row['attachment'] ?>" style="width:100%; height: auto" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['data_postim'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <a href="src/validate/deleteBlog.php?id=<?=$row['id']?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>

                                        <div class="tab-pane fade" id="game" role="tabpanel" aria-labelledby="game-tab">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p>ID</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Name </p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p> Content </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Price </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Post pic </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p> Date </p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p> Delete </p>
                                                </div>
                                            </div>
                                            <?php
                                                require "../database/connect.php";
                                                $stmt = $connect->prepare("SELECT * FROM store");
                                                $stmt->execute();
                                                $result = $stmt->get_result();
                                                while($row = $result->fetch_assoc()):
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <p><?= $row['id'] ?></p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['emri'] ?></p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p><?= $row['permbajtja'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <p><?= $row['cmimi'] ?> €</p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="../<?= $row['foto'] ?>" style="width:100%; height: auto" />
                                                </div>
                                                <div class="col-lg-2">
                                                    <p><?= $row['data'] ?></p>
                                                </div>
                                                <div class="col-lg-1">
                                                    <a href="src/validate/deleteGame.php?id=<?=$row['id']?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                                </div>
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