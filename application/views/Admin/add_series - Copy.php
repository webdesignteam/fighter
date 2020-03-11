<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan Admin - Add Tutorial Series</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
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
                                    <h4 class="page-title float-left">Tutorial Series</h4>

                                    <ol class="breadcrumb float-right">
                                      
                                        <li class="breadcrumb-item"><a href="#">Add Series</a></li>
                                       
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                       
                                         <div class="row">
                            <div class="col-lg-10 offset-1">

                                <div class="card-box">                                  

                                    <form action="#" name="add_planning" id="add_planning" enctype="multipart/form-data" accept-charset="utf-8" >                               
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
								<p class="mb-2 mt-4 font-weight-bold">File Format</p>
							<select class="selectpicker"  data-selected-text-format="count > 1" data-style="btn-light" name="format" id="format">
							<option value="">Select</option>
							<option value="PDF">PDF</option>
							<option value="VIDEO">VIDEO</option>
							<option value="AUDIO">AUDIO</option>
							<option value="XLS">XLS</option>
							<option value="DOC">DOC</option>
							<option value="DOCS">DOCS</option>
							</select>  </div>									

							<div class="form-group">
							<p class="mb-2 mt-4 font-weight-bold">Upload File</p>
							<input type="file" class="filestyle" name="uploadFile"  id="uploadFile" data-buttonbefore="true" data-btnClass="btn-light">
							</div>
							


										

                                        <div class="form-group text-right m-b-0">
                                           <!-- <button class="btn btn-gradient waves-effect waves-light" type="submit" id="submit" name="submit">
                                                Add Activity
                                            </button> -->
											
											<input type="submit" class="btn btn-default" name="submit" id="submit" value="Add Activity Brief" />
                                          
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
				"format":
				{
				required: true
				//extension: "PDF|pdf"
				},			
				"activity_id":
				{
				required: true
				},
			},
			messages: 
			{
				"format": 
				{
				required: "Please Enter Acivity Date"
				},			
				"activity_id": 
				{
				required: "Please Enter Acivity Name"
				}
				
			},
			submitHandler: function (form) 
			{ 
			//var formData = new FormData( $("#add_planning")[0] );
			
				var fd = new FormData(form);
				fd.append('uploadFile',$('#uploadFile')[0].files[0]);
				fd.append('format ',$('#format').val());
				fd.append('activity_id ',$('#activity_id').val());
			
				$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>admin/add_series',
				//data: $('#add_planning').serialize(),
				data: fd,  
				cache: false,
				contentType: false,
				processData: false,   
				success: function(data)
				{
					var yourval = jQuery.parseJSON(JSON.stringify(data));		
					var obj = jQuery.parseJSON(data);
					if(obj.status==1)
					{
						swal("Good job!", obj.message, "success");
						window.location = "<?php echo base_url().'Webadmin/activity_brief'; ?>";
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