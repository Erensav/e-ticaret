<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="cc.css">

    

    <title>Kayıt Olunuz</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="text-center">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">

            </div>
            <div class="col">
                <form class="form-signin" action="" method="POST">
                    <img class="mb-2" src="img/logo.png" alt="" width="72" height="72">
                    <h1 class="h3 mb-4 font-weight-normal">Kayıt Sayfasına Hosgeldiniz</h1>
                    <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email" name="user_mail" required autofocus>
                    <input type="text" id="inputUsername" class="form-control mb-3" placeholder="Kullanıcı Adı" name="username" required>
                    <input type="text" id="inputUsersurname" class="form-control mb-3" placeholder="Kullanıcı Soyadı" name="user_surname" required>
                    <input type="text" id="inputUserage" class="form-control mb-3" placeholder="Kullanıcı Yaşı" name="user_age" required>
                    <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Şifre" name="user_password" required>                    

                    <div class="checkbox1 mb-3 ">
                        <label class="toggle" value="remember-me">
                            <span class="onoff">Beni Hatırla</span>
                            <input type="checkbox">
                            <span class="slider round"> </span>
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">Kayıt Ol!</button>
                    <br>
                    <br>
                    <?php
                    require "connect.php";
                    if (isset($_POST['send'])) {
                        $username = $_POST['username'];
                        $user_surname = $_POST['user_surname'];
                        $user_age = $_POST['user_age'];
                        $user_mail = $_POST['user_mail'];
                        $user_password = $_POST['user_password'];
                        



                        $duplicate1 = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");
                        if (mysqli_num_rows($duplicate1) > 0) {
                            echo "Kullanıcı adı daha önce kullanılmış!";
                        }

                        $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE user_mail='$user_mail' ");
                        if (mysqli_num_rows($duplicate) > 0) {
                            echo "Email daha önce kullanılmış!";
                        } else {
                            $query = "INSERT INTO user VALUES('','$username','$user_password','$user_mail','$user_surname','$user_age')";
                            mysqli_query($conn, $query);
                            echo "Kayıt işlemi başarılı";
                            header("Refresh:1 index.php ");
                        }
                    }
                    ?>

                    <br><br><br><br>

                    <p class="mt-5 mb-3 text-muted">&copy; 2023-2024 Eğitim Öğretim Sezonu</p>
                </form>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <script>
        const toggle = document.querySelector(".toggle input")

        toggle.addEventListener("click", () => {
            const onoff = toggle.parentNode.querySelector(".onoff")
            onoff.textContent = toggle.checked ? "Beni Hatırla:" : "Beni Hatırla:"
        })
    </script>

</body>

</html>
