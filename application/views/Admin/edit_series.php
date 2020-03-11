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
          
		<?php   $this->load->view('admin/topbar');  ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           
		   <?php   $this->load->view('admin/sidebar');  ?>
		   
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

                                    <form action="#" name="update_series" id="update_series" enctype="multipart/form-data" accept-charset="utf-8" >                               
											
									<div class="form-group">
									<label for="userName">Series Title<span class="text-danger">*</span></label>
										<input type="text" name="SERIES_TITLE" id="SERIES_TITLE" parsley-trigger="change" 	required placeholder="Enter Series Title" class="form-control" value="<?php  print_r($series_list[0]->SERIES_TITLE);?>"  />
									</div> 									
									
									<div class="form-group">
									<label for="userName">Series Descriptions<span class="text-danger">*</span></label>
										<input type="text" name="SERIES_DESC" id="SERIES_DESC" parsley-trigger="change" 	required placeholder="Enter Series Descriptions" class="form-control" value="<?php  print_r($series_list[0]->SERIES_DESC);?>" />
									</div> 								

									<div class="form-group">
									<label for="userName">Start Date<span class="text-danger">*</span></label>
										<input type="date" name="START_DATE" id="START_DATE" parsley-trigger="change" 	required  class="form-control" value="<?php  print_r($series_list[0]->SERIES_START_DATE);?>"/>
									</div> 									
									
									<div class="form-group">
									<label for="userName">End Date<span class="text-danger">*</span></label>
										<input type="date" name="END_DATE" id="END_DATE" parsley-trigger="change" 	required  class="form-control" value="<?php  print_r($series_list[0]->SERIES_END_DATE);?>" />
									</div> 
								<div class="form-group text-right m-b-0">
									<input type="submit" class="btn btn-default" name="update" id="update" value="Update Series" />
								  
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
                     2018 - 2019 © Hetero Health Care Limited
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
		$('#update_series').validate({
			rules: 
			{
				"SERIES_TITLE":
				{
				required: true
				},				
				"SERIES_DESC":
				{
				required: true
				},
			},
			messages: 
			{
				"SERIES_TITLE": 
				{
				required: "Please Enter SERIES TITLE"
				},			
				"SERIES_DESC": 
				{
				required: "Please Enter SERIES DESC"
				}
			},
			submitHandler: function (form) 
			{ 
				$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>admin/edit_series/<?php print_r($series_id); ?>',
				data: $('#update_series').serialize(),
				success: function(data)
				{
					var yourval = jQuery.parseJSON(JSON.stringify(data));		
					var obj = jQuery.parseJSON(data);
				//	alert(obj);
					if(obj.status==1)
					{
						swal("Good job!", obj.message, "success");
					//	$('#update_series')[0].reset();
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