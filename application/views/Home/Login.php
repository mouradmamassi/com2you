<?php

?>

<script src="<?php echo(base_url()); ?>/Scripts/jquery-1.11.1.min.js"></script> 
<script type="text/javascript">
	function goToLoginIn()
	{
		
		$.ajax({
			type : "post",
			url : "<?php echo(site_url()); ?>/CtrlHome/logon/toto/toto",
			success : function(reponse)
			{
				$(body).html(reponse);
			}
			
			});
	}
</script>

<?php

echo ('toto');
?>

<div id="body">
	<input type="button" value="Login in" onclick="goToLoginIn()"/>
</div>