<?php

?>


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
<!--w3layouts-->
<!--agileits-->
<!-- main content start-->
<!--start-home-->
<div id="home" class="header">
    <!--start-header-->
    <div class="header-strip">
        <div class="container">
            <p class="phonenum"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> CALL - US - FREE: &nbsp;888 - 585 - 9858</p>
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="facebook"> </i></a></li>
                    <li><a href="#"><i class="twitter"> </i></a></li>
                    <li><a href="#"><i class="google-plus"> </i></a></li>
                    <li><a href="#"><i class="dribble"> </i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="logo"><a href="index.html"><h1>We <span>Plan</span></h1>
                    <p class="top-para">Plan for the Future</p></a></div>
            <div class="main-nav">
                <span class="menu"></span>
                <div class="top-menu">
                    <ul class="link-effect-12" id="link-effect-12">
                        <li class="active"><a href="index.html"><span>Home</span></a></li>
                        <li><a href="#about" class="scroll"><span>About</span></a></li>
                        <li><a href="#service" class="scroll"><span>Services</span></a></li>
                        <li><a href="#gallery" class="scroll"><span>Gallery</span></a></li>
                        <li><a href="#news" class="scroll"><span>News & Events</span></a></li>
                        <li><a href="#contact" class="scroll"><span>Contact</span></a></li>
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
<!-- app-->
<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog about" role="document">
        <div class="modal-content about">
            <div class="modal-header">
                <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body about">
                <div class="about">
                    <h4 class="tittle wow fadeInUp animated animated" data-wow-delay=".5s">Retirement Plans</h4>
                    <div class="about-inner">

                        <iframe src="https://www.youtube.com/embed/lj813_txFFc" frameborder="0" allowfullscreen></iframe>
                        <h5 class="tittle">Lorem ipsum dolor sit amet</h5>
                        <p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida velit,Ming sits in the corner the whole day. She's into crochet. quis dolor tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit quis dolor tristiqumsan.</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--/news-->


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









