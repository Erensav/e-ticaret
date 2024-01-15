<?php include "header.php";




?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kullanici Duzenle <small>

                                <?php
                                if (isset($_GET['durum'])) {
                                    if ($_GET['durum'] == "ok") {
                                ?><b style="color: green;">İşlem Başarılı...</b><?php
                                                                            } elseif ($_GET['durum'] == "no") {
                                                                                ?><b style="color: red;">İşlem Başarısız...</b><?php
                                                                                                                            }
                                                                                                                        }
                                                                                                                                ?>
                            </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
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
                        <form action="../baglantilar/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kayit Tarihi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" disabled="" value="<?php echo $kullanicicek["kullanici_zaman"] ?>" name="kullanici_zaman" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name"  value="<?php echo $kullanicicek["kullanici_mail"] ?>" name="kullanici_mail" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TC <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" value="<?php echo $kullanicicek["kullanici_tc"] ?>" name="kullanici_tc" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" value="<?php echo $kullanicicek["kullanici_adsoyad"] ?>" name="kullanici_adsoyad" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanici Yetkisi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="Admin" name="kullanici_yetki" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Admin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="Kullanici" name="kullanici_yetki" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">Kullanici</label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek["kullanici_id"] ?>">


                            <div class="ln_solid"></div>
                            <div class="form-group" text-align="right">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="kullaniciguncelle" class="btn btn-primary">Guncelle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include "footer.php"; ?>