<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link href="<?php echo(base_url());?>Content/site.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo(base_url()); ?>/Content/style.css" type="text/css" rel="stylesheet" media="all"> 
    <!-- //js -->
    <!--web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo (base_url());?>Content/app.css" rel="stylesheet" type="text/css" media="all">

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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        
        function addTravel()
        {
			window.location.href ="http://192.168.137.235:8080/Com2You/index.php/CtrlMatchVoyageur/MatchVoyageur";
		}
    </script>
    <!--//end-smoth-scrolling-->
</head>
<body>
<!--w3layouts-->
<!--agileits-->
<!-- main content start-->
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
<!-- about-type-grid -->


<!-- //about-type-grid -->


<!--/news-->


<!--start-gallery-->

<link rel="stylesheet" href="css/swipebox.css">
<script src="<?php echo(base_url()); ?>/Scripts/jquery.swipebox.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
    function disabledFunction(btnClick){
		$(btnClick).disableSelection();
	}
</script>
<!--//gallery-->

<!--/news-->
<div class="row col-md-8 col-md-offset-2 col-xs-9 col-xs-offset-1" style="margin-top: 5px">
    <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-1 train">
            <a href="#"> <input type="button" value="Train" style="border-radius: 50%; margin-bottom: 2em; background-color:#e34e00; color: #fff; height: 60px;width: 60px;text-align: center;font-size: 12pt;" onclick="disabledFunction()" /></a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4 tram">
            <a href="#"> <input type="button" value="Tram" style="border-radius: 50%; margin-bottom: 2em; background-color:#e34e00; color: #fff; height: 60px;width: 60px;text-align: center;font-size: 12pt"/></a>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4 rer">
            <a href="#"> <input type="button" value="RER" style="border-radius: 50%; margin-bottom: 2em; background-color:#e34e00; color: #fff; height: 60px;width: 60px;text-align: center;font-size: 12pt"/></a>
        </div>
<!--    </div>-->
<!--    <div class="row">-->
        <div class="col-md-2 col-md-offset-0 col-sm-4 col-xs-4 col-xs-offset-2 bus">
            <a href="#"> <input type="button" value="Bus" style="border-radius: 50%; margin-bottom: 2em; background-color:#e34e00; color: #fff; height: 60px;width: 60px;text-align: center;font-size: 12pt"/></a>
        </div>
        <div class="col-md-2  col-sm-4 col-xs-4 avion">
            <a href="#"> <input type="button" value="Avion" style="border-radius: 50%; margin-bottom: 2em; background-color:#e34e00; color: #fff; height: 60px;width: 60px;text-align: center;font-size: 12pt"/></a>
        </div>
        <!--        <span style="border-radius: 50%;"></span>-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <p style="color: #fff">Ville de départ</p><select class="form-control" style="margin-bottom: 2rem">
                <option>...</option>
                <option>Dijon</option>
                <option>Paris</option>
                <option>Nantes</option>
                <option>Lille</option>
                <option>Besançon</option>
            </select>
        </div>

        <div class="col-md-6">
            <p style="color: #fff">Gare de départ</p> <select class="form-control">
                <option>...</option>
                <option>Dijon Ville</option>
                <option>Porte neuve</option>
            </select>
        </div>


    </div>


    <div class="row">
        <div class="col-md-6">
            <p style="color: #fff">Ville d'arrivée</p> <select class="form-control" style="margin-bottom: 2rem">
                <option>...</option>
                <option>Dijon</option>
                <option>Paris</option>
                <option>Nantes</option>
                <option>Lille</option>
                <option>Besançon</option>
            </select>
        </div>

        <div class="col-md-6">
            <p style="color: #fff">Gare d'arrivée</p> <select class="form-control">
                <option>...</option>
                <option>Gare TGV Franche Comté</option>
                <option>Viotte</option>
                <option>Mouillere</option>
            </select>
        </div>


    </div>


    <p style="color: #fff">A partir de</p> <select class="form-control" style="margin-top: 2em">
    	<option>...</option>
        <option>00h</option>
        <option>01h</option>
        <option>02h</option>
        <option>03h</option>
        <option>04h</option>
        <option>21h</option>
    </select>



	<p style="color: #fff">Liste des trains</p><select class="form-control" style="margin-top: 2em" name="nbtrain">
		<option>...</option>
        <option>21h01 -> 21h52</option>
        <option>21h09 -> 22h05</option>
    </select>
<!--    <div class="row" style="margin-top: 2em">-->



<br>
    <div class="panel-group" id="accordion">
       <!-- <div class="panel panel-default">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><div class="panel-heading">
                <h4 class="panel-title">
                  Date
                </h4>
            </div>
            </a>
            <div id="collapse1" class="panel-collapse collapse in">-->
                <p style="color: #fff">Date</p> <input type="text" class="form-control" style="margin-bottom: 10px" placeholder="Text input" id="datepicker">
           <!-- </div>
        </div>-->
        <p style="color: #fff"> </p>
        <div class="panel panel-default">
            <div class="panel-heading">
            <p style="color: #fff"> </p>
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                
                <h4 class="panel-title">
                    Récurrence
                </h4>
                </a>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
<!--                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,-->
<!--                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad-->
<!--                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea-->
<!--                    commodo consequat.</div>-->
                <div class="row" style="margin-top: 2em">
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2" >
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Lundi" data-off="<i class='fa fa-pause'></i>Lundi" type="checkbox">
                    </div>
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2">
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Mardi" data-off="<i class='fa fa-pause'></i>Mardi" type="checkbox">
                    </div>
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2">
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Mecredi" data-off="<i class='fa fa-pause'></i>Mecredi" type="checkbox">
                    </div>
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2">
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Jeudi" data-off="<i class='fa fa-pause'></i>Jeudi" type="checkbox">
                    </div>
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2">
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Vendredi" data-off="<i class='fa fa-pause'></i>Vendredi" type="checkbox">
                    </div>
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2">
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Samedi" data-off="<i class='fa fa-pause'></i>Samedi" type="checkbox">
                    </div>
                    <div class="checkbox col-md-3 col-sm-2 col-sx-2">
                        <input checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Dimanche" data-off="<i class='fa fa-pause'></i>Dimanche" type="checkbox">
                    </div>
                </div>
            </div>
        </div>

    </div>



        <input class="connexion" type="button" value="Ajouter" onclick="addTravel()">
<!--        <input type="text" class="form-control" placeholder="Text input" style="margin-top: 2rem">-->
<!--    </div>-->
</div>
<div class="clearfix"></div>

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


        $('select').select2();

</script>
<!--end-smooth-scrolling-->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //for bootstrap working -->
<!-- for bootstrap working -->
<script src="<?php echo(base_url()); ?>/Scripts/bootstrap.js"></script>
<!-- //for bootstrap working -->


</body>
</html>