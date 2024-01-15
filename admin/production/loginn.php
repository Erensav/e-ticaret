<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giris Yap</title>
    <link rel="icon" href="../../web site/img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">

            </div>
            <div class="col ">
                <div>
                    <img src="../../web site/img/logo.png" alt="" width="250" height="250">
                </div>
                <h2>---- YONETIM PANELI ----</h2>
                <form action="../baglantilar/islem.php" method="POST" id="myForm" class="d-flex flex-column">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" required="" name="kullanici_mail" id="floatingIsim">
                        <label for="floatingIsim">Eposta Adresiniz</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" required="" name="kullanici_password" id="floatingSifre" >
                        <label for="floatingSifre">Sifrenizi Giriniz</label>
                    </div>
                    <button type="submit" class="btn btn-outline-warning mt-3" name="admingiris">Giris Yap</button>

                </form>

            </div>
            <div class="col">

            </div>
        </div>
    </div>





</body>


</html>