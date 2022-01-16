
<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Skill & Training</h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li>Skill & Training</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>







<!-- GALLERY -->
<div class="gallery-area pt-100 pb-70" style="background-color: #f9f9f9; padding: 50px 0 50px; max-width: 100vw;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title">
                <h3 style="color:#209e2e">Training Gallery</h3>
            </div>
            <?php foreach($gallery_training as $gal): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-box">
                        <img style="width:350px; height: 250px;" src="<?= base_url($gal->gallery_image_1)  ?>" alt="image">
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








<!-- Training Videos -->
<section style="padding-top: 100px;">
    <div class="container">
        <!-- <h2 style="padding: 50px;" class="text-center">
            <a href=""> <u>  Training Videos  </u> </a>
        </h2> -->

        <div class="heading_wrap animated fades pt-5">
            <h2 class="heading_a">Training <span>Videos</span></h2>
        </div>
        <div class="row">
            <?php foreach($skills as $skill): ?>
                <div class="col-lg-6" style="padding-bottom: 100px;">
                   <?= $skill->skill_video ?>
                   <div>
                    <span><?= $skill->skill_heading ?></span>
                    <h4>  <?= $skill->skill_name ?>  </h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</section>
<!-- Training Videos -->














<!-- ASSOCIATES -->
<!-- <section class="ls section_padding_100" style="height: 100vh;">
    <h2 style="text-align: center; padding: 30px;">
        <a class="section_header" href=""><b>Associates</b></a>
    </h2>
    <div class="widget widget_slider" style="padding: 20px;">
        <div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
            
        <?php foreach($associates as $associate): ?>
            <div class="vertical-item">
                <div class="item-media bottommargin_10">
                    <img style="height: 50vh" src="<?= base_url($associate->slider_image_1) ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>

        </div>
    </div>
</section> -->
<!-- ASSOCIATES -->





<!-- Modal area start -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body d-flex">
                <div class="product-single-img" style="padding: 0">
                    <img src="<?= base_url($gal->gallery_image_1)  ?>" alt="gallery-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal area start -->










<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->