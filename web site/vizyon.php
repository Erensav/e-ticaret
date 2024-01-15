<?php include "header.php"; ?>
    <div class="container-fluid text-center mt-5 ">
        <div class="row align-items-start">
            <div class="col-4">
                <ul class="list-group ">
                    <button><a style="text-decoration: none;" href="Hakkimizda.php">
                            <li class="list-group-item  " aria-current="true"><?php echo $ayarcek1["hakkimizda_baslik"] ?></li>
                        </a></button>
                    <button><a style="text-decoration: none;" href="vizyon.php">
                            <li class="list-group-item active"><?php echo $ayarcek1["vizyon_baslik"] ?></li>
                        </a></button>
                    <button><a style="text-decoration: none;" href="misyon.php">
                            <li class="list-group-item"><?php echo $ayarcek1["misyon_baslik"] ?></li>
                        </a></button>
                        <button><a style="text-decoration: none;" href="iletism.php">
                            <li class="list-group-item " aria-current="true">Iletisim</li>
                        </a></button>
                                       
                </ul>
            </div>
            <div class="col-8">
                <H2><strong><?php echo $ayarcek1["vizyon_baslik"] ?></strong></H2>
                <p>
                    <?php echo $ayarcek1["hakkimizda_vizyon"] ?>
                </p>
                
            </div>
        </div>
    </div>
    <br>
<br><br><br>

    <?php include "footer.php"; ?>

