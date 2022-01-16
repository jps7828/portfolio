
<!--Slider-->
<div class="home-banner-three" style="max-width:100vw">
    <div class="home-slides owl-carousel owl-theme" id="slider-carousel">
        <?php foreach($sliders as $slider): ?>
            <div class="home-item item-bg" style="background-image: url('<?= base_url($slider->slider_image_1) ?>'); height: 100vh; width: 100vw">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-12 text-center">
                                    <h1>
                                        <?= $slider->slider_heading ?>
                                    </h1>
                                    <h5>
                                        <?= $slider->slider_sub_heading ?>
                                    </h5>
                                    <div class="banner-btn">
                                        <a href="<?= base_url('about-us') ?>" class="default-btn">
                                            Discover More
                                            <i class="flaticon-plus"></i>
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="main-banner-content">
                                    <!-- <ul class="banner-list">
                                        <li>
                                            <i class="flaticon-onion"></i>
                                            <sup>1</sup>
                                            <span>Vegetable</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-fish-1"></i>
                                            <sup>2</sup>
                                            <span>Fish</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-cow-1"></i>
                                            <sup>3</sup>
                                            <span>Cow</span>
                                        </li>
                                    </ul> -->
                                    <!-- <h1>
                                        <?= $slider->slider_heading ?>
                                    </h1>
                                    <p>
                                        <?= $slider->slider_sub_heading ?>
                                    </p> -->
                                    <!-- <div class="banner-btn">
                                        <a href="<?= base_url('about-us') ?>" class="default-btn">
                                            Discover More
                                            <i class="flaticon-plus"></i>
                                            <span></span>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-image">
                                    <!-- <img src="<?= base_url($slider->slider_image_1) ?>" alt="image"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

        <!-- <div class="home-item item-bg">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                    <ul class="banner-list">
                                        <li>
                                            <i class="flaticon-onion"></i>
                                            <sup>1</sup>
                                            <span>Vegetable</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-fish-1"></i>
                                            <sup>2</sup>
                                            <span>Fish</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-cow-1"></i>
                                            <sup>3</sup>
                                            <span>Cow</span>
                                        </li>
                                    </ul>
                                    <h1>Vegetables and Fruits Good For Health</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing incididunt ut laboredolore magna aliqua elsed tempomet, consectetur adipiscing.</p>
                                    <div class="banner-btn">
                                        <a href="about.html" class="default-btn">
                                            What We do
                                            <i class="flaticon-plus"></i>
                                            <span></span>
                                        </a>
                                        <a class="optional-btn" href="#">
                                            Visit our firm
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-image">
                                    <img src="<?= base_url() ?>assets/web/images/home-three/2.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-item item-bg">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-banner-content">
                                   <ul class="banner-list">
                                    <li>
                                        <i class="flaticon-onion"></i>
                                        <sup>1</sup>
                                        <span>Vegetable</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-fish-1"></i>
                                        <sup>2</sup>
                                        <span>Fish</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-cow-1"></i>
                                        <sup>3</sup>
                                        <span>Cow</span>
                                    </li>
                                </ul>
                                <h1>Vegetables and Fruits Good For Health</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing incididunt ut laboredolore magna aliqua elsed tempomet, consectetur adipiscing.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="default-btn">
                                        What We do
                                        <i class="flaticon-plus"></i>
                                        <span></span>
                                    </a>
                                    <a class="optional-btn" href="#">
                                        Visit our firm
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="<?= base_url() ?>assets/web/images/home-three/3.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<div class="creative-shape">
    <img src="<?= base_url() ?>assets/web/images/home-three/shape.png" alt="image">
</div>
</div>
<!--Slider-->




