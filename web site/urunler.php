
<?php include "header.php"; ?>

<div class="container mt-4">
    <h2 class="mb-4">Ürünler</h2>

    <div class="row">
        <?php
       

        $sql = "SELECT * FROM urun";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="' . $row["urun_resimyol"] . '" class="card-img-top" alt="Ürün Resmi">
                            <div class="card-body">
                                <h5 class="card-title">Fiyat: ' . $row["urun_fiyat"] . ' TL</h5>
                                <p class="card-text">' . $row["urun_ad"] . '</p>
                                
                            </div>
                        </div>
                      </div>';
            }
        } else {
            echo "Ürün bulunamadı.";
        }

        $conn->close();
        ?>
    </div>
</div>

<?php include "footer.php"; ?>

