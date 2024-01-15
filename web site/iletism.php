<?php include "header.php"; ?>

<div class="container-fluid text-center mt-5">
    <div class="row">
        <div class="col-4">
            <ul class="list-group">
                <button><a style="text-decoration: none;" href="Hakkimizda.php">
                        <li class="list-group-item" aria-current="true"><?php echo $ayarcek1["hakkimizda_baslik"] ?></li>
                    </a></button>
                <button><a style="text-decoration: none;" href="vizyon.php">
                        <li class="list-group-item"><?php echo $ayarcek1["vizyon_baslik"] ?></li>
                    </a></button>
                <button><a style="text-decoration: none;" href="misyon.php">
                        <li class="list-group-item"><?php echo $ayarcek1["misyon_baslik"] ?></li>
                    </a></button>
                <button><a style="text-decoration: none;" href="iletism.php">
                        <li class="list-group-item active" aria-current="true">Iletisim</li>
                    </a></button>
            </ul>
        </div>
        <div class="col-8 text-left">
            <h2><strong>İletişim Bilgileri</strong></h2>
            <div class="d-flex flex-column align-items-start">
                <p><strong>Telefon Numarası:</strong> <?php echo $ayarcek["web_tel"] ?></p>
                <p><strong>E-posta Adresi:</strong><a href="<?php echo $ayarcek["web_mail"] ?>"> <?php echo $ayarcek["web_mail"] ?></p> </a>
                <p><strong>Il:</strong> <?php echo $ayarcek["web_il"] ?></p>
                <p><strong>Adres:</strong> <?php echo $ayarcek["web_adres"] ?></p>

                <!-- Sosyal Medya İkonları Ekleyebilirsiniz -->
                <div class="social-icons mt-3">
                    <a href="<?php echo $ayarcek["web_facebook"] ?>" class="social-icon mx-3" title="Facebook"><img width="32" height="32" src="img/facebook.png" alt="Facebook"></a>
                    <a href="<?php echo $ayarcek["web_tw"] ?>" class="social-icon mx-3" title="Twitter"><img width="32" height="32" src="img/twitter.png" alt="Twitter"></a>
                    <a href="<?php echo $ayarcek["web_instagram"] ?>" class="social-icon mx-3" title="Instagram"><img width="32" height="32" src="img/insta.png" alt="Instagram"></a>
                    <a href="<?php echo $ayarcek["web_link"] ?>" class="social-icon mx-3" title="linked"><img width="32" height="32" src="img/linked.png" alt="Instagram"></a>
                </div>
            </div>
        </div>


    </div>
</div>
<br>
<br><br><br>

<?php include "footer.php"; ?>

