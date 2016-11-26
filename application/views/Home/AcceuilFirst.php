<?php

?>



<!DOCTYPE html>
<html>
<head>
<title>We Plan a Society & People Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="We Plan Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="<?php echo(base_url());?>Content/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo(base_url());?>Content/site.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo(base_url()); ?>/Content/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>/Content/component.css" />
<!-- //Custom Theme files -->	
<!-- js -->
<script src="<?php echo(base_url()); ?>/Scripts/modernizr.custom.js"></script>

<script src="<?php echo(base_url()); ?>/Scripts/jquery-1.11.1.min.js"></script> 
<script type="text/javascript">
	function goToInscription()
	{
		console.log("toto");
 		window.location.href = "<?php echo site_url('CtrlHome/inscription);?>";
	}
	
	function goToConnexion()
	{
		
		window.location.href = "<?php echo site_url('CtrlHome/inscription);?>";
	}
	
</script>
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
					<!--<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
					<script src="js/wow.min.js"></script>-->
					<!--<script>
						 new WOW().init();
					</script>-->
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


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
  
<!--//end-smoth-scrolling-->

     <!--start-banner-->
<div id="body">     
     <!-- AJOUT DU STYLE POUR ANNULER LE BACKGROUND IMAGE SANS TOUCHER AU CSS DU TEMPLATE-->
	<div class="banner" style="background: #146eb4">
		<div class="container">
            <div class="banner-slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
				    	<li>
					   		<div class="banner-info">
						      	<h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
						      		Welcome
						      	</h3>
							  	<p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
									A Good Strategy
								</p>
								<span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
									Smart Choice !
								</span>
						  	</div>
						</li>
						<li>
					   		<div class="banner-info">
						    	<h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
						    		We Love
						    	</h3>
							 	<p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
							 		Will Carry You Right
							 	</p>						
							 	<span class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
							 		Smart Choice !
							 	</span>
						  	</div>
						</li>
						<li>
					   		<div class="banner-info">
								<h3 class="wow slideInUp"  data-wow-duration="1s" data-wow-delay=".3s">
									We Plan
								</h3>
								<p class="wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
									Through Retirement 
								</p>
								<span class="wow slideInUpslideInLeft"  data-wow-duration="1s" data-wow-delay=".3s">
									Smart Choice !
								</span>
					   		</div>
				  		</li>
					</ul><!--banner Slider starts Here-->
  					<script src="<?php echo(base_url()); ?>/Scripts/responsiveslides.min.js"></script>
		 			<script>
		    			// You can also use "$(window).load(function() {"
		    			$(function () {
		      				// Slideshow 4
		      				$("#slider4").responsiveSlides({
		        				auto: true,
						        pager:true,
						        nav:true,
						        speed: 500,
						        namespace: "callbacks",
						        before: function () {
		          					$('.events').append("<li>before event fired.</li>");
		        				},
		        				after: function () {
		          					$('.events').append("<li>after event fired.</li>");
		        				}
		      				});		
		    			});
		  			</script>
				</div>
			</div>
			<div style="text-align: center">
				<input type="button" value="Connecter" class="connexion" style="width: 58%" onclick="goToConnexion()"/>
			</div>
			<div style="text-align: center">
				<input type="button" value="Inscription" class="connexion" style="width: 58%;background-color: #c4c4c4" onclick="goToInscription()"/>
			</div>
		</div>
	</div>
</div>
<!--//end-banner-->



