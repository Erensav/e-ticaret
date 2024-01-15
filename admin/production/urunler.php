<?php

include 'header.php';

//Belirli veriyi seçme işlemi
$urunsor = $db->prepare("SELECT * FROM urun");
$urunsor->execute();



if ($_GET['urunsil'] == "ok") {

	$sil = $db->prepare("DELETE from urun where urun_id=:urun_id");
	$kontrol = $sil->execute(array(
		'urun_id' => $_GET['urun_id']
	));

	if ($kontrol) {

		$resimsilunlink = $_GET['urun_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location: urunler.php?durum=ok");
	} else {

		Header("Location: urunler.php?durum=no");
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
						<h2>urun Listeleme <small>



							</small></h2>

						<div class="clearfix"></div>

						<div align="right">
							<a href="urun-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

						</div>
					</div>
					<div class="x_content">


						<!-- Div İçerik Başlangıç -->

						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Resim</th>
									<th>Ad</th>
									<th>Fiyat</th>
									<th>Sıra</th>
									
									<th>Sil</th>
									<th></th>
								</tr>
							</thead>

							<tbody>

								<?php

								$say = 0;

								while ($uruncek = $urunsor->fetch(PDO::FETCH_ASSOC)) {
									$say++ ?>


									<tr>
										<td width="20"><?php echo $say ?></td>
										<td><img width="200" src="../../web site/img/<?php echo $uruncek['urun_resimyol'] ?>"></td>


										<td><?php echo $uruncek['urun_ad'] ?></td>
										<td><?php echo $uruncek['urun_fiyat'] ?></td>
										<td><?php echo $say ?></td>












										<td>
											<center><a href="urun-duzenle.php?urun_id=<?php echo $uruncek['urun_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center>
										</td>
										<td>
											<center><a href="?urun_id=<?php echo $uruncek['urun_id']; ?>&urunsil=ok&urun_resimyol=<?php echo $uruncek['urun_resimyol'] ?>"><button class="btn btn-danger btn-xs">Sil</button></a></center>
										</td>
									</tr>



								<?php  }

								?>


							</tbody>
						</table>

						<!-- Div İçerik Bitişi -->


					</div>
				</div>
			</div>
		</div>




	</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>