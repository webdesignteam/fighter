<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">

        <!-- Plugins css-->
        <link href="<?php echo base_url().'theme/plugins';?>/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?php echo base_url().'theme/plugins';?>/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?php echo base_url().'theme/plugins';?>/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/plugins';?>/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/plugins';?>/switchery/switchery.min.css">

        <!-- App css -->
        <link href="<?php echo base_url().'theme/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

             <!-- Top Bar Start -->
          
		<?php   $this->load->view('default/topbar');  ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           
		   <?php   $this->load->view('default/sidebar');  ?>
		   
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Form Advanced</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Form</a></li>
                                        <li class="breadcrumb-item active">Form Advanced</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                       
                                         <div class="row">
                            <div class="col-lg-10 offset-1">

                                <div class="card-box">                                  

                                    <form action="#" name="add_planning" id="add_planning">
                                     <div class="form-group">
                                            <label for="userName">Activity Date<span class="text-danger">*</span></label>
                                            <input type="date" name="activity_date" id="activity_date" parsley-trigger="change" required
                                                   class="form-control" id="userName">
                                        </div> 
										
										<div class="form-group">
										<label for="userName">Select Activity<span class="text-danger">*</span></label>
											<select class="form-control select2" name="activity_id" id="activity_id"  required >
												<option>Select</option>
																<?php
					//$Login_id=$this->session->userdata('Login_user_id');
					$postdata = http_build_query(
					array(
					//'notification_id' => $this->uri->segment(4)
					)
					);
					// Set the POST options
					$opts = array('http' => 
					array (
					'method' => 'POST',
					'Content-Type": "application/json',
					'header' =>"Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer sdf541gs6df51gsd1bsb16etb16teg1etr1ge61g\n",
					//'content' => $postdata
					)
					);
					// Create the POST context
					$context  = stream_context_create($opts);
					// POST the data to an api
					$url = base_url().'Webadmin/GetAllActivity';
					$result = file_get_contents($url, false, $context);
					$result= json_decode($result, true); 
					for($i=0;$i<count($result['result']);$i++)
					{
	?><option value="<?php echo $result['result'][$i]['ACTIVITY_ID']; ?>"><?php echo $result['result'][$i]['ACTIVITY_NAME']; ?></option> <?php
					}
					?>
											</select>
										</div>  

										<div class="form-group">

										
										<label for="userName">Select Doctor<span class="text-danger">*</span></label>
											<select class="form-control select2" name="activity_doctor" id="activity_doctor"  required >
												<option>Select</option>
												
				<?php
					//$Login_id=$this->session->userdata('Login_user_id');
					$postdata = http_build_query(
					array(
					//'notification_id' => $this->uri->segment(4)
					)
					);
					// Set the POST options
					$opts = array('http' => 
					array (
					'method' => 'POST',
					'Content-Type": "application/json',
					'header' =>"Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer sdf541gs6df51gsd1bsb16etb16teg1etr1ge61g\n",
					//'content' => $postdata
					)
					);
					// Create the POST context
					$context  = stream_context_create($opts);
					// POST the data to an api
					$url = base_url().'Webadmin/GetAllDoctor';
					$result = file_get_contents($url, false, $context);
					$result= json_decode($result, true); 
					for($i=0;$i<count($result['result']);$i++)
					{
	?><option value="<?php echo $result['result'][$i]['DOCTOR_CODE']; ?>"><?php echo $result['result'][$i]['DOCTOR_NAME']; ?></option> <?php
					}
					?>
											</select>
										</div>   										
                                    

                                        <div class="form-group text-right m-b-0">
                                           <!-- <button class="btn btn-gradient waves-effect waves-light" type="submit" id="submit" name="submit">
                                                Add Activity
                                            </button> -->
											
											<input type="submit" class="btn btn-default" name="submit" id="submit" value="Add Planning" />
                                          
                                        </div>

                                    </form>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

                           
                        </div>
                        <!-- end row -->


                       

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/popper.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/waves.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.slimscroll.js"></script>

        <script src="<?php echo base_url().'theme/plugins';?>/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-maxlength/bootstrap-maxlength.js" type="text/javascript"></script>

        <!-- Init Js file -->
        <script type="text/javascript" src="<?php echo base_url().'theme/assets';?>/pages/jquery.form-advanced.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>
		
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
		
	<script>
	$(function ()
	{
		$('#add_planning').validate({
			rules: 
			{
				"activity_date":
				{
				required: true
				},			
				"activity_name":
				{
				required: true
				},
			},
			messages: 
			{
				"activity_date": 
				{
				required: "Please Enter Acivity Date"
				},			
				"activity_name": 
				{
				required: "Please Enter Acivity Name"
				}
				
			},
			submitHandler: function (form) 
			{ 
				$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>Webadmin/add_planning',
				data: $('#add_planning').serialize(),
				success: function(data)
				{
					var yourval = jQuery.parseJSON(JSON.stringify(data));		
					var obj = jQuery.parseJSON(data);
					if(obj.status==1)
					{
						swal("Good job!", obj.message, "success");
						window.location = "<?php echo base_url().'Webadmin/activity_planning'; ?>";
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