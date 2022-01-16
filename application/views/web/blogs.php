



<!-- PAGE TITLE -->
<div class="breadcumb-area bg-img-4 ptb-100" style="background-image: url(<?= base_url($bg->background_image_1) ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>
                       Our Blogs
                    </h2>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li><span>Our Blogs</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE TITLE -->















<!-- 
<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">


          <?php foreach($blogs as $blog): ?>
            <div class="isotope-item col-lg-4 col-md-6 col-sm-12">
              <article class="vertical-item content-padding with_background text-center  overflow-hidden">
                <div class="item-media">
                  <img src="<?= base_url($blog->blog_image_1) ?>" alt="blog">
                </div>
                <div class="item-content">
                  <p class="text-center item-meta">
                    <span class="entry-date highlightlinks">
                      <a href="<?= base_url($blog->blog_link) ?>" rel="bookmark">
                        <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                          <?= $blog->blog_date ?>
                        </time>
                      </a>
                    </span>
                  </p>
                  <h4 class="entry-title">
                    <a href="blog-single-left.html">
                      <?= $blog->blog_title ?>
                    </a>
                  </h4>
                  <p class="margin_0">
                    <?= substr($blog->blog_description, 0,135)  ?>...
                  </p>
                  <a href="<?= base_url($blog->blog_link) ?>" class="read-more"></a>
                </div>
              </article>
            </div>
          <?php endforeach ; ?>




          

          

        </div>

        <div class="row">
          <div class="col-sm-12 text-center">
            <img src="<?= base_url() ?>assets/web/img/loading.png" alt="" class="fa-spin" />
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

 -->









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
                        <img style="background-color: green; padding: 0px; height: 50vh;" src="<?= base_url($blog->blog_image_1) ?>" alt="">
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

            <!-- <div class="col-lg-4  col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="assets/images/blog/1.jpg" alt="">
                        <ul>
                            <li>20</li>
                            <li>Janu</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> Love</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 15 Comments</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">British military courts use aginst protesters busines cultural...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="assets/images/blog/2.jpg" alt="">
                        <ul>
                            <li>20</li>
                            <li>Janu</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>1 Love</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 12 Comments</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-gallary.html">South korea’s moon jae in sworn vowing to address north...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="assets/images/blog/3.jpg" alt="">
                        <ul>
                            <li>25</li>
                            <li>Jun</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> 5 Love</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 18 Comments</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Man looking at his note remember to daily tasks...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="assets/images/blog/8.jpg" alt="">
                        <ul>
                            <li>15</li>
                            <li>April</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>15 Love</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 08 Comments</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-video.html">Robots helped inspire and deep learning might become...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="assets/images/blog/9.jpg" alt="">
                        <ul>
                            <li>25</li>
                            <li>May</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> 5 Love</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 30 Comments</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Defying the traditional and mainstream parties...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="assets/images/blog/12.jpg" alt="">
                        <ul>
                            <li>01</li>
                            <li>Feb</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> 16 Love</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>8 Comments</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-audio.html">Packing macron anddis insted about vote against chat...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis, adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat quaerat.</p>
                    </div>
                </div>
            </div> -->
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

