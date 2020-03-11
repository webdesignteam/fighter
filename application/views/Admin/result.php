<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan-Exam Result</title>
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

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
          
		<?php   $this->load->view('Admin/topbar');  ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           
		   <?php   $this->load->view('Admin/sidebar');  ?>
		   
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
                                    <h4 class="page-title float-left">Employee</h4>
                                    <ol class="breadcrumb float-right">
                                       <li class="breadcrumb-item active">List</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive"> 
								<?php //echo "<pre>";print_r($result_by_category]); ?>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>							
                                            <th>ID</th>                                           
                                            <th>EMPLOYEE ID</th>
											<th>NAME</th>
                                            <th>EXAM TITLE</th>
                                            <th>DIVISION</th>
                                            <th>OBTAINED MARK</th>
                                            <th>TOTAL MARK</th>
                                            <th>Brand</th>
                                            <th>Marketing</th>
                                            <th>Medical</th>
                                            <th>PERCENTAGE</th>
                                            <th>DATE</th>
                                            <th>Action</th>
                                                                                   
                                         
                                        </tr>
                                        </thead>
										   <tbody>
                                    	<?php 
                                               $counter=0;										
										
										foreach($employee_list as $employee_list) {?>
										<tr>
										<td><center><?php echo $counter=$counter+1; ?></center></td>
										<td><center><?php echo $employee_list['RESULT_EMPLOYEE_ID']; ?></center></td>
										<td><center><?php echo $employee_list['RE_NAME']; ?></center></td>

										<td><center><?php echo $employee_list['SERIES_DESC']; ?></center></td>
										<td><center><?php echo $employee_list['RE_DIVISION']; ?></center></td>						
										<td><center><?php echo $employee_list['RESULT_SCORE']; ?></center></td> 						
										<td><center><?php echo $employee_list['RESULT_TOTAL']; ?></center></td> 						
										<td><center><?php echo $employee_list['Brand']; ?></center></td> 						
										<td><center><?php echo $employee_list['Marketing']; ?></center></td> 						
										<td><center><?php echo $employee_list['Medical']; ?></center></td> 						
										<td><center><?php if(count($employee_list['RESULT_PERCENTAGE'])) { echo $employee_list['RESULT_PERCENTAGE']; } else { echo "0"; }; ?> %</center></td>
										<td><center><?php echo $employee_list['RESULT_DATE']; ?></center></td>
                                       <td><center><p class="pull-right">
                             <a href="<?php echo base_url().'admin/result_details/'.$employee_list['RESULT_EMPLOYEE_ID']; ?>"> <button type="button" class="btn btn-success btn-rounded waves-light waves-effect w-md">View Result</button> </a></p></center></td>										
									
										</tr>
										<?php } ?>
                                        
                                        </tbody>


                                      
                                    </table>
                                </div>
                            </div>
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
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    //buttons: ['copy', 'excel', 'pdf']
					buttons: [
    {
        extend: 'csv',
        text: 'Export csv',
        charset: 'utf-8',
        extension: '.csv',
        filename: 'export',
        bom: true
    }
] 
/* buttons: [
        { extend: 'copy', className: 'copyButton',charset: 'utf-8' },
        { extend: 'excel', className: 'excelButton',charset: 'utf-8' }
    ] */
	
/* 	 dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
		  */
		 
 
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>