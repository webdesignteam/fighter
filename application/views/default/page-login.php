<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php $this->load->view('default/layout/title');  ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <?php $this->load->view('default/layout/favicon');  ?>

        <!-- Styles -->
        <?php $this->load->view('default/layout/styles');  ?>

        <!-- App css -->
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>
		<style>
         .error {
            color: red;
         }
         body, html {
         height: 100%;
         }
         .register-box-left {
            background-image: url("http://172.19.1.60/fighter/employee_assets/assets/images/login.png");
            min-height: 657px;
            background-color: #45452d;
            background-position: left bottom;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
         }
         .register-box-right {
            background: #D4D4BB;
         }
      </style>
    </head>
    <body>
        <!-- HOME -->
        <div class="container-fluid" style="padding: 0px;">
            <div class="row">
                <div class="col-sm-6 register-box-left">
                </div>
                <div class="col-sm-6 register-box-right text-center">
                <img src="<?php echo base_url().'employee_assets/assets';?>/images/logo.svg" alt="Fighter" style="height: 120px;">
                    <div class="register-box ">
                        <form name="login" id="login" method="post" class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="emp_id" id="emp_id" required placeholder="Enter your Employee ID" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="password" class="form-control" name="emp_pass" id="emp_pass" required placeholder="Enter your Employee Password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="emp_mob" id="emp_mob" required placeholder="Enter your Employee mobile" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="pull-left" for="password">Employee Name</label>
                                    <input type="text" class="form-control" name="emp_name" id="emp_name" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="pull-left" for="password">Division</label>
                                    <input type="text" class="form-control" name="emp_division" id="emp_division" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="pull-left" for="password">Department</label>
                                    <input type="text" class="form-control" name="emp_dept" id="emp_dept" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <input class="btn btn-login btn-block pull-left" name="submit" type="submit" value="Register" />
                                </div>
                                <div class="col-6">
                                   <a href="<?php echo base_url().'Employee/login';?>" > <input class="btn btn-login btn-block pull-right"  type="button" value="Login" /> </a>                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>Already Registered. <a href="<?php echo base_url().'Employee/login';?>" >Please click login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
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
	  
	  "emp_pass":
	  {
        required: true
      
      },     
	  "emp_mob":
	  {
  minlength:10,
  maxlength:10,
  number: true
      
      }
	  
    },
    messages: 
	{
      "emp_id": 
	  {
        required: "Please Enter Employee ID"
      },   

	  "emp_pass": 
	  {
        required: "Please Enter Employee Password"        
      }
    },
    submitHandler: function (form) 
	{ // for demo
					$.ajax({
					type: 'post',
					url: '<?php echo base_url();?>Employee/register',
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