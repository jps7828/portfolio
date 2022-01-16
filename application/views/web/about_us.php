

<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="about about_two seaction_margin pt-5 pb-5 mb-5">
  <div class="container pt-5">
    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-12 animated slide">
        <h2 class="title text-center" style="font-weight: bold; font-size: 1.9rem; color:#209e2e"><span><?= $about_us->about_us_title ?></span> </h2>
        <h4 class="title text-center"><span  style="font-weight: bold; font-size: 1.5rem; color:#209e2e">
          <?= $about_us->about_us_heading ?>
          </span> </h4>
        <p>
          <?= $about_us->about_us_details ?>
        </p>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-12 animated slide">
          <img style="width:100%" src="<?= base_url($about_us->about_us_image_2) ?>" alt="img" />
          <!-- <a href="#"><i class="fa fa-play"></i></a> -->
      </div>

    </div>
  </div>
</div>









<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->