<!--Who We Are-->
<section class="triple-section pb-100" style="max-width:100vw">
    <div class="container">
        <div class="section-title">
            <h3 style="color:#209e2e">WHO WE ARE</h3>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <p>
                    <?= substr($about_who->about_us_details, 0,700) ?> ... 
                </p>

                <div class="banner-btn">
                    <a href="<?= base_url('who-we-are') ?>" class="default-btn">
                        Read More
                        <i class="flaticon-plus"></i>
                        <span></span>
                    </a>
                </div>
            </div>    

            <div class="col-sm-6">
                <img class="hover2" style="max-width:40vw" src="<?= base_url($about_who->about_us_image_1) ?>" alt="image">
            </div>
        </div>
    </div>
</section>
<!--Who We Are-->




<!--What We Do-->
<section class="about-section bg-f4faf4 ptb-100" style="max-width:100vw">
    <div class="container">
        <div class="about-title-area">
            <div class="row">
                <!-- <div class="col-lg-7 col-md-12">
                    <div class="about-title">
                        <span>KNOW ABOUT US</span>
                        <h2>The territory might be safe is vegetable easy to get</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="about-text">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                </div> -->
                <div class="col-sm-12 section-title">
                    <h3 style="color:#209e2e">WHAT WE DO</h3>
                </div>

                <div class="col-sm-6">
                    <img class="hover2" style="max-width:40vw" src="<?= base_url($about_what->about_us_image_1) ?>" alt="what we do image">
                </div>

                <div class="col-sm-6">
                    <p>
                        <?= substr($about_what->about_us_details, 0,850) ?> ... 
                    </p>

                    <div class="banner-btn">
                        <a href="<?= base_url('what-we-do') ?>" class="default-btn">
                            Read More
                            <i class="flaticon-plus"></i>
                            <span></span>
                        </a>
                    </div>
                </div>    

                


            </div>
        </div>
       <!--  <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-slider owl-carousel owl-theme">
                    <div class="about-item">
                        <div class="about-slide-image">
                            <img src="<?= base_url() ?>assets/web/images/about/1.png" alt="image">
                        </div>
                        <div class="about-text">
                            <span>Healthy journey</span>
                            <h3>100% Clean & fresh agro services with low cost</h3>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-slide-image">
                            <img src="<?= base_url() ?>assets/web/images/about/2.png" alt="image">
                        </div>
                        <div class="about-text">
                            <span>Pure agro services</span>
                            <h3>Rich in autrients but no formal or defect</h3>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-slide-image">
                            <img src="<?= base_url() ?>assets/web/images/about/3.png" alt="image">
                        </div>
                        <div class="about-text">
                            <span>Healthy journey</span>
                            <h3>Clean & Fresh agro aervices with low cost</h3>
                        </div>
                    </div>
                </div>
                <div class="about-content-area">
                    <div class="about-content">
                        <h3>Life is not like a species do you believe?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed dorem ipsum dolor sit amet, consectetur adipiscing.</p>
                    </div>
                    <ul class="about-list">
                        <li>
                            <i class="flaticon-check"></i>
                            Get Back to Healthy Life
                        </li>
                        <li>
                            <i class="flaticon-check"></i>
                            Wake up Refreshed
                        </li>
                        <li>
                            <i class="flaticon-check"></i>
                            Set a Healthier lifestyle
                        </li>
                        <li>
                            <i class="flaticon-check"></i>
                            Boost Energy & Metabolism
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image top-image">
                    <img src="<?= base_url() ?>assets/web/images/about/about-2.jpg" alt="image">
                </div>
            </div>
        </div> -->
    </div>
    <div class="default-shape">
        <div class="default-shape-one">
            <img src="<?= base_url() ?>assets/web/images/default-shape/shape.png" alt="image">
        </div>
        <div class="default-shape-two">
            <img src="<?= base_url() ?>assets/web/images/default-shape/shape-2.png" alt="image">
        </div>
    </div>
</section>
<!--What We Do-->





