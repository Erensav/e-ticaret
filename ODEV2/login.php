<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/logo.png">

  <title>Giris Yap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/log.css">
</head>

<body class="text-center">
  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col">
        
      </div>
      <div class="col">
      <form class="form-signin" method="post" action="">
    <img class="mb-2" src="img/logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-4 font-weight-normal">Giriş Yapınız.</h1>
    <input type="text" id="inputUsername" class="form-control mb-1" name="username" placeholder="Kullanıcı Adı">
    <input type="password" id="inputPassword" name="user_password" class="form-control" placeholder="Şifre">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me">
        Beni Hatırla
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Giriş Yap!</button>
    <br>
    <br>
    <?php
    require "connect.php";
    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $user_password = $_POST['user_password'];
      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
      $row = mysqli_fetch_assoc($result);
      if (mysqli_num_rows($result) > 0) {
        if ($user_password == $row['user_password']) {
          $_SESSION["login"] = true;
          $_SESSION["username"] = $row["username"];
          header("Refresh:1 index.php");
        } else {
          echo "Yanlış Şifre";
        }
      } else {
        echo "Kaydınız Bulunmamaktadır";
      }
    }
    ?>

    <p class="mt-5 mb-3 text-muted">&copy; 2023-2024 Eğitim Öğretim Sezonu</p>
  </form>
      </div>
      <div class="col">
        
      </div>
    </div>
  </div>
  
</body>

</html>