<?php

?>

<html style="height: 100%">
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
        
        function trajetMatch(){
			window.location.href = "<?php echo site_url('CtrlHome/redirectTrajetMatch');?>";
		}
    </script>
    <!--//end-smoth-scrolling-->
</head>
<body style="height:100%">



<div class="container">
       <div class="row" style="height:10%">
 	   <div   style="background-color: #23527c">
		    <h3 > Tchat </h3>
	     </div>
	 </div>
	 <div class="row" style="height:80%"  >
		<div  id="messages"  style="width:100%;background-color:#e2e21d;">
			        	
		</div>
	</div>
	  <div class="row" style="height:8%">	    
		<div  >
			    <input class="col-md-9 form-control" type ="text" id="txtMessage" name="txtMessage" value="Test"/> 
	     
			    <input  class="col-md-3 form-control" style="background-color:blue"  type="button" id="btMessage" name="btMessage" value="Send" 
			    onclick="sendMessage();"/>  
			    </div> 
		
	 </div>
   </div>        
   
   <input type="hidden" id="senderId" name="senderId" value="<?php  echo $_SESSION['com2user'];?>"/>         
<script type="text/javascript">
	
		function sendMessage() 
	{		
			    $.ajax({
			        url: "http://localhost:8080/Com2You/index.php/CtrlTchat/sendMessage/"+$("#txtMessage").val() 			  
			    }).done(
			      function myfunction(messages) {
			       //  	console.log(messages)
			        $("#messages").empty();			        
			        $.each(   messages,  function myfunction(i, item) {
			        	        
					             $("#messages").append();
					});            
					            
					  
			       
			    });
			    );
					
		
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









