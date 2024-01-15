<?php

include 'header.php';




if (isset($_POST["urunkaydet"]) && isset($_FILES['image'])) {
  $urun_ad = $_POST["urun_ad"];
  $urun_link = $_POST["urun_link"];
  $urun_fiyat = $_POST["urun_fiyat"];



  $img_name = $_FILES["image"]["name"];
  $img_size = $_FILES["image"]["size"];
  $tmp_name = $_FILES["image"]["tmp_name"];
  $error = $_FILES["image"]["error"];


  if ($error === 0) {
    if ($img_size > 10000000) {
      $_SESSION['message'] = 'Fotoğrafın boyutu çok yüksek!.';
      header("Location: urun-ekle.php");
      exit(0);
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);
      $allowed_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = '../../web site/img/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
      } else {
        $_SESSION['message'] = 'Yanlış Dosya Türü!';
        header('Location: urun-ekle.php');
        exit(0);
      }
    }
  } else {
    $_SESSION['message'] = 'Bilinmeyen Bir hata oluştu.';
    header('Location: urun-ekle.php');
    exit(0);
  }



  $query = "INSERT INTO urun (urun_ad,urun_link,urun_fiyat,urun_resimyol) VALUES ('$urun_ad','$urun_link','$urun_fiyat','$new_img_name')";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    $_SESSION['message'] = "urun Başarılı bir şekilde eklenmiştir.";
    header("Location: urun-ekle.php");
    exit(0);
  }
}

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>urun Ekleme <small>

              </small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="first-name" name="image" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">urun Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_ad" required="required" placeholder="urun adını giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>




              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">urun Url <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_link" placeholder="urun Link giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">urun Sıra <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_fiyat" required="required" placeholder="urun sıra giriniz" class="form-control col-md-7 col-xs-12">
                </div>
              </div>





              


              <div class="ln_solid"></div>
              <div class="form-group">
                <div text-align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="urunkaydet" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form>



          </div>
        </div>
      </div>
    </div>



    <hr>
    <hr>
    <hr>



  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>