<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan-Examination App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">

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
                                <div class="page-title-box" style="padding: 0px !important;">
                                    <h4 class="page-title float-left"></h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#"></a></li>
                                       
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
						
						
						<div class="row">
    <div class="col-sm-5"><img src="<?php echo base_url().'theme/assets/images/uddan-1.png'; ?>" height="200px" width="350px">  </img> </div>
    <div class="col-sm-2" style="padding-top: 92px !important;"><h2> BY </h2></div>
    <div class="col-sm-5" style="padding-top: 40px !important;" ><img src="<?php echo base_url().'theme/assets/images/HeteroLogo.png'; ?>" height="125px" width="300px">  </img></div>
  </div>
						

<!--
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-box float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Total Questions</h6>
                                    <h4 class="mb-3" data-plugin="counterup"><?php print_r($questionnaire); ?></h4>
                                    <span class="text-muted ml-2 vertical-middle">All Questions</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-layers float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Exam Attended</h6>
                                    <h4 class="mb-3"><span data-plugin="counterup"><?php print_r($employee_results); ?></span></h4>
                                   <span class="text-muted ml-2 vertical-middle">All Exam Attended</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-tag float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Registered Employee</h6>
                                    <h4 class="mb-3"><span data-plugin="counterup"><?php print_r($reigistered_employee); ?></span></h4>
                                     <span class="text-muted ml-2 vertical-middle">All Employee</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-briefcase float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Total Tutorials</h6>
                                    <h4 class="mb-3" data-plugin="counterup"><?php print_r($tutorials); ?></h4>
                                     <span class="text-muted ml-2 vertical-middle">All Tutorials</span>
                                </div>
                            </div>
                        </div>-->
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
        <script src="<?php echo base_url().'theme/plugins';?>/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/counterup/jquery.counterup.min.js"></script>

        <!-- Chart JS -->
        <script src="<?php echo base_url().'theme/plugins';?>/chart.js/chart.bundle.js"></script>

        <!-- init dashboard -->
        <script src="<?php echo base_url().'theme/assets';?>/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>