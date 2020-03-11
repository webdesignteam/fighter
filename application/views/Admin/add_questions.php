<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan Admin - Add Questions</title>
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
                                    <h4 class="page-title float-left">Questions</h4>

                                    <ol class="breadcrumb float-right">
                                      
                                        <li class="breadcrumb-item"><a href="#">Add Questions</a></li>
                                       
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                       
                                         <div class="row">
                            <div class="col-lg-10 offset-1">

                                <div class="card-box">                                  

                                    <form action="#" name="add_questions" id="add_questions" enctype="multipart/form-data" accept-charset="utf-8" >
									
									 <div class="form-group row">
										<label class="col-2 col-form-label">Select Question Series</label>
										<div class="col-10">
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
									 $url = base_url().'admin/GetAllSeries';
									$result = file_get_contents($url, false, $context);
									$result= json_decode($result, true);
                                 //print_R($result);									
										?>
											<select class="form-control select2" name="TUTORIAL_SERIES_ID" id="TUTORIAL_SERIES_ID"  required >
									<option value="">Select</option>
									<?php
									for($i=0;$i<count($result['result']);$i++)
									{
									?><option value="<?php echo $result['result'][$i]['SERIES_ID']; ?>"><?php echo $result['result'][$i]['SERIES_DESC']; ?></option> <?php
									}
									?>
									</select> </br></br>
										</div>
									</div>										 
									
									<div class="form-group row">
										<label class="col-2 col-form-label">Question : </label>
										<div class="col-10">
											<textarea class="form-control" name="QUESTION" id="QUESTION" required rows="5"></textarea>
										</div>
									</div>								

									<div class="form-group row">
										<label class="col-2 col-form-label">Option : A</label>
										<div class="col-10">
										<input type="text" name="OPT_A" id="OPT_A" parsley-trigger="change" required class="form-control" />
										</div>
									</div>							
									<div class="form-group row">
										<label class="col-2 col-form-label">Option : B</label>
										<div class="col-10">
										<input type="text" name="OPT_B" id="OPT_B" parsley-trigger="change" required class="form-control" />
										</div>
									</div>										
									<div class="form-group row">
										<label class="col-2 col-form-label">Option : C</label>
										<div class="col-10">
										<input type="text" name="OPT_C" id="OPT_C" parsley-trigger="change" required class="form-control" />
										</div>
									</div>									

									<div class="form-group row">
										<label class="col-2 col-form-label">Option : D</label>
										<div class="col-10">
										<input type="text" name="OPT_D" id="OPT_D" parsley-trigger="change" required class="form-control" />
										</div>
								  </div>	

			 <div class="form-group row">
										<label class="col-2 col-form-label">Select Question Series</label>
										<div class="col-10">
								<select class="form-control select2" name="ANSWER_OPTION" id="ANSWER_OPTION" required >
									<option value="">Select</option>
									<option value="OPT_A">A</option>
									<option value="OPT_B">B</option>
									<option value="OPT_C">C</option>
									<option value="OPT_D">D</option>							
								 </select>
										</div>
									</div>									  

							
									</br>
								<div class="form-group text-right m-b-0">
								<input type="submit" class="btn btn-default" name="submit" id="submit" value="Add Question" />
								  
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
		$('#add_questions').validate({
			rules: 
			{
				"TUTORIAL_SERIES_ID":
				{
				required: true
				},				
				"QUESTION":
				{
				required: true
				},			
				"OPT_A":
				{
				required: true
				},			
				"OPT_B":
				{
				required: true
				},
				"OPT_C":
				{
				required: true
				},
				"OPT_D":
				{
				required: true
				},
				"ANSWER_OPTION":
				{
				required: true
				}
			},
			messages: 
			{
				"TUTORIAL_SERIES_ID": 
				{
			     	required: "PLEASE SELECT EXAM SERIES.."
				},			
				"QUESTION": 
				{
			     	required: "PLEASE ENETER QUESTION VALUES.."
				},
				"OPT_A": 
				{
			     	required: "PLEASE ENTER OPTION A INPUT VALUES."
				},
				"OPT_B": 
				{
			     	required: "PLEASE ENTER OPTION B INPUT VALUES."
				},
				"OPT_C": 
				{
			     	required: "PLEASE ENTER OPTION C INPUT VALUES."
				},
				"OPT_D": 
				{
			     	required: "PLEASE ENTER OPTION D INPUT VALUES."
				},
				"ANSWER_OPTION": 
				{
			     	required: "PLEASE SELECTC ANSWER OPTION FROM LIST"
				}
			},
			submitHandler: function (form) 
			{ 
				$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>admin/add_questions',
				data: $('#add_questions').serialize(),
				success: function(data)
				{
					var yourval = jQuery.parseJSON(JSON.stringify(data));		
					var obj = jQuery.parseJSON(data);
				//	alert(obj);
					if(obj.status==1)
					{
						swal("Good job!", obj.message, "success");
						$('#add_questions')[0].reset();
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