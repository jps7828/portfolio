<!-- Start Footer Area -->
<div class="rn-footer-area rn-section-gap section-separator">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-area text-center">

                    <div class="logo">
                        <a href="<?= base_url('/'); ?>">
                            <img src="<?= base_url($basic->com_basic_logo) ?>" alt="logo">
                        </a>
                    </div>

                    <p class="description mt--30">© 2021. All rights reserved by <a target="_blank" href=""> JPS.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Area -->

<!-- JS ============================================ -->
<script src="<?= base_url() ?>assets/web/js/vendor/modernizer.min.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/feather.min.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/slick.min.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/text-type.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/wow.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/aos.js"></script>
<script src="<?= base_url() ?>assets/web/js/vendor/particles.js"></script>
<!-- main JS -->
<script src="<?= base_url() ?>assets/web/js/main.js"></script>
</body>



</html>


<script>
    // CONTACT US FORM --------------------
    $(document).ready(function() {


        $('#submit').click(function(e) {
            e.preventDefault();


            var name = $("#name").val();
            var mobile = $("#mobile").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();


            $.ajax({
                type: "POST",
                url: "Web/ContactUs/insert",
                dataType: "json",
                data: {
                    name: name,
                    mobile: mobile,
                    email: email,
                    subject: subject,
                    message: message
                },
                success: function(data) {
                    if (data.code == "200") {
                        $("#sent").show(2000).fadeOut(9000); // show the response
                        $("#submit").attr("disabled", true);
                        $("#display-error").css("display","none");
                        $('#contacts').reset();
                    } else {
                        $("#display-error").html("<ul>"+data.msg+"</ul>");
                        $("#display-error").css("display","block");
                        $("#notsent").show(2000); // show the response

                    }
                }
            });


        });
    });
</script>