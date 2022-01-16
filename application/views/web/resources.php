
<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2><?= $resources_name ?></h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li>Resources</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>







<div class="container mt-5 mb-5">

  <section class="section white text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-sm-offset-0">
          <!-- section title -->
          <div class="heading_wrap animated fades">
            <h4 class="heading_a" style="color:#209e2e"><span> <?= $resources_name ?> </span> </h4>
          </div>

        </div>
      </div>
      <div class="row" style="align-items: center; justify-content: center; display: flex; flex-wrap: wrap;">

        <?php foreach($resources as $item): ?>
          <div class="col-md-4 col-sm-6" style=" margin-bottom: 50px;">
            <!-- single gallery -->
            <div class="hover square shadow">
              <a href="<?= base_url($item->resources_image)  ?>" data-lightbox="example-set" data-title="garden">
                <img style="width: 100%; height:300px;" src="<?= base_url($item->resources_image)  ?>" alt=""></a>

              </div>
              <a href="<?= base_url($item->resources_file)?>" target="blank" download>
                <button style="margin-top: -0px; width:100%;" class="mt-1 button btn btn-primary btn-block btn-md shadow default-btn">
                  Download 
                </button>
              </a>

              <!-- <a class="cta-btn btn-block" href="<?= base_url($item->resources_file)?>" target="blank" download> 
                <button class="btn btn-lg btn-block  button"   style="margin-top: -10px; width: 100%"> 
                  Download 
                </button>
              </a> -->

            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>

  </div>






















  <?php
  include('associates.php');
  ?>