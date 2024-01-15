<?php
ob_start();
session_start();
require "../admin/baglantilar/baglan.php";

if (isset($_POST['arayuzkayit'])) {
    $username = $_POST['kullanici_adsoyad'];
    $email = $_POST['kullanici_mail'];
    $password = md5($_POST['kullanici_password2']);
    $cins = $_POST['kullanici_cinsiyet'];
    $duplicate = mysqli_query($conn, "SELECT * FROM kullanici WHERE kullanici_adsoyad = '$username' OR kullanici_mail='$email' ");

    if (mysqli_num_rows($duplicate) > 0) {
        $_SESSION['message'] = "Kullanıcı adı veya email daha önceden kullanılmış!";
    } else {
        $query = "INSERT INTO kullanici(kullanici_adsoyad,kullanici_password2,kullanici_mail,kullanici_cinsiyet) VALUES('$username','$password','$email','$cins')";
        $check_query = mysqli_query($conn, $query);

        if ($check_query) {
            $_SESSION['kullanici_adsoyad'] = $username;
            header("Location: Anasayfa2.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Bir şeyler yanlış gitti..";
            header("Location: login.php ");
            exit(0);
        }
    }
}

if (isset($_POST['arayuzgiris'])) {
    $username = $_POST['kullanici_mail'];
    $password = md5($_POST['kullanici_password2']);
    $result = mysqli_query($conn, "SELECT * FROM kullanici WHERE kullanici_mail = '$username'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($password == $row['kullanici_password2']) {
            $_SESSION["arayuzgiris"] = true;
            $_SESSION["kullanici_mail"] = $username;
            $_SESSION['kullanici_adsoyad'] = $row['kullanici_adsoyad'];
            $_SESSION['kullanici_id'] = $row['kullanici_id'];
            $_SESSION['kullanici_zaman'] = $row['kullanici_zaman'];

            header('Location: Anasayfa2.php');
            exit(0);
        } else {
            $_SESSION['message'] = "Yanlış Şifre";
            header("Location: Anasayfa2.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Kaydınız Bulunmamaktadır";
        header("Location: Anasayfa2.php");
        exit(0);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in-up</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        // SweetAlert ile hata mesajını gösteren fonksiyon
        function showErrorAlert() {
            Swal.fire({
                icon: 'error',
                title: 'Hata!',
                text: 'Girdiğiniz şifreler eşleşmiyor tekrar kontrol ediniz!',
                confirmButtonText: 'Tekrar Dene',


            });
        }

        function showSuccesAlert() {
            Swal.fire({
                icon: 'success',
                title: 'Basarili',
                text: 'Kaydiniz Basari Ile Olusturulmustur Tebrikler',
                confirmButtonText: 'Hosgeldiniz',


            });
        }
    </script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container" id="container">
        <div class="from-container sign-up">
            <form action="../web site/login.php" method="POST">
                <h1>Hesap Olustur</h1>
                <div class="sosyal-medya">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>veya kayıt için e-postanızı kullanın</span>
                <div class=" " style="width: 100%;">
                    <input type="text" class="form-control" id="" name="kullanici_adsoyad" placeholder="Adinizi ve Soyadinizi giriniz">
                </div>
                <div class="" style="width: 100%;">
                    <input type="email" class="form-control" id="" name="kullanici_mail" placeholder="Email adresiniz giriniz">
                </div>
                <div class=" " style="width: 100%;">
                    <input type="password" class="form-control" id="" name="kullanici_password2" placeholder="Sifrenizi giriniz">
                </div>
                <div class="" style="width: 100%;">
                    <input type="password" class="form-control" id="" name="kullanici_password3" placeholder="Tekrar Sifrenizi giriniz">
                </div>

                <div class="gender-container ">
                    <label for="gender"></label>
                    <input type="radio" class="btn-check" name="kullanici_cinsiyet" value="Erkek" id="success-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary" for="success-outlined">ERKEK</label>

                    <input type="radio" class="btn-check" name="kullanici_cinsiyet" value="Kiz" id="danger-outlined" autocomplete="off">
                    <label class="btn btn-outline-danger" for="danger-outlined">KIZ</label>
                </div>
                <button id="kayitara" onclick="checkPasswordMatch()" name="arayuzkayit">Kayit Ol</button>
            </form>
        </div>
        <div class="from-container sign-in">
            <form action="" method="POST">
                <h1>Giris Yap</h1>
                <div class="sosyal-medya">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>veya e-posta şifrenizi kullanın</span>
                <div class="form-floating mb-3" style="width: 100%">
                    <input type="email" class="form-control" id="floatingInput" name="kullanici_mail" placeholder="name@example.com">
                    <label for="floatingInput">Email adres</label>
                </div>
                <div class="form-floating" style="width: 100%">
                    <input type="password" class="form-control" name="kullanici_password2" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Sifre</label>
                </div>
                <div class="form-check form-switch d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label ms-2" for="flexSwitchCheckChecked">Beni Hatırla</label>
                </div>
                <button onclick="checkLoginMatch()" name="arayuzgiris">Giris Yap</button>
            </form>
        </div>
        <?php
        if (isset($_SESSION["arayuzgiris"])) {
            $_SESSION['message'] = "Zaten giriş yapılmış durumda!";
            header("Location: ../Anasayfa2.php");
            exit(0);
        }
        ?>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Tekrar hoşgeldiniz</h1>
                    <p>Tüm site özelliklerini kullanabilmeniz için kişisel bilgilerinizi girin</p>
                    <button class="hidden" id="login">Giris Yap</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Merhaba </h1>
                    <p>kişisel bilgilerinizle kayıt olun tüm site özelliklerini kullanın</p>
                    <button class="hidden" id="register">Kayit Ol</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Şifre eşleşme kontrolü
        function checkPasswordMatch() {
            var sifre = document.getElementsByName('kullanici_password2')[0].value;
            var tekrar_sifre = document.getElementsByName('kullanici_password3')[0].value;

            if (sifre !== tekrar_sifre) {
                // Eşleşmiyorsa hata mesajını göster
                showErrorAlert();
                // Formun gönderilmesini engelle
                event.preventDefault();
            } else {
                showSuccesAlert();
            }
        }
    </script>

<script>
        function showSweetAlert(icon, title, text) {
            Swal.fire({
                icon: icon,
                title: title,
                text: text,
                confirmButtonText: 'Tamam'
            });
        }

        function checkLoginMatch() {
            var enteredPassword = document.getElementsByName('kullanici_password2')[0].value;
            var storedPassword = '<?= $row['kullanici_password2']; ?>'; // Kullanıcı şifresini PHP'den alın

            if (enteredPassword !== storedPassword) {
                showSweetAlert('error', 'Hata!', 'Girdiğiniz şifre yanlış. Lütfen tekrar kontrol edin.');
            } else {
                showSweetAlert('success', 'Başarılı', 'Giriş başarılı. Hoş geldiniz!');
            }
        }
    </script>









    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>