<!-- GALLERY -->
<div class="gallery-area pt-100 pb-70" style="background-color: #f9f9f9; padding: 50px 0 50px; max-width: 100vw;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 section-title">
                <h3 style="color:#209e2e">OUR GALLERY</h3>
            </div>
            <?php foreach($gallery as $gal): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-box">
                        <img style="width:410px; height: 250px;" src="<?= base_url($gal->gallery_image_1)  ?>" alt="image">
                        <a href="<?= base_url($gal->gallery_image_1)  ?>" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class="flaticon-view"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="banner-btn text-center">
                <a href="<?= base_url('gallery') ?>" class="default-btn">
                    Discover More
                    <i class="flaticon-plus"></i>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- GALLERY -->




<!--Team-->
<section class="team-section pt-100 pb-70" style="max-width:100vw">
        <div class="container">
            <div class="section-title">
                <h3 style="color:#209e2e">Our Team</h3>
            </div>
            <div class="row">
                <?php foreach($teams as $team): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team-item" style="height: 65vh">
                            <div class="team-image">
                                <img style="height: 45vh; width: 25vw;" src="<?= base_url($team->team_image_1) ?>" alt="team">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <u><?= $team->team_name ?></u>
                                </h3>
                                <span>
                                    <?= $team->team_details ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<!--Team-->





<!-- PRODUCTS -->
<section class="shop-section ptb-100" style="background-color: #f9f9f9; padding: 50px 0 50px; max-width:100vw">
    <div class="container">
        <div class="section-title">
            <h3 style="color:#209e2e">OUR PRODUCTS</h3>
        </div>
        <div class="tab shop-list-tab">
            <div class="tab_content">
                <div class="tabs_item">
                    <div class="row align-items-center">

                        <?php foreach($products_three as $product): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="shop-item-three">
                                    <div class="shop-image">
                                        <a href="<?= base_url($product->product_link)  ?>">
                                            <img class="hover2" style="height: 45vh; width: 20vw" src="<?= base_url($product->product_image_1) ?>" alt="image">
                                        </a>
                                    </div>
                                    <div class="shop-content">
                                        <h3>
                                            <a href="<?= base_url($product->product_link)  ?>">
                                                <?= $product->product_name ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="product-btn">
                        <a href="<?= base_url('/products') ?>" class="product-btn-one">
                            All Products
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- PRODUCTS -->






<!-- TESTIMONIALS -->
<section class="feedback-section pt-100 pb-100" style="max-width:100vw">
    <div class="container">
        <div class="feedback-title">
            <h3 style="color:#209e2e"> TESTIMONIALS </h3>
        </div>
        <div class="feedback-slider owl-carousel owl-theme">

            <?php foreach($testimonials as $testimonial): ?>
                <div class="feedback-item">
                    <div class="feedback-info">
                        <img src="<?= base_url($testimonial->slider_image_1) ?>" alt="image">
                        
                    </div>
                    <div class="feedback-content">
                        <h3>
                            <?= $testimonial->slider_heading ?>
                        </h3>
                        <!-- <span>Finest Agriculture, UK</span> -->
                        <p>
                            <?= $testimonial->slider_caption ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- TESTIMONIALS -->



<!-- SUBSCRIBE -->
<section class="subscribe-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3 style="color:#209e2e">Subscribe Us </h3>
            <p>
                Subscribe to our newsletter to get the latest updates from us.
            </p>
        </div>

        

        <form class="newsletter-form" id="subscription2">

        <!-- INFO MSG -->
        <div class="alert alert-info alert-dismissible" id="done2" style="display: none;">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> You have been subscribed to our newsletter.
        </div>
        <div class="alert alert-danger alert-dismissible" id="notdone2" style="display: none;">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Failed!</strong> Please try again.
        </div>
        <!-- INFO MSG -->

            <input type="text" class="input-newsletter" placeholder="Enter your email" name="email" required autocomplete="on">
            <input type="submit" class="default-btn" id="button" value="subscribe now" name="subscribe">
            <!-- <button type="submit">
                Subscribe Now
                <i class="flaticon-plus"></i>
            </button> -->
            <!-- <div id="validator-newsletter" class="form-result"></div> -->
        </form>
    </div>
</section>
<!-- SUBSCRIBE -->








<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->






