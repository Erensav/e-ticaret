<?php

include 'header.php';


function seo($string) {
  // Türkçe karakterleri değiştirme
  $search = array('Ç', 'ç', 'Ğ', 'ğ', 'İ', 'ı', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
  $replace = array('C', 'c', 'G', 'g', 'I', 'i', 'O', 'o', 'S', 's', 'U', 'u');
  $string = str_replace($search, $replace, $string);

  // Harf, rakam ve boşluk dışındaki karakterleri kaldırma
  $string = preg_replace("/[^a-zA-Z0-9 ]+/", "", $string);

  // Boşlukları - ile değiştirme
  $string = str_replace(' ', '-', $string);

  // Tüm karakterleri küçük harfe çevirme
  $string = strtolower($string);

  return $string;
}


  
$urunsor = $db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
  'id' => $_GET['urun_id']
));

$uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);





if (isset($_POST['urunduzenle'])) {

	$urun_id=$_POST['urun_id'];
	$urun_seourl= seo($_POST['urun_ad']);

	$kaydet=$db->prepare("UPDATE urun SET
		
		urun_ad=:urun_ad,
		urun_detay=:urun_detay,
		urun_fiyat=:urun_fiyat,
		urun_video=:urun_video,
		
		urun_keyword=:urun_keyword,
		urun_durum=:urun_durum,
		urun_stok=:urun_stok,	
		urun_seourl=:seourl		
		WHERE urun_id={$_POST['urun_id']}");
	$update=$kaydet->execute(array(
		
		'urun_ad' => $_POST['urun_ad'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_video' => $_POST['urun_video'],
		
		'urun_keyword' => $_POST['urun_keyword'],
		'urun_durum' => $_POST['urun_durum'],
		'urun_stok' => $_POST['urun_stok'],
		'seourl' => $urun_seourl

		));

	if ($update) {

		Header("Location:urun-duzenle.php?durum=ok&urun_id=$urun_id");

	} else {

		Header("Location:urun-duzenle.php?durum=no&urun_id=$urun_id");
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
            <h2>Ürün Düzenleme <small>,

                <?php

                if ($_GET['durum'] == "ok") { ?>

                  <b style="color:green;">İşlem Başarılı...</b>

                <?php } elseif ($_GET['durum'] == "no") { ?>

                  <b style="color:red;">İşlem Başarısız...</b>

                <?php }

                ?>


              </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-urun" role="urun">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">




              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_ad" value="<?php echo $uruncek['urun_ad'] ?>"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <!-- Ck Editör Başlangıç -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detay <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea class="ckeditor" id="editor1" name="urun_detay"><?php echo $uruncek['urun_detay']; ?></textarea>
                </div>
              </div>

              <script type="text/javascript">
                CKEDITOR.replace('editor1',

                  {

                    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',

                    filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',

                    filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',

                    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                    filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                    filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                    forcePasteAsPlainText: true

                  }

                );
              </script>

              <!-- Ck Editör Bitiş -->


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyat <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat'] ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Video <span class="">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_video" value="<?php echo $uruncek['urun_video'] ?>"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Keyword <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_keyword" value="<?php echo $uruncek['urun_keyword'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stok <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="urun_stok" value="<?php echo $uruncek['urun_stok'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durum<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="heard" class="form-control" name="urun_durum" required>



                    <!-- Kısa İf Kulllanımı 

                    <?php echo $uruncek['urun_durum'] == '1' ? 'selected=""' : ''; ?>

                  -->




                    <option value="1" <?php echo $uruncek['urun_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>



                    <option value="0" <?php if ($uruncek['urun_durum'] == 0) {
                                        echo 'selected=""';
                                      } ?>>Pasif</option>
                    <!-- <?php

                          if ($uruncek['urun_durum'] == 0) { ?>


                   <option value="0">Pasif</option>
                   <option value="1">Aktif</option>


                   <?php } else { ?>

                   <option value="1">Aktif</option>
                   <option value="0">Pasif</option>

                   <?php  }

                    ?> -->


                  </select>
                </div>
              </div>


              <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id'] ?>">


              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="urunduzenle" class="btn btn-success">Güncelle</button>
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