

<!-- PRODUCTS -->
<section class="section" style="background-color: #f9f9f9; padding: 50px 0 50px; max-width: 100vw;">
    <div class="container">
        <div class="heading_wrap animated fades">
            <h2 class="heading_a text-center" style="color:#209e2e">Our Association </h2>
        </div>

        <div class="owl-carousel owl-theme responsive " id="three-carousel">

            <?php foreach($associates as $associate): ?>
                <div class="item hover2 square" style=" margin: 40px ;padding:39px; align-items: center;">
                    <img src="<?= base_url($associate->slider_image_1) ?>" alt="" class="img-responsive" style="height: 15vh; padding:0">
                </div>
            <?php endforeach; ?>

        </div>

    </div><!-- end container -->
</section>
<!-- PRODUCTS -->
