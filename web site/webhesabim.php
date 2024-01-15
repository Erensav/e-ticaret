<?php include "header.php" ?>

<?php 
if (isset($_POST["update_user"])) {
    $id = $_POST["kullanici_id"];
    $username = $_POST["kullanici_adsoyad"];
    $password = md5($_POST["kullanici_password2"]);
    $email = $_POST["kullanici_mail"];
    $zaman = isset($_POST["kullanici_zaman"]) ? $_POST["kullanici_zaman"] : null;

    // Kullanıcı zamanı ile ilgili kontrol ekleyin
    $zaman_sql = isset($zaman) ? ", kullanici_zaman=$zaman" : "";

    $query = "UPDATE kullanici SET kullanici_adsoyad='$username', kullanici_password2='$password', kullanici_mail='$email' $zaman_sql WHERE kullanici_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Başarılı bir şekilde güncellenmiştir.";
        $_SESSION['kullanici_adsoyad'] = $username;
        ?>
        <script src="path/to/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="path/to/sweetalert2.min.css">
        <script>
            Swal.fire({
                title: "Başarılı!",
                text: "Kullanıcı bilgileriniz güncellenmiştir.",
                icon: "success"
            }).then(function(){
                window.location.href = "webhesabim.php";
            });
        </script>
        <?php
        exit(0);
    }
}
?>

<div class="card-body">
    <?php
    if (isset($_SESSION["kullanici_id"])) {
        $id = $_SESSION["kullanici_id"];
        $users = "SELECT * FROM kullanici WHERE kullanici_id = '$id' ";
        $query = mysqli_query($conn, $users);

        if (mysqli_num_rows($query) > 0) {
            foreach ($query as $user) {
    ?>
                <form action="" method="POST">
                    <input type="hidden" name="kullanici_id" value="<?= $user['kullanici_id']; ?>" style="display: none;">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="username">Kayit Tarihi</label>
                            <input type="text" name="kullanici_zaman" disabled value="<?= $user['kullanici_zaman']; ?>" class="form-control" id="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="username">Kullanıcı Adınız</label>
                            <input type="text" name="kullanici_adsoyad" value="<?= $user['kullanici_adsoyad']; ?>" class="form-control" id="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="password">Şifreniz</label>
                            <input type="text" name="kullanici_password2" value="<?= md5($user['kullanici_password2']); ?>" class="form-control" id="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="email">Emailiniz</label>
                            <input type="text" name="kullanici_mail" value="<?= $user['kullanici_mail']; ?>" class="form-control" id="email" autocomplete="email">
                        </div>                      
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="update_user" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i> Güncelle</button>
                        </div>
                    </div>
                </form>
    <?php
            }
        } else {
    ?>
            <h4>Kayıtlı Kullanıcı Bulunamadı</h4>
    <?php
        }
    }
    ?>
</div>

<?php include "footer.php" ?>
