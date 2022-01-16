


<!-- PAGE TITLE -->
<div class="breadcumb-area bg-img-4 ptb-100" style="background-image: url(<?= base_url($bg->background_image_1) ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>
                        <?= $blog->blog_title ?>
                    </h2>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li><span>Blogs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE TITLE -->






<!-- BLOG -->
<div class="about-area ptb-100">
    <div class="container" style="padding-bottom: 100px;">
        <div class="row">
            <div class="col-12">
                <div class="about-wrap text-left">
                    <img style="width: 90vw; background-color: green" alt="about-us image" src="<?= base_url($blog->blog_image_1) ?>">
                    <h3 class="pt-4 pb-0 mb-0">
                        <a href="#">
                            <?= $blog->blog_title ?>
                        </a>
                    </h3>
                    <p class="p-0 m-0"><?= $blog->blog_date ?></p>
                    <p>
                        <?= $blog->blog_description ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BLOG -->







<!-- BLOGS -->
<div class="blog-area">
    <div class="container">
        <div class="col-lg-12">
            <div class="section-title  text-center">
                <h2><a href="">Latest News</a></h2>
                <img src="assets/images/section-title.png" alt="">
            </div>
        </div>
        <div class="row">

          <?php foreach($blogs as $blog): ?>
            <div class="col-lg-4  col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img style="background-color: green; padding: 10px; height: 50vh;" src="<?= base_url($blog->blog_image_1) ?>" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> <?= $blog->blog_date ?></a></li>
                            </ul>
                        </div>
                        <h3 style="height: 60px;"><a href="<?= base_url($blog->blog_link) ?>">
                        <?= $blog->blog_title ?></a></h3>
                        <p>
                          <?= substr($blog->blog_description, 0,135)  ?>...
                        </p>
                        <a href="<?= base_url($blog->blog_link) ?>" class="arrow-btn"> <u> Read More... </u> <span></span></a>
                    </div>
                </div>
            </div>
          <?php endforeach ; ?>

           
            <div class="col-12">
                <div class="pagination-wrapper text-center mb-30">
                    <ul class="page-numbers">
                        <li><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i></a></li>
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BLOGS -->