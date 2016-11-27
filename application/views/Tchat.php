<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html style="height:100%" >
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

<link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>/Scripts/toastr.css" />

<script src="<?php echo(base_url()); ?>/Scripts/toastr.js"></script> 

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
   
    <!-- start-smoth-scrolling-->
    <script type="text/javascript">
    
        
        function trajetMatch(){
			window.location.href = "<?php echo site_url('CtrlHome/redirectTrajetMatch');?>";
		}
    </script>
    <!--//end-smoth-scrolling-->
</head>
<body style="height:100%">
<!--w3layouts-->
<!--agileits-->
<!-- main content start-->
<!--start-home-->
<div class="container" style="width:100%">
       <div class="row" style="height:10%">
 	   <div   >
		    <h3 > Tchat </h3>
	     </div>
	 </div>
	 <div class="row" style="height:80%;"  >
		<div   id="messages"  style="width:100%;background-color:white;height:300px">
			        	
		</div>
	</div>
	  <div class="row" style="height:8%">	    
		
			    <input class="col-md-9 form-control" type ="text" id="txtMessage" name="txtMessage" value=""/> 
	     
			    <input  class="col-md-3 form-control connexion"   type="button" id="btMessage" name="btMessage" value="Envoyer" 
			    onclick="sendMessage();"/>  
	
	 </div>
   </div>        
   
   <input type="hidden" id="senderId" name="senderId" value="<?php  echo $_SESSION['com2youuserid'];?>"/>         
<script type="text/javascript">
	
	/* 
	
	Claire - Hello
Guillaume - Bonjour Claire
Claire - J'ai vu que tu voulais aller en Irlande ?
Guillaume - Oui, je suis très attiré par la culture irlandaise et surtout la musique.
Claire - J'avoue ! Tu veux des conseils ?
Guillaume - Oui, avec plaisir !
Bot - ha l’Irlande, ses moutons noirs, ses pubs et sa verdure… ca tombe bien Il vous reste 30 minutes d’attente à la gare de Dijon, le temps d’un café. Je vous réserve deux places au chaud chez xxx?
Claire - Au top ! Ok pour toi ?
Guillaume - Carrément ! See you*/


	var messages = new Array();
	messages [0] = "Bonjour Claire";
	messages[1] = " Oui, je suis très attiré par la culture irlandaise et surtout la musique =)";
	messages[2] = "Oui, avec plaisir !";
	messages[3] = " Ha l’Irlande, ses moutons noirs, ses pubs et sa verdure… ça tombe bien Il vous reste 30 minutes d’attente à la gare de Dijon, le temps d’un café. Je vous réserve deux places au chaud chez Paul?!";
	messages[4] = "Carrément ! See you";
	
	var i=0;
	
	
		function sendMessage() 
	{	
	var display = " <div class='row' style='border-bottom:1px solid black'> <div class='col-md-6 col-sm-6 ' > <div    style='background-color:white'   >"+$("#txtMessage").val()+"</div></div></div>";
				$("#messages").append(display);		
		$("#txtMessage").val("");
		if( i==3){
			var display = "   <div class='row' style='border-bottom:1px solid black'><div class='col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8' style='background-color:white' >"+messages[i]+"</div>  <div class='col-md-2 col-sm-2' > <input class='form-control' type='button' value='Oui'><input class=' form-control' type='button' value='Non'> </div></div></div> " ;
				$("#messages").append(display);	
			
		}
		else
		{
	
			if( i%2 == 0)
			{
				var display = "  <div class='row' style='border-bottom:1px solid black'>> <div class='col-md-6 col-sm-6 ' style='float:right' > <div  style='background-color:white;'  >"+messages[i]+"</div></div></div>";
					$("#messages").append(display);		
			}
			else {
			var display = " <div class='row' style='border-bottom:1px solid black'> <div class='col-md-6 col-sm-6 ' style='float:right' > <div  style='background-color:white;'  style='float:right' >"+messages[i]+"</div> </div></div>";
					$("#messages").append(display);
			}
		}
		i++;
			
		
		
	}
	
	function getNewMessages()
	{
		
		
	}
</script>

<!--start-gallery-->

<link rel="stylesheet" href="css/swipebox.css">
<script src="<?php echo(base_url()); ?>/Scripts/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!--//gallery-->

<!--/news-->

</div>

<!--/contact-->


<!--//main content start-->
<!--start-smooth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //for bootstrap working -->
<!-- for bootstrap working -->
<script src="<?php echo(base_url()); ?>/Scripts/bootstrap.js"></script>
<!-- //for bootstrap working -->


</body>
</html>









