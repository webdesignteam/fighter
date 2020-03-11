<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan-Exam Series</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">

        <!-- DataTables -->
        <link href="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/plugins';?>/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url().'theme/plugins';?>/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url().'theme/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>
		
				 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		


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
                                    <h4 class="page-title float-left">Exam</h4>

                                  

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
							<?php //print_r($exam_series);?>
                                <div class="card-box table-responsive"> 
							
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>											
											<th><center>Sr No. </center></th>
											<th><center>Exam Name</center></th>
											<th><center>Start Date</center></th>										
											<th><center>End Date</center></th>										
											<th><center>Action</center></th>										
										</tr>
									</thead>
									<tbody>
									<?php $status ='Allow'; $set=''; $count=0;$modelcount=1;$srno=1;?>
									<?php  foreach($exam_series as $exam_series) {
										if($exam_series['Question_available']){
										?>
										<tr>								
											
											<td><center><?php echo $srno; ?></center></td>
											<td><center><?php echo $exam_series['TUTORIAL_TITLE']; ?></center></td>
											<td><center><?php echo $exam_series['EXAM_START_DATE']; ?></center></td>
											<td><center><?php echo $exam_series['EXAM_END_DATE']; ?></center></td>
																						
											<td><center>
											<?php
											 $SERIES_ID = $exam_series['SERIES_ID'];
											if($exam_series['EXAM_STAUS']==0)
											{
												$count=$count+1;
											}
												//$exam_series['EXAM_STAUS'] ;
												if(!$exam_series['EXAM_STAUS']) 
											{ 
										//echo $exam_series['EXAM_DATE'];
												if($count==1)
												{
													if($exam_series['EXAM_DATE'])
													{
															?> 	<button type="button" class="btn btn-success">Failed </button><?php
														
													}
													else
													{
														if($exam_series['Question_available']){
														
													?> 	
													
													<a href="#my_modal<?php echo $modelcount;?>" data-toggle="modal" data-book-id="<?php echo $modelcount; ?>"> <button type="button" class="btn btn-success">Attend Exam</button></a>
														<?php } else { ?> <button type="button" class="btn btn-success">No Questions</button><?php  };?>
													
													
<div class="modal fade bs-example-modal-lg"  id="my_modal<?php  echo $modelcount;?>">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Online Instructions.</h4>
      </div>
      <div class="modal-body">	

 <div id="" style="text-align:-webkit-auto;line-height: 29px;" >
 <span>1.Total <b>25</b> questions will be displayed on screen.</span><br>
 <span>2.Each questions carries equal marks.</span><br>
 <span>3.One question will be displayed at a time on screen.</span></br>
 <span>4.There are 3 buttons below each questions. <strong>“NEXT”</strong>, <strong>“PREVIOUS” </strong>and <strong>“MARK”</strong>.</span></br>
<span>5.Questions will appear sequentially and if the participants want to skip or attempt a particular question later then click <strong>“MARKED”</strong> button.</span> </br>
<span>6.Total duration of exam is <strong>25 </strong> minutes.</span> </br>
<span>7.After <strong>25</strong> minutes system will get logged out automatically and answer sheet will be submitted.</span></br>
<span>8.Once you click “START” button entire test needs to be completed.</span></br>
<span>9.Click <strong>“FINISH” </strong>button to end your test and <strong>“SUBMIT” </strong> button to log out.</span> </br>
<span>10.System generated score will be displayed after submission of answer sheet  
Immediately.

</br> </br> 
<img style="" src="https://myfiles.space/user_files/29285_a2ebd9da3214e9fa/1558694311_online-instructions-2/1558694311_online-instructions-2.001.png" alt="" />
</span> <br> 
								</div><br>
								<form action="<?php echo base_url().'Employee/wizard';?>" method="post">
								<div class="form-group m-b-20">
									<div class="col-12 ">
										<div class="checkbox checkbox-custom pull-left">
										<input type="hidden" name="SERIES_ID" id="SERIES_ID" value="<?php echo $SERIES_ID; ?>" />
										<style>
										.checkbox label::after
										{
											   position: absolute !important;
                                               top: -23px !important;
											
										}
										
										</style>
											<input id="checkbox11" type="checkbox" required  />
											<label for="checkbox11">
											I have read and understood the above mentioned instruction.
												
											</label>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-default">Start Exam</button>
								</form>
	  
       
		
	<!--	<a href="<?php echo base_url().'Employee/wizard' ?>/<?php echo $SERIES_ID; ?>" > <button type="button" class="btn btn-success">Attend Exam</button></a>-->
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	<?php }
												}
												else
												{ }
											} 
											 else 
											 { ?> <button type="button" class="btn btn-success">Passed</button><?php  } ?>
											</center></td>
									</tr>  <?php } else { ?> 
<!--									<tr>
    <td colspan="3"><center>No Data Avaiable</center></td>
  </tr>--> <?php } ?>
									<?php $modelcount=$modelcount+1; } ?>
									
									</tbody>

                                        
                                    </table>			
				
			
				
				
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   <center> © 2016 All Rights Reserved @ Hetero Healthcare Limited </center>
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

        <!-- Required datatable js -->
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons1').DataTable({
                    lengthChange: false,
                //    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
		



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
				url: '<?php echo base_url();?>Employee/index',
				data: $('#examform').serialize(),
				success: function(data)
				{
				var yourval = jQuery.parseJSON(JSON.stringify(data));		
				var obj = jQuery.parseJSON(data);
				if(obj.status==1)
				{
					 swal({ title: obj.message,
					text: "Redirecting To Result Menu",
					type: "success"}).then(okay => {
					if (okay) {
				//		window.location.href = "<?php echo base_url().'Employee/exam_series';?>";
					}
					}); 
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
  <script type="text/javascript">
/* $(document).ready(function () {
	//Disable cut copy paste
	$('body').bind('cut copy paste', function (e) {
		e.preventDefault();
	});
	
	//Disable mouse right click
	$("body").on("contextmenu",function(e){
		return false;
	});
}); */
</script>  


<script type="text/javascript">
$('#my_modal').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
});
</script>
    </body>
</html>