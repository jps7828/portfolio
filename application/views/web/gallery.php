


  <div class="page-title-area item-bg1">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="page-title-content">
            <h2>Gallery</h2>
            <ul>
              <li><a href="<?= base_url('/') ?>">Home</a></li>
              <li>Gallery</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="gallery-area pt-100 pb-70">
    <div class="container">
      <div class="row">
        <?php foreach($gallery as $gal): ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-gallery-box">
              <img style="width:350px; height: 250px;" src="<?= base_url($gal->gallery_image_1)  ?>" alt="image">
              <a href="<?= base_url($gal->gallery_image_1)  ?>" class="gallery-btn" data-imagelightbox="popup-btn">
                <i class="flaticon-view"></i>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>


<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->