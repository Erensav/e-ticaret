<?php
ob_start();
session_start();


include "../admin/baglantilar/baglan.php";



$ayarsor = $db->prepare("SELECT * FROM bilgiler WHERE web_id=:id");
$ayarsor->execute(array(
    "id" => 0
));
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);

$ayarsor1 = $db->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=:id");
$ayarsor1->execute(array(
    "id" => 0
));
$ayarcek1 = $ayarsor1->fetch(PDO::FETCH_ASSOC);





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
    <link rel="icon" href="../web site/img/logo.png">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        .img-container {
            position: relative;
            overflow: hidden;
        }

        .img-container img {
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease;
        }

        .img-container:hover img {
            transform: scale(1.1);
           
        }

        
        .dropbtn {
            
            color: black;
            padding:15px;
            
            border: none;
            
        }

        
        .dropdown {
            position: relative;
            display: inline-block;
        }

        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        
        .dropdown:hover .dropdown-content {
            display: block;
            
        }

        
        .dropdown:hover .dropbtn {
            background-color: #ffff93;
        }
    </style>

    <nav class="navbar bg-body-tertiary bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand mx-auto" href="Anasayfa2.php">
                <img src="img/logo.png" alt="Bootstrap" width="120" height="65">
            </a>
        </div>
    </nav>
    <nav class="navbar bg-body-tertiary bg-transparent">
        <div class="container ">
            <a class="navbar-brand mx-auto" href="Anasayfa2.php">
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
                        <a class="navbar-brand" href="Anasayfa2.php"><strong> <?php echo $ayarcek["web_title"] ?> </strong> </a>
                        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="nav-bar navbar-nav mx-auto">
                                <li class=" nav-item">
                                    <a class="nav-link" aria-current="page" href="urunler.php"><strong> KADIN </strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="urunler.php"><strong> ERKEK </strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="hakkimizda.php"><strong> Hakkımızda </strong></a>
                                </li>
                                
                            </ul>

                            


                            <ul class="nav-bar navbar-nav">
                                <?php if (isset($_SESSION['arayuzgiris'])) { ?>
                                    <div class="dropdown">
                                        <button class="dropbtn"><strong>
                                            Hosgeldin <?php echo $_SESSION['kullanici_adsoyad'] ?></strong>
                                            </button>
                                            <div class="dropdown-content">
                                                <a class="dropdown-item active" href="webhesabim.php"><strong>Hesabım</strong></a>                                                
                                                <a class="dropdown-item" href="logout.php"><strong>Cikis Yap</strong></a>
                                            </div>

                                    </div>
                                <?php } else { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php"><strong>Giriş Yap/Kayıt Ol</strong></a>
                                    </li>
                                <?php } ?>
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