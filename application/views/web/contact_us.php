
<div class="page-title-area item-bg1" style="background-image:url(<?= base_url($bg->background_image_1) ?>); background-size: cover;">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                      <li><a href="<?= base_url('/') ?>">Home</a></li>
                      <li>Contact Us</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>




<section class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box" style="min-height:45vh">
                    <i class="fa fa-map-marker"></i>
                    <div class="content-title">
                        <h3>Address</h3>
                        <p><?= $basic->com_basic_address  ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box" style="min-height:45vh">
                    <i class="fa fa-envelope"></i>
                    <div class="content-title">
                        <h3>Email</h3>
                        <a href="mailto:<?= $basic->com_basic_email ?>"> <?= $basic->com_basic_email ?> </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-contact-box" style="min-height:45vh">
                    <i class="fa fa-phone"></i>
                    <div class="content-title">
                        <h3>Phone</h3>
                        <a href="tel:<?= $basic->com_basic_contact ?>"> <?= $basic->com_basic_contact ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <h3 style="color:#209e2e">Drop us a message for any query</h3>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form id="contacts">
                        <div class="row">

                            <!-- ALERT MSG -->
                            <div class="alert alert-info alert-dismissible" id="sent" style="display: none;">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Thanks!</strong> We will contact you soon.
                            </div>
                            <div class="alert alert-danger alert-dismissible" id="notsent" style="display: none;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Failed!</strong> Please try again.
                            </div>
                            <!-- ALERT MSG -->

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    Send Message
                                    <span></span>
                                </button>
                            </div>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>




<!-- SUBSCRIBE -->
<section class="subscribe-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3 style="color:#209e2e">Subscribe Us </h3>
            <p>
                Subscribe to our newsletter to get the latest updates from us.
            </p>
        </div>

        

        <form class="newsletter-form" id="subscription2">

        <!-- INFO MSG -->
        <div class="alert alert-info alert-dismissible" id="done2" style="display: none;">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> You have been subscribed to our newsletter.
        </div>
        <div class="alert alert-danger alert-dismissible" id="notdone2" style="display: none;">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Failed!</strong> Please try again.
        </div>
        <!-- INFO MSG -->

            <input type="text" class="input-newsletter" placeholder="Enter your email" name="email" required autocomplete="on">
            <input type="submit" class="default-btn" id="button" value="subscribe now" name="subscribe">
            <!-- <button type="submit">
                Subscribe Now
                <i class="flaticon-plus"></i>
            </button> -->
            <!-- <div id="validator-newsletter" class="form-result"></div> -->
        </form>
    </div>
</section>
<!-- SUBSCRIBE -->




<!-- ASSOCIATES -->
<?php
include('associates.php');
?>
<!-- ASSOCIATES -->







<!-- AJAX SUBMIT FORM -->


<script type="text/javascript">
    // CONTACT US FORM --------------------
    $('#contacts').submit(function() {

        // Call ajax for pass data to other place
        $.ajax({
            type: 'POST',
            url: '<?= base_url("Web/ContactUs/insert") ?>',
                data: $(this).serialize() // getting filled value in serialize form
            })
            .done(function(data) { // if getting done then call.
                $("#sent").show(2000).fadeOut(6000); // show the response
                $("#submit").attr("disabled", true);
                document.getElementById("contact").reset();
            })
            .fail(function() { // if fail then getting message

                // just in case posting your form failed
                $("#notsent").show(2000).fadeOut(6000); // show the response

            });

        // to prevent refreshing the whole page
        return false;

    });
</script>
<!-- AJAX SUBMIT FORM -->




