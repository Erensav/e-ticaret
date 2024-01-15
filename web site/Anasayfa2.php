<?php include "header.php"; ?>
<div class="container-fluid py-5">
    <div class="row ">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <a href="#">
                        <video src="img/aasd.mp4" width="100%" height="15%" autoplay muted loop>

                        </video></a>
                </div>
                <div class="carousel-item"><a href="#">
                        <video src="img/video2.mp4" width="100%" height="15%" autoplay muted loop>

                        </video></a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <video src="img/deniz.mp4" width="100%" height="15%" autoplay muted loop>

                        </video>
                    </a>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- carousel bitti -->
<div class="container-fluid text-center">
    <div class="row align-items-start">
        <div class="col-4 img-container">
            <a href="#">
                <img src="img/woman.jpg" alt="Kadin">
            </a>
        </div>
        <div class="col-4 img-container">
            <a href="#">
                <img src="img/man.jpg" alt="Erkek">
            </a>
        </div>
        <div class="col-4 img-container">
            <a href="#">
                <img src="img/kids.jpg" alt="Cocuk">
            </a>
        </div>
    </div>
</div>
<br><br>
<!--  iiiiiii      -->

<div class="container d-none d-lg-block">
    <div class="row">
        <div class="col-8">
            <div class="card text-bg-dark">
                <a href="#">
                    <img src="img/man-wo.jpg" style="height: 880px;" class="card-img" alt="...">
                </a>
                <div class="container text-center">
                    <div class="row align-items-end">
                        <div class="col"></div>
                        <div class="col ">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title mb-0">Yilbasi Koleksiyonu</h5>
                                <p class="card-text mb-1">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.
                                </p>

                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card ">
                <a href="#">
                    <img src="img/woman-600238_1280.jpg" class="card-img-top" alt="...">
                </a>
            </div>
            <div class="card my-4">
                <a href="#">
                    <img src="img/woman22.jpg" class="card-img-top" alt="...">
                </a>
            </div>
        </div>
    </div>
    <hr class="border">
</div>

<br>
<!-- 2.  -->
<div class="container d-block d-md-block d-lg-none">
    <div class="row">
        <div class="col-10">
            <div class="card text-bg-dark">
                <a href="#">
                    <img src="img/woman-531252_1280.jpg" class="card-img" alt="...">
                </a>
                <div class="container text-center">
                    <div class="row align-items-end">
                        <div class="col">

                        </div>
                        <div class="col ">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                <a href="#"><button type="button" class="btn btn-outline-warning align-items-end">Şıklığı
                                        Keşfet</button></a>
                            </div>
                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>
                <!-- <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                            <a href="#"><button type="button" class="btn btn-outline-warning">Warning</button></a>
                        </div> -->
            </div>
        </div>
    </div>
</div>

<!-- 3 -->
<div class="container">
    <div class="row">
        <div class="col-4">
            <a href="#"> <video width="100%" muted loop autoplay>
                    <source src="img/deneme.mp4" type="video/mp4">
                </video></a>
            <div class="text-center my-4">
                <h3>Baslik</h3>

            </div>
        </div>
        <div class="col-4">
            <a href="#"><img src="img/spor.jpg" width="100%" alt=""></a>
            <div class="text-center my-4">
                <h3>Baslik</h3>
                <a href="#"><button type="button" class="btn btn-outline-warning rounded-pill text-center">Warning</button></a>
            </div>

        </div>
        <div class="col-4 ">
            <a href="#"><video width="100%" muted loop autoplay>
                    <source src="img/video3_out.mp4" type="video/mp4">
                </video></a>
            <div class="text-center my-4">
                <h3>Baslik</h3>
                <a href="#"><button type="button" class="btn btn-outline-warning rounded-pill text-center">Warning</button></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid  text-center mt-2">
    <div style="position: relative;" class="bg-resim">

        <a href="#"><img src="img/alt.jpg" width="100%" height="100%" alt=""></a>
        <div style="position: absolute; right: 80%; top:75%;">
            <h4>ALISVERISE BASLA</h4>
            <button type="button" class="btn btn-outline-warning">Warning</button>
        </div>
    </div>
</div>
<br>
<hr><br>
<!-- Owl Carousel Ayarları -->
<script>
    $(document).ready(function() {
        $(".product-slider").owlCarousel({
            // Diğer ayarlarınız buraya gelecek
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            },
            navText: ["<i class='flaticon-left-arrow-1'></i>", "<i class='flaticon-right-arrow-1'></i>"]
        });
    });
</script>

<div class="container-fluid text-center">
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title mb-2">
                <h2>Yeni Koleksiyon</h2>
            </div>
            <div class="product-slider owl-carousel">
            <?php 
                $query = "SELECT * FROM slider";
                $query_run = mysqli_query($conn, $query);
                
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $product) {
                    ?>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="img/<?php echo $product['slider_resimyol']; ?>" width="200px" height="200px" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card "><i class="flaticon-bag"></i><button type="button" class="btn btn-outline-warning rounded-pill text-center my-3">Warning</button></a>
                                <a href="#" class="wishlist-btn "><i class="flaticon-heart"></i></a>

                            </div>
                        </div>
                        <div class="pi-text">
                            <p><?php echo $product['slider_sira']; ?> ₺</p>
                            <h6><?php echo $product['slider_ad']; ?></h6>
                        </div>
                    </div>
                <?php
                }
            }

                ?>
            </div>
        </div>
    </section>

</div>


<!--  footer      -->

<?php include "footer.php"; ?>

<div style="position: absolute; z-index: 999;">
    <a href="#top"><button type="button" class="btn btn-outline-warning" style="position: fixed; left: 93%; top: 90%; ">Basa Don</button></a>
</div>

</div>


</body>

</html>