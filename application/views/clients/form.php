
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <i class="icon-remove"></i> </button>
    <h3 id="myModalLabel">Client</h3>
  </div>

  <div class="modal-body">
  <?php echo form_open('clients/save/',array('class'=>'form-horizontal','id'=>'client_form')); ?>
		  <div class="control-group">
		<label class="control-label required" for="full_name">Full Name</label>
		<div class="controls">
		  <input type="text" id="full_name" name="full_name"  placeholder="Full Name">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="company_name">Company</label>
		<div class="controls">
		  <input type="text" id="company_name" name="company_name"  placeholder="Company">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="phone">Phone</label>
		<div class="controls">
		  <input type="text" id="phone" name="phone"  placeholder="Phone Number">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label required" for="email">Email</label>
		<div class="controls">
		  <input type="text" id="email" name="email"  placeholder="Email">
		</div>
	  </div>
	    <div class="control-group">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
		  <input type="text" id="password" name="password"  placeholder="Password">
		</div>
	  </div>
	    <div class="control-group">
		<label class="control-label" for="address">Address</label>
		<div class="controls">
		  <input type="text" id="address" name="address"  placeholder="Address">
		</div>
		</div>
    <div class="control-group">
		<label class="control-label" for="city">City</label>
		<div class="controls">
		  <input type="text" id="city" name="city"  placeholder="City">
		</div>
		</div>
    <div class="control-group">
		<label class="control-label" for="state">State</label>
		<div class="controls">
		  <input type="text" id="state" name="state"  placeholder="State">
		</div>
		</div>
    <div class="control-group">
		<label class="control-label" for="zipcode">Zip code</label>
		<div class="controls">
		  <input type="text" id="zipcode" name="zipcode"  placeholder="Zip code">
		</div>
	</div>
		<div class="control-group">
			<label class="control-label" for="country">Country</label>
			<div class="controls">
			  <input type="text" id="country" name="country"  placeholder="Country">
		</div>
		</div>

 </div>
 
  <div class="modal-footer">
	<ul class="text-error  pull-left" id="error_message_box"> </ul>
    <button class="btn" data-dismiss="modal" class="close_link" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
   </div>
</form>

<script type='text/javascript'>
$(document).ready(function()
{
	var submitting = false;

	$('#client_form').validate({
		submitHandler:function(form)
		{
			if (submitting) return;
			submitting = true;
			$(form).mask("Please wait...");
			$(form).ajaxSubmit({
			success:function(response)
				{
				submitting = false;
				$(this).find(".close_link").click(modal_closing);
				

			},
			dataType:'json'
		});

		},
		errorLabelContainer: "#error_message_box",
 		wrapper: "li",
		rules:
		{
			full_name:
			{
				required:true
			},
			email:
			{
				required:true,
				email:true
			}
   		},
		messages:
		{
			full_name:
			{
				required:<?php echo json_encode('Full Name required'); ?>
				
			},
			email:
			{
				required:<?php echo json_encode('Email Id required'); ?>,
				email:<?php echo json_encode('Invalid Email'); ?>
			}

		}
	});
});
</script>