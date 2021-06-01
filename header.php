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
	
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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
		<link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/testimonial_slider.css">
    <link rel="stylesheet" href="css/achievement.css">
   

	</head>
	
	<body data-spy="scroll" data-target="#mainmenu" data-offset="50">
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div class="preloade">
			<span><i class="ti-mobile"></i></span>
		</div>
		<header class="blue-bg relative fix" id="home">
			<div class="section-bg overlay-bg dewo ripple"></div>
			<nav class="navbar navbar-default mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="60">
				<div class="container">
					<div class="navbar-header">
						<button type="button" data-toggle="collapse" class="navbar-toggle" data-target="#mainmenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">
                        <div class="text-white logo-text"><img src="images/logo.png" style="width:100px;height:75px"></div>
						</a>
					</div>
					<div class="navbar-header" style="margin-left: 100px;">
						
						<a href="#" class="navbar-brand">
							<div class="text-white logo-text"><img src="images/iit-logo.png"></div>
						</a>
					</div>

					<div class="collapse navbar-collapse navbar-right" id="mainmenu">
						<ul class="nav navbar-nav">
							<li><a href="index.php#home">Home</a></li>
							<li><a href="index.php#testimonial">Testimonial</a></li>
							<li><a href="index.php#solutions">Solutions</a></li>
							<li><a href="index.php#media">Media</a></li>
							<li><a href="index.php#team">Team</a></li>
							<li><a href="index.php#career">Career</a></li>
							<li><a href="index.php#Achievements">Achievements</a></li>					
							<li><a href="pay.php">Pay</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
			
	
		