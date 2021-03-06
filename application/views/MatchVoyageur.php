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
		
		function goToProfil(id){
			window.location.href = "http://192.168.137.235:8080/Com2You/index.php/CtrlProfil/Profil/"+id;
		}
</script>
<!--//end-smoth-scrolling-->
</head>
<body>

<!--start-home-->
<div id="home" class="header">
    <!--start-header-->
    
    <div class="header-top" style="margin-top: -25px !important">
        <div class="container" >
            <div class="logo" ><a href="index.html"><img src="<?php echo(base_url()); ?>images/logo.png" class="image-responsive" style="width: 70px;"/>
                </a></div>
            <div class="main-nav">
                <span class="menu"></span>
                <div class="top-menu">
                    <ul class="link-effect-12" id="link-effect-12">
                        <li class="active"><a href="index.html"><span>Mon profil</span></a></li>
                        <li><a href="#about" class="scroll"><span>Mes affinités</span></a></li>
                        <li><a href="#service" class="scroll"><span>Ajouter un trajet</span></a></li>
                        <li><a href="#gallery" class="scroll"><span>Discussion</span></a></li>
                        <li><a href="#news" class="scroll"><span>Réglages</span></a></li>
                        <li><a href="#contact" class="scroll"><span>Se déconnecter</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- script-for-menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".top-menu" ).slideToggle( "slow", function() {
                        // Animation complete.
                    });
                });
            </script>
            <!--End-top-nav-script-->
            <!--//end-header-->
            <div class="clearfix"></div>
        </div>
        <!--start-banner-->
    </div>
</div>
<!--//end-banner-->

<!--
CODE POUR METTRE LES MATCH ENSEMBLE 
CARREE + INSIDE BULLE AVEC NOM ET PROFIL

 -->
	<div class="services" id="service" style="background-color: #4aaead">
		<div class="container">
			<h5 class="sub-h"></h5>
		    <h3 class="tittle" style="color: #e34e00">Les personnes autour de moi</h3>
	       	<div class="serve-grids-top">
	       		<div class="col-md-6 service-box hvr-float-shadow">
					<div class="col-md-6 news-img">
						<img src="<?php echo(base_url()); ?>images/n1.jpg" title="couple" />
					</div>
					<div class="col-md-6 news-text">
						<span class="event-date">Philippe P.</span>
						<h6>Communication Digitale</h6>
						<p> Croise 12 fois</p>
					</div>
				</div>		     
				<div class="col-md-6 service-box hvr-float-shadow" onclick="goToProfil(3)">
					<div class="col-md-6 news-img">
						<img src="<?php echo (base_url()); ?>images/Profil de Guillaume.jpg" title="couple" />
					</div>
					<div class="col-md-6 news-text">
						<span class="event-date">Guillaume B</span>
						<h6>Communication Digitale</h6>
						<p> Croise 12 fois</p>
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