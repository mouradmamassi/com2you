<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo(base_url()) ?>css2/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo(base_url());?>Content/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo(base_url());?>Content/site.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo(base_url()); ?>/Content/style.css" type="text/css" rel="stylesheet" media="all"> 
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo(base_url()) ?>css2/styles.css" rel="stylesheet">
		<script type="text/javascript">
			function goToTrajet()
			{
				window.location.href = "<?php echo site_url('CtrlHome/redirectTrajetMatch');?>";
			}
		</script>
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">

          <h1 class="text-center">
          <div class="text-center">
          	<img src="<?php echo(base_url()) ?>images/logo.png" class="img-responsive text-center" style="height: 100px;margin: auto;"/>
          </div>
          
          Login
          </h1>
      </div>
      <div class="modal-body">
          <!--<form class="form col-md-12 center-block">-->
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
			  </div>
			  <div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
			  </div>
            <div class="form-group">
              <input type="button" value="Connecter" class="connexion" style="" onclick="goToTrajet()"/>
              </div>
          <!--</form>-->
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
		  </div>	
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo(base_url()) ?>js2/bootstrap.min.js"></script>
	</body>
</html>