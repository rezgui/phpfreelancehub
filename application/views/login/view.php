<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PHP Freelance Hub</title>
        
		<!--CSS -->
   		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
		
		<!--JavaScript-->
       <script src="<?php echo base_url(); ?>js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				$(".form-horizontal input:first").focus();
			});
		</script>
        <style type="text/css">
			body
				{
						background:url(<?php echo base_url(); ?>img/header_bg.JPG);
	
				}
			#login_box
				{
					width:500px;
					margin:0 auto;
					margin-top:80px;
	
				}
			#logo
				{
					width:400px;
					margin:0px auto;
					margin-top:80px;
				}
		</style>
	</head>
	<body>

       <center> <?php echo  img(array('src'=>'img/logo_big.png','id'=>'logo')); ?> </center>
       
	   <?php 
			if (validation_errors()) 
				{ ?>
				<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">x</a>Incorrect Username or Password!
            </div>  
			<?php	}
		?>
		
		
		
        <div id="login_box">
			<?php echo form_open('login',array('class'=>'form-horizontal')); ?>
			 
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Email Id</label>
				<div class="controls">
				  <input type="text" name="email" id="inputEmail" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="password" name="password" id="inputPassword" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				   <button type="submit" class="btn btn-large btn-block btn-primary" style="width:200px">Sign in</button>
				</div>
			  </div>
			<?php echo form_close(); ?>
        </div>
		
	</body>
	</html>