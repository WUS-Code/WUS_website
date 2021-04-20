<?php
function redirectTohttps() {
    if($_SERVER['HTTPS']!="on") {
        $redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        header("Location:$redirect",TRUE,301);
    }
}
redirectTohttps();
?>
<!doctype html>
<html class="no-js" lang="zxx">
	<head>
	    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MJPYQGZWLZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MJPYQGZWLZ');
</script>
<script src="https://code.jquery.com/jquery-3.5.0.js" ></script>

		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Worker Union Support</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/modal-alerts.css">

		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="shortcut icon" type="image/ico" href="images/fevicon.png" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/space.css">
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/overright.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/vendor/modernizr-2.8.3.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="js/modal-alerts.js"></script>
		<style>
		    .publish-sec {
                display: block;
                position: relative;
                margin-top: 15px;
                clear: both;
                float: left;
            }
            .publish-sec h2 {
                display: block;
                clear: both;
                float: left;
                width: 100%;font-size: 18px;
                margin: 0 0 15px 0;
                padding: 0 0 15px 0;
                border-bottom: 1px solid #cdcdcd;
            }
            .publish-sec ul {
                display: block;
                clear: both;
                float: left;
                list-style: none;
                padding: 0;
            }
            .publish-sec ul li {
                display: block;
                clear: both;
                float: left;
                list-style: none;
                padding: 0 0 2px 0;
                color: #334be9;
                border: none;
                vertical-align: middle;
                padding-left: 25px;
            }
            .publish-sec ul li:before {
                content: "";
                background-image: url(images/blog/list-icon.jpg);
                width: 20px;
                height: 20px;
                display: inline-block;
                position: absolute;
                margin-right: 10px;
                margin-top: 0;
                margin-left: -25px;
            }
            .publish-sec ul li a, .publish-sec ul li a:hover, .publish-sec ul li a:visited{
                color: #334be9;
            }
            .publish-sec ul li .btitle {
                color: #232323;
                margin: 0 10px;
                font-size: 12px;
            }
		</style>
	</head>
	

<script src="https://code.jquery.com/jquery-3.5.0.js" ></script>

<button id="rzp-button1" class="btn" style="display:none">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    //"key": "rzp_test_x0lRECo4dtCDcc", // Enter the Key ID generated from the Dashboard
   "key": "rzp_live_lkINbe7Ji9rlci", // Enter the Key ID generated from the Dashboard
    "amount": "29900 ", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
  //"amount": "100 ",
    "currency": "INR",
    "name": "WUS",
    "description": "Worker Union Support",
    "image": "https://www.workerunionsupport.com/images/fevicon.png",
    "order-id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alerts.show({ 
            icon:"images/fevicon.png",

  title: 'Sucess', 
  message: 'Payment Completed Sucessfully!!' 
});
    //    alert("Payment Completed Sucessfully!!");
        window.location.replace("https://www.workerunionsupport.com/");
//        alert(response.razorpay_payment_id);
  //      alert(response.razorpay_order_id);
    //    alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "",
        "email": "",
        "contact": ""
    },
    "notes": {
        "address": ""
    },
    "theme": {
        "color": "#528FF0"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
    alerts.show({ 
            icon:"images/fevicon.png",
  title: 'Failed', 
  message: 'Sorry! Your Payment Failed.' 
});
     //  alert("Sorry! Your Payment Failed.");
//       window.location.replace("https://www.workerunionsupport.com/");
       // alert(response.error.code);
        //alert(response.error.description);
        //alert(response.error.source);
        //alert(response.error.step);
        //alert(response.error.reason);
        //alert(response.error.metadata.order_id);
        //alert(response.error.metadata.payment_id);
});
$(document).ready(function(){
$('#rzp-button1').click();
})
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
<script data-cfasync="false" src="js/email-decode.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/vendor/bootstrap.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/owl.carousel.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/scrollUp.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/magnific-popup.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/ripples-min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/contact-form.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/spectragram.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/ajaxchimp.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/wow.min.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/plugins.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/main.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script type="c99753d21e08426a9857bed5-text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
		<script src="js/maps.js" type="c99753d21e08426a9857bed5-text/javascript"></script>
		<script src="js/rocket-loader.min.js" data-cf-settings="c99753d21e08426a9857bed5-|49" defer=""></script>
	</body>
</html>