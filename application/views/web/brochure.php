



<!-- PAGE TITLE -->
<div class="breadcumb-area bg-img-4 ptb-100" style="background-image: url(<?= base_url($bg->background_image_1) ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>
                       Brochure
                    </h2>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li><span>Brochure</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE TITLE -->












<!-- GALLERY -->
<!-- <section class="ls page_portfolio section_padding_top_0 section_padding_bottom_75" style="background-color: #f0f0f0;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h2 style="padding: 50px;" class="text-center"><a href=""> <u>  Training Photos  </u> </a></h2>

                <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">

                    <?php foreach($gallery as $gal): ?>
                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12 architecture">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="<?= base_url($gal->gallery_image_1)  ?>" alt="gallery image"><?= $gal->gallery_name  ?>
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?= base_url($gal->gallery_image_1)  ?>"></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="text-center">
                        <a href="<?= base_url('gallery')  ?>" class="btn btn-info">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- GALLERY -->








<!-- Brochure -->
<section class="blog-home-two" data-background="<?= base_url() ?>assets/web/images/bg/blog_bg02.jpg">
  <div class="container" style="min-height: 100vh ;align-content: center; padding-top: 50px;">
    <div class="row" style="padding-top: 50px;">
      <?php foreach($brochure as $item): ?>
        <div class="col-md-4 col-lg-4 col-sm-6 col-xm-6" style="padding: 30px;">
          <div class="blog-card">
            <div class="blog-card__image">
              <a href="<?= base_url($item->brochure_image_1)?>"><img  style="height: 50vh; width: 100% ;overflow: hidden; background-color: green; padding: 1px;" src="<?= base_url($item->brochure_image_1)?>" alt="brochure"></a>
            </div>
            <div>
              <a style="width: 100%;" href="<?= base_url($item->brochure_file_1)?>" target="blank" download> 
                <button class="btn btn-lg btn-block btn-info hvr-shutter-out-horizontal-two square-border"> 
                  Download 
                </button>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</section>
<!-- Brochure -->














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
