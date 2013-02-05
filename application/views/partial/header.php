<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PHP Freelance Hub</title>
        
		<!--CSS -->
   		<link href="<?php echo base_url(); ?>css/general.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
		
		<!--JavaScript-->
		<script src="<?php echo base_url(); ?>js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
			var SITE_URL= "<?php echo site_url(); ?>";
		</script>
	</head>
	
	<body>
   <!-- Header Starts here--> 	
    <div class="head">
        <div class="headTop">
			<?php echo  img(array('src'=>'img/logo.png','class'=>'logo')); ?>
            <span class="loggedName"> <?php echo $this->User->logged_user()->full_name; ?></span>
         </div>

        <!-- Left side bar-->
        <div class="nav">
        <table><tr>
        
        <td align="center" class="nav_item nav_item_home<?php echo $controller_name=='home' ? ' active_module' : '' ?>">
				<a href="<?php echo site_url("home");?>">
                	<?php echo  img(array('src'=>'img/home.png','class'=>'nav_item_image')); ?> <br />
                    <?php echo lang("module_home") ?>
                </a>
		</td>
		 <?php	foreach($all_modules->result() as $module)	{	?>
			<td align="center" class="nav_item nav_item_<?php echo $module->module_id; echo  $module->module_id==$controller_name ? ' active_module' : '' ?>">
   				<a href="<?php echo site_url("$module->module_id");?>">
					<?php echo  img(array('src'=>'img/'.$module->module_id.'.png','class'=>'nav_item_image')); ?> <br />
                    <?php echo lang("module_".$module->module_id) ?>
                </a>
			</td>
		<?php }	?>     
        <td align="center" class="nav_item nav_item_logout">
				<a href="<?php echo site_url("users/logout");?>">
                	<?php echo  img(array('src'=>'img/logout.png','class'=>'nav_item_image')); ?> <br />
                    <?php echo lang("module_logout") ?>
                </a>
		</td>
		</tr></table>  
        </div>
    </div>
    <!-- Header Ends here--> 	

    
   <!-- Left side bar-->
    <div class="leftSideBar">
	<center>
    	<div class="loggedUser"> vijaythecoder </div>
        <?php echo  img(array('src'=>'img/avatar.png','class'=>'avatar')); ?> 
    </center>
    
    <div id="chatlist">
    vijay
    </div>
    
    </div>
    
 <div class="content">
