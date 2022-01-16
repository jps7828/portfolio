


<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>
                        <?= $product->product_name ?>
                    </h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li> Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>







<!--Who We Are-->
<div class="features" style="padding: 100px 20px 100px 20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img style="width: 100%;" class="img-responsive hover2 " src="<?= base_url($product->product_image_1) ?>" alt="">
            </div>
            <div class="col-sm-12 col-md-6">

                <div class="heading_wrap animated slide">
                    <h2 class="heading_a"> <span> <?= $product->product_name ?></span></h2>
                    <p>
                        <?= $product->product_details ?>
                    </p>

               </div>
           </div>
       </div>
   </div>
</div>
<!--Who We Are-->








<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->