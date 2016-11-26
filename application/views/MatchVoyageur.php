<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Com2You</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="We Plan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="<?php echo(base_url());?>Content/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo(base_url()); ?>/Content/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>/Content/component.css" />
<!-- //Custom Theme files -->	
<!-- js -->
<script src="<?php echo(base_url()); ?>/Scripts/modernizr.custom.js"></script>

<script src="<?php echo(base_url()); ?>/Scripts/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="<?php echo(base_url()); ?>/Scripts/move-top.js"></script>
<script type="text/javascript" src="<?php echo(base_url()); ?>/Scripts/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

<!-- //js -->
<!--web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- start-smoth-scrolling-->
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>

<?php include('header.php'); ?>

<!--
CODE POUR METTRE LES MATCH ENSEMBLE 
CARREE + INSIDE BULLE AVEC NOM ET PROFIL

 -->
	<div class="services" id="service" style="background-color: #23527c">
		<div class="container">
			<h5 class="sub-h"></h5>
		    <h3 class="tittle">match</h3>
	       	<div class="serve-grids-top">		     
				<div class="col-md-6 service-box hvr-float-shadow">
					<div class="col-md-6 news-img">
						<img src="<?php echo(base_url()); ?>images/n1.jpg" title="couple" />
					</div>
					<div class="col-md-6 news-text">
						<span class="event-date">Herve P</span>
						<h6>Communication Digital</h6>
						<p> Croise 12 fois</p>
						<p>72% d'affinite</p>
					</div>
				</div>
				<div class="col-md-6 service-box hvr-float-shadow">
					<div class="col-md-6 news-img">
						<img src="<?php echo(base_url()); ?>images/n1.jpg" title="couple" />
					</div>
					<div class="col-md-6 news-text">
						<span class="event-date">Herve P</span>
						<h6>Communication Digital</h6>
						<p> Croise 12 fois</p>
						<p>72% d'affinite</p>
					</div>
				</div>
				<div class="col-md-6 service-box hvr-float-shadow">
					<div class="col-md-6 news-img">
						<img src="<?php echo(base_url()); ?>images/n1.jpg" title="couple" />
					</div>
					<div class="col-md-6 news-text">
						<span class="event-date">Herve P</span>
						<h6>Communication Digital</h6>
						<p> Croise 12 fois</p>
						<p>72% d'affinite</p>
					</div>
				</div>
				<div class="col-md-6 service-box hvr-float-shadow">
					<div class="col-md-6 news-img">
						<img src="<?php echo(base_url()); ?>images/n1.jpg" title="couple" />
					</div>
					<div class="col-md-6 news-text">
						<span class="event-date">Herve P</span>
						<h6>Communication Digital</h6>
						<p> Croise 12 fois</p>
						<p>72% d'affinite</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>