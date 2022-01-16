

<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>All Products</h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li> Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>







<!--Products-->
<div class="team_wrap seaction_margin pb-70" style="background-image: none; padding-top:50px;">
    <div class="container">
        <div class="heading_wrap animated fades text-center">
            <h2 style="color:#209e2e; padding-bottom:20px">Our Products</h2>
        </div>
        <div class="row">
            <?php foreach($products_all as $product): ?>
                <div class="col-sm-12 col-md-4  animated slide mb-5">
                    <div class=" hover2  text-center p-0 m-0">
                        <figure>
                            <a href="<?= base_url($product->product_link)  ?>">
                                <img style="height: 40vh; width: 100%;" src="<?= base_url($product->product_image_1) ?>" alt="img" />
                            </a>
                        </figure>
                        <h4 style="font-size: 1.5rem; padding: 10px;">
                            <?= $product->product_name ?>
                        </h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--Products-->











<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->