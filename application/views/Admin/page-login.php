<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url().'theme/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>
		<style>
		.error
		{
			color: red;
		}
		
		</style>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                  
                                        
                                    </div>
                                    <div class="account-content">
                                       
										 <form name="login" id="login" method="post" class="form-horizontal">

                                       
                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                   
                                              <label for="password">Employee ID</label>
                                                <input type="text" class="form-control" name="emp_id" id="emp_id" required placeholder="Enter your Employee ID" />
                                                </div>
                                            </div>
											
										<div class="form-group row m-b-20">
                                                <div class="col-12">
                                                   
                                              <label for="password">Employee Mobile</label>
                                                <input type="text" class="form-control" name="emp_mob" id="emp_mob" required placeholder="Enter your Employee mobile" />
                                                </div>
                                        </div>
											
											  <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                   
                                                    <label for="password">Employee Name</label>
                                               <input type="text" class="form-control" name="emp_name" id="emp_name" readonly>
                                                </div>
                                            </div>											


											<div class="form-group row m-b-20">
                                                <div class="col-12">
                                                   
                                                    <label for="password">Division</label>
                                               <input type="text" class="form-control" name="emp_division" id="emp_division" readonly>
                                                </div>
                                            </div>										


											<div class="form-group row m-b-20">
                                                <div class="col-12">
                                                   
                                                    <label for="password">Department</label>
                                               <input type="text" class="form-control" name="emp_dept" id="emp_dept" readonly>
                                                </div>
                                            </div>
											
										
							

                                        

                                            <div class="form-group row m-t-10">
                                                <div class="col-12">
												
												 <input class="btn btn-success btn-rounded w-md pull-right" name="submit" type="submit" value="Submit" />
												 
												 	
                                                  
                                                </div>
                                            </div>

                                        </form>

                                     

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->
	


        <!-- jQuery  -->
       <!-- <script src="<?php echo base_url().'theme/assets';?>/js/jquery.min.js"></script> -->
        <script src="<?php echo base_url().'theme/assets';?>/js/popper.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/waves.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>
		
			    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
	   <script>
      $(function () {
$('#login').validate({
    rules: 
	{
      "emp_id":
	  {
        required: true
      
      },     
	  "emp_mob":
	  {
        minlength:9,
  maxlength:10,
  number: true
      
      }
	  
    },
    messages: 
	{
      "email": 
	  {
        required: "this field is required",
        minlength: "this field must contain at least {0} characters",
        digits: "this field can only contain numbers"
      }
    },
    submitHandler: function (form) 
	{ // for demo
					$.ajax({
					type: 'post',
					url: '<?php echo base_url();?>Employee/login',
					data: $('#login').serialize(),
					success: function(data)
					{
					var yourval = jQuery.parseJSON(JSON.stringify(data));		
					var obj = jQuery.parseJSON(data);
								if(obj.status==1)
					{
	/* 					Swal.fire({
  position: 'top-end',
  type: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
}) */

		setTimeout(function () {

		swal({
		title: "Success!",
		text: "Redirecting in 2 seconds.",
		type: "success",
		timer: 2000,
		showConfirmButton: false
		}, function(){
	//	window.location.href = "http://172.19.1.128/genx_backUp/";
		});	
		}, 1000);
		
		window.location = "<?php echo base_url().'Employee/index'?>";


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
	
	<script>
            $(document).ready(function(){
            $('#emp_id').change(function(){
                //Selected value
                var inputValue = $(this).val();
                // alert("value in js "+inputValue);
                // alert(base_url);
                //Ajax for calling php function
                $.post('<?php echo base_url(); ?>Employee/Sfalogin', { employee_code: inputValue }, function(data){
                	var obj = jQuery.parseJSON(data);
				
					if(obj.status == 1){
						$("#emp_name").val(obj.result[0].EMPLOYEE_NAME);
                     	$("#emp_dept").val(obj.result[0].DESG);
                     	$("#emp_division").val(obj.result[0].DIVISION);
					}else{
						$("#emp_name").val("NA");
                     	$("#emp_dept").val("NA");
                     	$("#emp_division").val("NA");
					}
                   // alert('ajax completed. Response:  '+data);
                    //var datashow = JSON.parse(data); 
                   // alert(datashow);
                    //do after submission operation in DOM
                    

                });
            });
        });
</script>


    </body>
</html>