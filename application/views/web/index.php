<main class="main-page-wrapper">

    <!-- Start Slider Area -->
    <div id="home" class="rn-slider-area">
        <div class="slide slider-style-1">
            <div class="container">
                <div class="row row--30 align-items-start">
                    <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                        <div class="content">
                            <div class="inner">
                                <span class="subtitle my-center-text">Welcome to my world </span>
                                <h1 class="title">Hi, I’m <span>Jitendra Singh</span><br>
                                    <span class="header-caption" id="page-top">
                                        <!-- type headline start-->
                                        <span class="cd-headline clip is-full-width">
                                            <span>a </span>
                                            <!-- ROTATING TEXT -->
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible">Developer...</b>
                                                <b class="is-hidden">Professional Coder.</b>
                                                <b class="is-hidden">Designer...</b>
                                            </span>
                                        </span>
                                        <!-- type headline end -->
                                    </span>
                                </h1>

                                <div>
                                    <p class="description">I Develop websites on various popular platforms like PHP (Codeigniter).
                                        Convert static websites into dynamic one.
                                        Deciding coding requirements for website creation, security and scripts.
                                        Testing websites, performing user testing and troubleshooting prior to live deployment.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                    <div class="social-share-inner-left">
                                        <span class="title">find me on</span>
                                        <ul class="social-share d-flex liststyle">
                                            <?php foreach ($social_network as $social) : ?>
                                                <li class="<?= $social->social_network_icon ?>">
                                                    <a href="<?= $social->social_network_link ?>" target="_blank">
                                                        <i data-feather="<?= $social->social_network_icon ?>"></i>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                    <div class="skill-share-inner">
                                        <span class="title">best skill on</span>
                                        <ul class="skill-share d-flex liststyle">
                                            <?php foreach ($skills as $skill) : ?>
                                                <li title="<?= strtoupper($skill->skill_name) ?>">
                                                    <img src="<?= base_url($skill->skill_image_1) ?>" alt="skills image">
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 order-lg-2 col-lg-5">
                        <div class="">
                            <div class="inner">
                                <img src="<?= base_url($basic->com_basic_logo_other) ?>" alt="Personal Portfolio Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start Service Area -->
    <div class="rn-service-area rn-section-gap section-separator" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                        <span class="subtitle">Features</span>
                        <h2 class="title">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row row--25 mt_md--10 mt_sm--10">
                <?php foreach ($about_us as $about) : ?>
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <?= $about->about_us_caption_1 ?>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#"><?= $about->about_us_title ?></a></h4>
                                    <p class="description"> <?= $about->about_us_details ?> </p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End Service Area  -->

    <!-- Start Portfolio Area -->
    <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                        <span class="subtitle">Visit my portfolio and put your feedback</span>
                        <h2 class="title">My Portfolio</h2>
                    </div>
                </div>
            </div>

            <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                <!-- Start Single Portfolio -->
                <?php foreach ($portfolio_all as $portfolio) : ?>
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-toggle="modal" data-target="#<?php $string = $portfolio->portfolio_name;
                                                                                    $newstring = str_replace(' ', '', $string);
                                                                                    echo $newstring; ?>">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img class="portfolio-thumbnail" src="<?= $portfolio->portfolio_image_1 ?>" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)"><?= $portfolio->portfolio_heading ?></a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                                600</span>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="<?= $portfolio->portfolio_link ?>" target="_blank"> <?= strtoupper($portfolio->portfolio_name) ?>
                                            <i class="feather-arrow-up-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- End Single Portfolio -->
            </div>
        </div>
    </div>
    <!-- End portfolio Area -->

    <!-- Start Resume Area -->
    <div class="rn-resume-area rn-section-gap section-separator" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                        <span class="subtitle">2+ Years of Experience</span>
                        <h2 class="title">My Resume</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--45">
                <div class="col-lg-12">
                    <ul data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="professional-tab" data-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">
                                professional Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">experience</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('assets/web/jitendra-pratap-singh.pdf') ?>" role="tab" aria-controls="experience" aria-selected="false" download>Download</a>
                        </li>

                    </ul>
                    <!-- Start Tab Content Wrapper  -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="rn-nav-content tab-content" id="myTabContents">


                        <!-- Start Single Tab  -->
                        <div class="tab-pane fade show active" id="professional" role="tabpanel" aria-labelledby="professional-tab">
                            <div class="personal-experience-inner mt--40">
                                <div class="row row--40">

                                    <!-- Start Single Progressbar  -->
                                    <div class="col-lg-6 col-md-6 col-12 mt_sm--60">
                                        <div class="progress-wrapper">
                                            <div class="content">
                                                <span class="subtitle">Features</span>
                                                <h4 class="maintitle">Development Skills</h4>
                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">PHP</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">85%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">Codeigniter</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">80%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">JAVASCRIPT</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">90%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">MySQL</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 75%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">75%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">CSS 3</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">70%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Progressbar  -->

                                    <!-- Start Single Progressbar  -->
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="progress-wrapper">
                                            <div class="content">
                                                <span class="subtitle">Features</span>
                                                <h4 class="maintitle">Libraries & Tools</h4>
                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">Bootstrap 5</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 100%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">100%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">Git Hub</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" role="progressbar" style="width: 95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">95%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">Feather Icons</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 60%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">60%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">Social Links</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">70%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                                <!-- Start Single Progress Charts -->
                                                <div class="progress-charts">
                                                    <h6 class="heading heading-h6">API</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".7s" role="progressbar" style="width: 90%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">90%</span></div>
                                                    </div>
                                                </div>
                                                <!-- End Single Progress Charts -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Progressbar  -->

                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab  -->




                        <!-- Start Single Tab  -->
                        <div class="tab-pane  fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                            <div class="personal-experience-inner mt--40">
                                <div class="row">
                                    <!-- Start Skill List Area  -->
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="content">
                                            <span class="subtitle">2008 - 2017</span>
                                            <h4 class="maintitle">Education</h4>
                                            <div class="experience-list">

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>MBA</h4>
                                                                <span>University of Pune (ASM IBMR)</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2017</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Completed my MBA education from ASM IBMR college of Pune university</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4> B. Com.</h4>
                                                                <span>APS University Rewa (SRKC)</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2012</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Completed my Bachelor of Commerce graduation degree from SRKC college Satna affiliated from APS university Rewa M.P.</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>School </h4>
                                                                <span>Kendriya Vidyalaya (Satna)</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2008</span>
                                                            </div>
                                                        </div>
                                                        <p class="description"> Completed my Schooling from Kendriya vidhyalaya Satna M.P.</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Skill List Area  -->

                                    <!-- Start Skill List Area 2nd  -->
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="content">
                                            <span class="subtitle">2022</span>
                                            <h4 class="maintitle">Certification</h4>
                                            <div class="experience-list">

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>PHP</h4>
                                                                <span> LinkedIn Learning (Certification & Skills)</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2021</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Complete PHP certification for technological refreshment up-to-date.</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4> PHP Training</h4>
                                                                <span>Crisil Infotech (Bhopal M.P.)</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2019</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Completed my PHP essential training from Crisil Infotech Software Development Company Bhopal Madhya Pradesh</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>PGDCA </h4>
                                                                <span> Makhanlal Chaturvedi University (MCU)</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2012</span>
                                                            </div>
                                                        </div>
                                                        <p class="description"> PGDCA - Post Graduate Diploma in Computer Applications from MCU Bhopal</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Skill List Area  -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab  -->



                        <!-- Start Single Tab  -->
                        <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                            <div class="personal-experience-inner mt--40">
                                <div class="row">
                                    <!-- Start Skill List Area  -->

                                    <!-- End Skill List Area  -->

                                    <!-- Start Skill List Area 2nd  -->
                                    <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                        <div class="content">
                                            <span class="subtitle">2022 - 2016</span>
                                            <h4 class="maintitle">Job Experience</h4>
                                            <div class="experience-list">

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>Crisil Infotech</h4>
                                                                <span>PHP Web Developer</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2019-2022</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">
                                                            PHP website development on codeigniter MVC PHP framework
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>Axis securities</h4>
                                                                <span>Executive</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2018</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Axis Securities Ltd. office located in Gurgaon/Gurugram Haryana</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>Syntel - Atos Syntel</h4>
                                                                <span>Associate </span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2016-2017</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">State Street Syntel Services Ltd. BPO services company located in Pune Maharashtra</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Skill List Area  -->

                                    <!-- Start Skill List Area 2nd  -->
                                    <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                        <div class="content">
                                            <span class="subtitle">2022 - 2016</span>
                                            <h4 class="maintitle">Other Experience</h4>
                                            <div class="experience-list">

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>TVS Co.</h4>
                                                                <span>Sales Promotion</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2016</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">
                                                            Internship - Sales Promotion Strategies formulation and implementation at Pune Chinchwad-Pimpri area
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>ASM IBMR</h4>
                                                                <span>Mindscape - Case Study Competiton</span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2015</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Mindscape - Case Study Competiton organised by Audhyogic Shikshan Mandal (ASM) group of institutes </p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                                <!-- Start Single List  -->
                                                <div class="resume-single-list">
                                                    <div class="inner">
                                                        <div class="heading">
                                                            <div class="title">
                                                                <h4>Football</h4>
                                                                <span>Inter - School </span>
                                                            </div>
                                                            <div class="date-of-time">
                                                                <span>2005</span>
                                                            </div>
                                                        </div>
                                                        <p class="description">Football inter-school tournament organised among Kendriya Vidhyalaya schools at Sagar M.P.</p>
                                                    </div>
                                                </div>
                                                <!-- End Single List  -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Skill List Area  -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab  -->



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Resume Area -->

    <!-- Start Testimonia Area  -->
    <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="section-title text-center">
                        <span class="subtitle">What Clients Say</span>
                        <h2 class="title">Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                <div class="col-lg-12">
                    <div class="testimonial-activation testimonial-pb mb--30">
                        <?php foreach ($testimonials as $testimonial) : ?>
                            <!-- Start Single testiminail -->
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <div class="card-thumbnail">
                                            <img src="<?= base_url($testimonial->slider_image_1) ?>" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10"><?= $testimonial->slider_heading ?></span>
                                            <h3 class="title"><?= $testimonial->slide_name ?></h3>
                                            <span class="designation"><?= $testimonial->slider_sub_heading ?></span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title"><?= $testimonial->slider_sub_heading ?></h3>
                                                <span class="date"></span>
                                            </div>
                                            <div class="rating">
                                                <img src="<?= base_url() ?>assets/web/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/web/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/web/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/web/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/web/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            <?= $testimonial->slider_caption ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single testiminail -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonia Area  -->

    <!-- Start Client Area -->
    <div class="rn-client-area rn-section-gap section-separator" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span class="subtitle">Popular Clients</span>
                        <h2 class="title">Awesome Clients</h2>
                    </div>
                </div>
            </div>

            <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                <div class="col-lg-4">
                    <div class="d-flex flex-wrap align-content-start h-100">
                        <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                            <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-Javascript" role="tab" aria-controls="javascript" aria-selected="true">JavaScript</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="tab" href="#v-pills-Design" role="tab" aria-controls="design" aria-selected="true">PHP</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" id="v-pills-wordpress-tab" data-toggle="tab" href="#v-pills-Wordpress" role="tab" aria-controls="wordpress" aria-selected="true">Codeigniter</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="v-pills-settings-tabs" data-toggle="tab" href="#v-pills-settings" role="tab" aria-controls="react" aria-selected="true">HTML to PHP</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="v-pills-laravel-tabs" data-toggle="tab" href="#v-pills-laravel" role="tab" aria-controls="laravel" aria-selected="true">Bootstrap</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="v-pills-python-tabs" data-toggle="tab" href="#v-pills-python" role="tab" aria-controls="python" aria-selected="true">MySQL</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tab-area">
                        <div class="d-flex align-items-start">
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade" id="v-pills-Javascript" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="client-card">
                                        <?php foreach ($clients as $client) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="<?= base_url($client->clients_image_1) ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"> <?= $client->clients_name ?> </a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="v-pills-Design" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="client-card">
                                        <?php foreach ($clients as $client) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="<?= base_url($client->clients_image_1) ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"> <?= $client->clients_name ?> </a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                                    <div class="client-card">
                                        <?php foreach ($clients as $client) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="<?= base_url($client->clients_image_1) ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"> <?= $client->clients_name ?> </a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                                    <div class="client-card">
                                        <?php foreach ($clients as $client) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="<?= base_url($client->clients_image_1) ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"> <?= $client->clients_name ?> </a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-laravel" role="tabpanel" aria-labelledby="v-pills-laravel-tabs">
                                    <div class="client-card">
                                        <?php foreach ($clients as $client) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="<?= base_url($client->clients_image_1) ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"> <?= $client->clients_name ?> </a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
                                    <div class="client-card">
                                        <?php foreach ($clients as $client) : ?>
                                            <!-- Start Single Brand  -->
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="#"><img src="<?= base_url($client->clients_image_1) ?>" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><a href="#"> <?= $client->clients_name ?> </a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single Brand  -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End client section -->

    <!-- Pricing Area -->
    <div class="rn-pricing-area rn-section-gap section-separator" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-5 mb_md--40 mb_sm--40 small-margin-pricing">
                    <div class="d-block d-lg-flex text-center d-lg-left section-flex flex-wrap align-content-start h-100">
                        <div class="position-sticky sticky-top rbt-sticky-top-adjust">
                            <div class="section-title text-left">
                                <span class="subtitle text-center text-lg-left">Pricing</span>
                                <h2 class="title text-center text-lg-left">My Pricing</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-7">
                    <!-- Pricing Area -->
                    <div class="navigation-wrapper">
                        <ul class="nav " id="myTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-style" id="test-tab" data-toggle="tab" href="#test" role="tab" aria-controls="test" aria-selected="false">Static</a>
                            </li>

                            <li class="nav-item  recommended">
                                <a class="nav-style active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Dynamic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-style" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Premium</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade " id="test" role="tabpanel" aria-labelledby="test-tab">
                                <!-- Pricing Start -->
                                <div class="rn-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Make Your Single Page</h2>
                                            <span>Codeigniter</span>
                                        </div>
                                        <div class="header-right">
                                            <span>₹5000</span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description">
                                            All the contents are organised and developed in a single page based application website like landing page etc.
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Single Codeigniter page</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Same page Menu progression</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Section wise content</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="mailto:jps7828@gmail.com" class="rn-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>2 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>2 Revissions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>

                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Pricing Start -->
                                <div class="rn-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Website with Admin Power</h2>
                                            <span>Codeigniter</span>
                                        </div>
                                        <div class="header-right">
                                            <span>₹10000</span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description">
                                            Dynamic multipage website with admin options to update contents on the go.
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>5 dynamic pages</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Separate Admin Panel</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Responsive Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload</p>
                                                </div>

                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Subscription form</p>
                                                </div>

                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Contact Form</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="mailto:jps7828@gmail.com" class="rn-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line d-flex">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>4 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>Unlimited Revisions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- Pricing Start -->
                                <div class="rn-pricing">
                                    <div class="pricing-header">
                                        <div class="header-left">
                                            <h2 class="title">Fully Customised</h2>
                                            <span>Codeigniter</span>
                                        </div>
                                        <div class="header-right">
                                            <span>₹20000</span>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <p class="description">
                                            Custom made website with desired theme and elements
                                        </p>
                                        <div class="check-wrapper">
                                            <div class="left-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>5 custom pages</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Design Customization</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Responsive Design</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Content Upload & Update</p>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Mobile friendly</p>
                                                </div>
                                                <div class="check d-flex">
                                                    <i data-feather="check"></i>
                                                    <p>Custom Contact Links</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-footer">
                                        <a href="mailto:jps7828@gmail.com" class="rn-btn d-block">
                                            <span>ORDER NOW</span>
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                        <div class="time-line d-flex">
                                            <div class="single-cmt d-flex">
                                                <i data-feather="clock"></i>
                                                <span>7 Days Delivery</span>
                                            </div>
                                            <div class="single-cmt d-flex">
                                                <i data-feather="activity"></i>
                                                <span>Unlimited Revisions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
    <!-- pricing area -->
    <!-- Start News Area -->

    <!-- ENd Mews Area -->
    <!-- Start Contact section -->
    <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">Contact</span>
                        <h2 class="title">Contact With Me</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div class="col-lg-5">
                    <div class="contact-about-area">
                        <div class="thumbnail">
                            <img src="<?= base_url('assets/web/images/contact/contact1.png') ?>" alt="contact-img">
                        </div>
                        <div class="title-area">
                            <h4 class="title">Jitendra Pratap Singh</h4>
                            <span>PHP Developer</span>
                        </div>
                        <div class="description">
                            <p>I am available for freelance work. Connect with me via mail and call.
                            </p>
                            <span class="phone">Phone: <a href="tel:<?= $basic->com_basic_contact ?>">+91 <?= $basic->com_basic_contact ?> </a></span>
                            <span class="mail">Email: <a href="mailto:<?= $basic->com_basic_email ?>"> <?= $basic->com_basic_email ?> </a></span>
                        </div>
                        <div class="social-area">
                            <div class="name">FIND WITH ME</div>
                            <div class="social-icone">
                                <?php foreach ($social_network as $social) : ?>
                                    <a class="mb-4" href="<?= $social->social_network_link ?>" target="_blank">
                                        <i class="text-white-hover" data-feather="<?= $social->social_network_icon ?>"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div class="introduce">
                            <form class="rnt-contact-form rwt-dynamic-form row" id="contact_me">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input class="form-control form-control-lg" name="name" id="name" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input class="form-control" name="mobile" id="mobile" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control form-control-sm" id="email" name="email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="subject">subject</label>
                                        <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div id="spinner" style="display: none;" class="p-3">
                                        <img src="<?= base_url('assets/web/images/spinner.gif') ?>" width="80" />
                                    </div>


                                    <!-- ALERT MSG -->
                                    <div class="alert alert-info alert-dismissible p-3" id="sent" style="display: none;">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Thanks!</strong> for contacting us, We will contact you soon.
                                    </div>
                                    <div class="alert alert-danger alert-dismissible p-3" id="notsent" style="display: none;">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Failed!</strong> Please try again.
                                    </div>
                                    <!-- ALERT MSG -->

                                    <div id="display-error" style="color: red !important; display: none" class="text-danger">
                                    </div>

                                    <button name="submit" type="submit" id="submit" class="rn-btn">
                                        <span>SEND MESSAGE</span>
                                        <i data-feather="arrow-right"></i>
                                    </button>
                                </div>

                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contuct section -->

    <!-- Modal Portfolio Body area Start -->
    <?php foreach ($portfolio_all as $portfolio) : ?>
        <div class="modal fade" id="<?php $string = $portfolio->portfolio_name;
                                    $newstring = str_replace(' ', '', $string);
                                    echo $newstring; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="portfolio-popup-thumbnail">
                                    <div class="image">
                                        <img class="w-100" src="<?= $portfolio->portfolio_image_1 ?>" alt="slide">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="text-content">
                                    <h3>
                                        <span>Featured - Design</span> <?= $portfolio->portfolio_name ?>
                                    </h3>
                                    <p class="mb--30">
                                        <?= $portfolio->portfolio_details ?>
                                    </p>
                                    <div class="button-group mt--20">
                                        <a href="<?= $portfolio->portfolio_link ?>" class="rn-btn thumbs-icon" target="_blank">
                                            <span>LIKE THIS</span>
                                            <i data-feather="thumbs-up"></i>
                                        </a>
                                        <a href="<?= $portfolio->portfolio_link ?>" class="rn-btn" target="_blank">
                                            <span>VIEW PROJECT</span>
                                            <i data-feather="chevron-right"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- End of .text-content -->
                            </div>
                        </div>
                        <!-- End of .row Body-->
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- End Modal Portfolio area -->
    <!-- Modal Blog Body area Start -->
    <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-news" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>

                <!-- End of .modal-header -->

                <div class="modal-body">
                    <img src="assets/images/blog/blog-big-01.jpg" alt="news modal" class="img-fluid modal-feat-img">
                    <div class="news-details">
                        <span class="date">2 May, 2021</span>
                        <h2 class="title">Digital Marketo to Their New Office.</h2>
                        <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                            facer
                            possim assum.
                            Typi non
                            habent claritatem insitam; est usus legentis in iis qui facit eorum
                            claritatem.
                            Investigationes
                            demonstraverunt
                            lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                            dynamicus, qui
                            sequitur
                            mutationem consuetudium lectorum.</p>
                        <h4>Nobis eleifend option conguenes.</h4>
                        <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                            posuere
                            massa nunc quis
                            dui.
                            Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                            nisi.
                            Curabitur sit
                            amet
                            suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                            imperdiet risus
                            leo,
                            in rutrum erat dignissim id.</p>
                        <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                            Class aptent
                            taciti sociosqu
                            ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                            nisi
                            tortor. Morbi
                            leo
                            nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                            bibendum. Morbi
                            nec
                            efficitur ex.</p>
                        <h4>Mauris tempor, orci id pellentesque.</h4>
                        <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                            dapibus dignissim.
                            Pellentesque
                            quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                            rhoncus dolor, a
                            facilisis
                            neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                            tristique.
                            Nullam in
                            aliquam
                            diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                            efficitur
                            sollicitudin
                            auctor.
                            Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                            et.</p>
                    </div>

                    <!-- Comment Section Area Start -->
                    <div class="comment-inner">
                        <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="rnform-group"><input type="text" placeholder="Name">
                                    </div>
                                    <div class="rnform-group"><input type="email" placeholder="Email">
                                    </div>
                                    <div class="rnform-group"><input type="text" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="rnform-group">
                                        <textarea placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Section End -->
                </div>
                <!-- End of .modal-body -->
            </div>
        </div>
    </div>
    <!-- End Modal Blog area -->
    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->
    <!-- whatsapp -->
    <div class="whatsapp" id="whatsApp" style="display: none;">
        <div>
            <a href="https://api.whatsapp.com/send?phone=917828550802&text=Hello%20Jitendra%2C%20I%20would%20like%20to%20have%20a%20website." target="_blank">
                <img src="<?= base_url('assets/web/images/whatsapp.png') ?>" alt="whatsapp connect">
            </a>
        </div>
    </div>
    <!-- whatsapp -->

    <!-- Start Right Demo  -->
    <div class="rn-right-demo">
        <!-- <button class="demo-button">
            <span class="text"></span>
        </button> -->
    </div>
    <!-- End Right Demo  -->



</main>