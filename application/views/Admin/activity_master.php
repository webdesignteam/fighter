<?php// print_r($activity_master);exit;?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Genx-Activity Master</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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
                                    <h4 class="page-title float-left">Activity Master</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Activity</a></li>
                                       <li class="breadcrumb-item active">Activity Master</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
							<p class="pull-right">
                             <a href="<?php echo base_url().'Webadmin/add_activity';?>" > <button type="button" class="btn btn-success btn-rounded waves-light waves-effect w-md">Add Activity Master</button></a> </p>	
                                <div class="card-box table-responsive"> 
							
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Activity Name</th>
                                            <th>Status</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                    	<?php  foreach($activity_master as $activity_master) {?>
                                            <tr>
									<td><center><?php echo $activity_master->ACTIVITY_ID; ?></center></td>
									<td><center><?php echo $activity_master->ACTIVITY_NAME; ?></center></td>
									<td><center><?php echo $activity_master->STATUS; ?></center></td>
									<td><center><?php echo $activity_master->LASTUPDATED; ?></center></td>
									<td><center> <i class="far fa-edit"></i>  &nbsp; <i class="fa fa-trash" aria-hidden="true"></i></td>
                                                
                                               
                                             
                                             
                                               
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
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>