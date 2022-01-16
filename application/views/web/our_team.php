
<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Our Team</h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>





<!--Team-->
<section class="team-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h3 style="color:#209e2e">Team</h3>
            </div>
            <div class="row">
                <?php foreach($teams as $team): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team-item" style="height: 65vh">
                            <div class="team-image">
                                <img style="height: 45vh; width: 25vw;" src="<?= base_url($team->team_image_1) ?>" alt="team">
                            </div>
                            <div class="team-content">
                                <h3>
                                    <u><?= $team->team_name ?></u>
                                </h3>
                                <span>
                                    <?= $team->team_details ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<!--Team-->




<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->