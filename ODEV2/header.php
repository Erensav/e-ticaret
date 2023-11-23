<?php 

include "../nedmin/baglantilar/baglan.php";


 
$ayarsor=$db->prepare("SELECT * FROM bilgiler WHERE web_id=:id");
$ayarsor->execute(array(
    "id"=> 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$ayarsor1=$db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=:id");
$ayarsor1->execute(array(
    "id"=> 0
));
$ayarcek1=$ayarsor1->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $ayarcek["web_title"] ?></title>
    <meta name="description" content="<?php echo $ayarcek["web_description"] ?>">
    <meta name="keywords" content="<?php echo $ayarcek["web_keyword"] ?>">
    <meta name="author" content="J<?php echo $ayarcek["web_author"] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cxc.css">
    <link rel="icon" href="img/logo.png">
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar bg-body-tertiary bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand mx-auto" href="index.php">
                <img src="img/logo.png" alt="Bootstrap" width="120" height="65">
            </a>
        </div>
    </nav>
    <nav class="navbar bg-body-tertiary bg-transparent">
        <div class="container">
            <a class="navbar-brand mx-auto" href="index.php">
                <img src="img/logo.png" alt="Bootstrap" width="120" height="65">
            </a>
        </div>
    </nav>
    <!--  ---------  -->
    <div class="container text-center ">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary bg-transparent">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><strong> Magaza ismi </strong> <small>Eren Savasir</small></a>
                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="nav-bar navbar-nav mx-auto">
                                <li class=" nav-item active">
                                    <a class="nav-link" aria-current="page" href="dasda.php"><strong> KADIN
                                        </strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="hakkimizda.php"><strong> ERKEK </strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><strong> Magaza ismi </strong></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="#"><strong> Magaza ismi</strong></a> 
                                </li>
                            </ul>
                            <ul class="nav-bar navbar-nav">
                                <li class="nav-item ">
                                    <a class="nav-link " href="login.php"><strong>GIRIS YAP</strong></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="signup.php"><strong>KAYIT OL</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    <!-- navbar bitti -->   