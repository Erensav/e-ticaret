<?php

include 'header.php';

//Belirli veriyi seçme işlemi
$slidersor = $db->prepare("SELECT * FROM slider");
$slidersor->execute();



if ($_GET['slidersil'] == "ok") {

	$sil = $db->prepare("DELETE from slider where slider_id=:slider_id");
	$kontrol = $sil->execute(array(
		'slider_id' => $_GET['slider_id']
	));

	if ($kontrol) {

		$resimsilunlink = $_GET['slider_resimyol'];
		unlink("../../$resimsilunlink");

		Header("Location: slider.php?durum=ok");
	} else {

		Header("Location: slider.php?durum=no");
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
						<h2>Slider Listeleme <small>



							</small></h2>

						<div class="clearfix"></div>

						<div align="right">
							<a href="slider-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

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
									<th>Url</th>
									<th>Sıra</th>
									<th>Durum</th>
									<th>Sil</th>
									<th></th>
								</tr>
							</thead>

							<tbody>

								<?php

								$say = 0;

								while ($slidercek = $slidersor->fetch(PDO::FETCH_ASSOC)) {
									$say++ ?>


									<tr>
										<td width="20"><?php echo $say ?></td>
										<td><img width="200" src="../../web site/img/<?php echo $slidercek['slider_resimyol'] ?>"></td>


										<td><?php echo $slidercek['slider_ad'] ?></td>
										<td><?php echo $slidercek['slider_link'] ?></td>
										<td><?php echo $say ?></td>












										<td>
											<center><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center>
										</td>
										<td>
											<center><a href="?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok&slider_resimyol=<?php echo $slidercek['slider_resimyol'] ?>"><button class="btn btn-danger btn-xs">Sil</button></a></center>
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