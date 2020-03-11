<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
</head>
<body>

<div class="container margin_60" style="transform: none;">
  <div class="row" style="transform: none;">
                <div class="col-xl-12 col-lg-12">

  <?php //echo "<pre>";
  //print_r($questionaries);?>
 
  </br>
   <form action="#" name="examform" id="examform">
  <input type="hidden" name="EMPLOYEE_ID" id="EMPLOYEE_ID" value="<?php echo $this->session->userdata('EMPLOYEE_ID') ?>" />
		<?php  foreach($questionaries as $questionaries)
		{
			?>
				<p><h4> Question <?php echo $questionaries['QUESTION_ID']; ?> :  <?php echo $questionaries['QUESTION_TEXT']; ?> </h4></p>
				<p>
				 <div class="step">
                            <div class="row">
				<?php //echo count($questionaries['QUESTION_OPTIONS'])."Total"; ?>
				<?php 
				
				foreach($questionaries['QUESTION_OPTIONS'] as $options)
				{
					?>
							<div class="col-md-3 col-sm-3">
							<div class="form-group">
							<label>
									<input type="radio" name="<?php echo $questionaries['QUESTION_ID']; ?>" id="<?php echo $questionaries['QUESTION_ID']; ?>" value="<?php echo $options['OPTION_ID']; ?>"> <?php echo $options['OPTION_TEXT']; ?>

							</label>
							</div>
							</div>
				
					
					<?php
					
					
				}
				
				?>
				</div>
				</div>
			

				</p>
		<?php } ?>

   <div class="checkbox">
    
    </div>
		<input type="submit" class="btn btn-default pull-right" name="submit" id="submit" value="Submit" />
   <!-- <button type="submit" class="btn btn-default pull-right" name="submit" id="submit" >Submit</button>-->

  </form>
  </div>
  </div>
</div>

         <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
	
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
	<script>
	$(function ()
	{
		$('#examform').validate({
			rules: 
			{
				"EMPLOYEE_ID":
				{
				required: true
				}
			},
			messages: 
			{
				"EMPLOYEE_ID": 
				{
				required: "Please Enter EMPLOYEE_ID"
				}
			},
			submitHandler: function (form) 
			{ 
				$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>admin/index',
				data: $('#examform').serialize(),
				success: function(data)
				{
					var yourval = jQuery.parseJSON(JSON.stringify(data));		
					var obj = jQuery.parseJSON(data);
					if(obj.status==1)
					{
						swal("Good job!", obj.message, "success");
						$('#examform')[0].reset();
					}
					else
					{
						swal({
							type: 'error',
							title: 'Oops...',
							text: obj.message
						})
					}			

				}
				});
				return false;
			}
		});
	});
	</script>
</body>
</html>
