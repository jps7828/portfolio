<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body style="background-color: #528FF0  ; display:flex; align-items:center; justify-content:center; margin-top:200px;">

<a href="<?php echo base_url('/'); ?>">
    <input type="button" value="Cancel" style="background-color: #f37254; color: #fff; padding: 30px; cursor: pointer; font-size:2rem; margin-right: 10px;">
</a>


<button onclick="location.reload()" style="background-color: seagreen; color: #fff; padding: 30px 40px 30px 40px; cursor: pointer; font-size:2rem">
    Retry
</button>

<!-- <button id="rzp-button1" style="background-color: #3742ad; color: #fff; padding: 30px; cursor: pointer; font-size:2rem">
    Pay with Razorpay 
</button> -->

<?php $id = $this->db->insert_id();  $_SESSION['id'] = $id; ?>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

// document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    // e.preventDefault();
// }
</script>




</body>

</html>

