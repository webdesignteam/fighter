<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan Admin-Series List</title>
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
                                    <h4 class="page-title float-left">Series</h4>
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
							<p class="pull-right">
                             <a href="<?php echo base_url(); ?>admin/add_series" > <button type="button" class="btn btn-success btn-rounded waves-light waves-effect w-md">Add New Series</button> </a></p>	
                                <div class="card-box table-responsive"> 
								<center style="color: red;"><?php echo $this->session->flashdata('series_message'); ?> </center> 
								<?php // echo "<pre>";print_r($series_list); ?>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
												<tr>							
												<th><center>ID</center></th>
												<th><center>Division</center></th>
												<th><center>Tutorial</center></th>
												<th> <center>START DATE</center></th>
												<th><center>END DATE</center></th>
												<th><center>ACTION</center></th>                                         
												</tr>
                                        </thead>
										   <tbody>
                                    	<?php 
                                               $counter=0;										
										
										foreach($series_list as $series_list) {?>
                                            <tr>
											<td><center><?php echo $counter=$counter+1; ?></center></td>
											<td><center><?php echo $series_list->SERIES_TITLE; ?></center></td>
											<td><center><?php echo $series_list->TUTORIAL_TITLE; ?></center></td>
											<td><center><?php echo $series_list->SERIES_START_DATE; ?></center></td>
											<td><center><?php echo $series_list->SERIES_END_DATE; ?></center></td>		<td><center> <a href="<?php echo base_url().'admin/edit_series/'.$series_list->SERIES_ID;?>" ><i class="far fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
											<a href="<?php echo base_url().'admin/delete_series/'.$series_list->SERIES_ID; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a>

										
											
											</td>
                                                
                                               
                                             
                                             
                                               
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
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>