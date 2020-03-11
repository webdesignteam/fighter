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

		<!-- DataTables -->
		<link href="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url().'theme/plugins';?>/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<!-- Responsive datatable examples -->
		<link href="<?php echo base_url().'theme/plugins';?>/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

		<!-- App css -->
		<link href="<?php echo base_url().'employee_assets/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url().'employee_assets/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url().'employee_assets/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />

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
			<?php $this->load->view('default/layout/top_navigation');  ?>
			<!-- Top Bar End -->
			<!-- Left Sidebar Start -->
			<?php $this->load->view('default/layout/left_sidebar');  ?>
			<!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
 					<div class="container-fluid">			
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Exam Series</h4>
									<ol class="breadcrumb float-right">
										<li class="breadcrumb-item"><a href="<?php echo base_url().'Employee' ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Exam Series</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-12">
							<?php //echo "<pre>";print_r($exam_series);?>
                                <div class="card-box table-responsive"> 
                                    <table id="datatable-buttons" class="table table-custom">
									<thead>
										<tr>											
											<th>Sr No. </th>
											<th>Exam Name</th>
											<th>Start Date</th>										
											<th>End Date</th>										
											<th>Action</th>										
										</tr>
									</thead>
									<tbody>
										<?php $status ='Allow'; $set=''; $count=0;$modelcount=1;$srno=1;?>
										<?php  foreach($exam_series as $exam_series) {
											if($exam_series['Question_available']){
										?>
										<tr>								
											<td><?php echo $srno; ?></td>
											<td><?php echo $exam_series['TUTORIAL_TITLE']; ?></td>
											<td><?php echo $exam_series['EXAM_START_DATE']; ?></td>
											<td><?php echo $exam_series['EXAM_END_DATE']; ?></td>
											<td>
											<?php
												$SERIES_ID = $exam_series['SERIES_ID'];
												if($exam_series['EXAM_STAUS']==0) {
													$count=$count+1;
												}
												//$exam_series['EXAM_STAUS'] ;
												if(!$exam_series['EXAM_STAUS']) { 
												//echo $exam_series['EXAM_DATE'];
													if($count==1) {
														if($exam_series['EXAM_DATE']) { ?> 	
														<button type="button" class="btn btn-exam btn-sm">Failed </button>
														<?php }
													else {
														if($exam_series['Question_available']) { ?> 	
														<a href="#my_modal<?php echo $modelcount;?>" data-toggle="modal" data-book-id="<?php echo $modelcount; ?>"> 
														<button type="button" class="btn btn-exam btn-sm">Attend Exam</button></a>
														<?php } else { ?> 
														<button type="button" class="btn btn-exam btn-sm">No Questions</button><?php  };?>
														<div class="modal fade custom-modal" id="my_modal<?php  echo $modelcount;?>">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																		<h4 class="modal-title">Online Instructions.</h4>
																	</div>
																	<div class="modal-body">
																		<ol>
																			<li>Total <strong>25</strong> questions will be displayed on screen.</li>
																			<li>Each questions carries equal marks.</li>
																			<li>One question will be displayed at a time on screen.</li>
																			<li>There are 3 buttons below each questions. <strong>“NEXT”</strong>, <strong>“PREVIOUS” </strong>and <strong>“MARK”</strong>.</li>
																			<li>Questions will appear sequentially and if the participants want to skip or attempt a particular question later then click <strong>“MARKED”</strong> button.</li>
																			<li>Total duration of exam is <strong>25 </strong> minutes.</li>
																			<li>After <strong>25</strong> minutes system will get logged out automatically and answer sheet will be submitted.</li>
																			<li>Once you click “START” button entire test needs to be completed.</li>
																			<li>Click <strong>“FINISH” </strong>button to end your test and <strong>“SUBMIT” </strong> button to log out.</li>
																			<li>System generated score will be displayed after submission of answer sheet Immediately.</li>
																		</ol>
																	<form action="<?php echo base_url().'Employee/wizard';?>" method="post">
																	<div class="row">
																		<div class="col-md-8">
																			<div class="form-group m-b-20">
																				<div class="col-12">
																					<div class="checkbox checkbox-custom pull-left">
																						<input type="hidden" name="SERIES_ID" id="SERIES_ID" value="<?php echo $SERIES_ID; ?>" />
																						<style>
																							.checkbox label::after {
																								position: absolute !important;
																								top: -23px !important;
																							}
																						</style>
																						<input id="checkbox11" type="checkbox" required  />
																						<label for="checkbox11">I have read and understood the above mentioned instruction.</label>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 text-right">
																			<button type="submit" class="btn btn-exam btn-sm">Start Exam</button>
																		</div>
																	</div>
																		
																		
																	</form>
																	<!--	<a href="<?php echo base_url().'Employee/wizard' ?>/<?php echo $SERIES_ID; ?>" > <button type="button" class="btn btn-success">Attend Exam</button></a>-->
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>	
													<?php } } else { } } else { ?> 
													<button type="button" class="btn btn-success">Passed</button><?php  } ?>
												</td>
											</tr> 
											<?php } else { ?>  
											<!-- <tr><td colspan="3">No Data Avaiable</td></tr>--> 
											<?php } ?>
											<?php $modelcount=$modelcount+1;$srno= $srno+1; } ?>
										</tbody>                                        
                                    	</table>			
                         	       </div>
                        	    </div>
                    	    </div>
                 	       <!-- end row -->
						</div> 
						<!-- container -->
					</div>
					<!-- content -->
                <!-- Footer -->
                <?php $this->load->view('default/layout/footer');  ?>
            </div>
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