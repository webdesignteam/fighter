<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />


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
                                    <h4 class="page-title float-left">Dashboard</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Exam</a></li>
                                       
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-box float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Total Tutorials</h6>
                                    <h4 class="mb-3" data-plugin="counterup"><?php print_r($tutorial_series); ?></h4>
                                    <span class="text-muted ml-2 vertical-middle">All Availble Tutorials</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-layers float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Attendies</h6>
                                    <h4 class="mb-3"><span data-plugin="counterup"><?php print_r($employee_results); ?></span></h4>
                                   <span class="text-muted ml-2 vertical-middle">All Attendies</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-tag float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Questions</h6>
                                    <h4 class="mb-3"><span data-plugin="counterup"><?php print_r($questionnaire); ?></span></h4>
                                     <span class="text-muted ml-2 vertical-middle">All Division questions</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="fi-briefcase float-right"></i>
                                    <h6 class="text-muted text-uppercase mb-3">Employee</h6>
                                    <h4 class="mb-3" data-plugin="counterup"><?php print_r($reigistered_employee); ?></h4>
                                     <span class="text-muted ml-2 vertical-middle">Registered Employee</span>
                                </div>
                            </div>
                        </div>

<!--
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="card-box">
                                    <h4 class="header-title">Transactions History</h4>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">1.78%</span> <small></small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Average Order Value</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">25.87</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Total Wallet Balance</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">87,4517</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <canvas id="transactions-chart" height="350" class="mt-4"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="card-box">
                                    <h4 class="header-title">Sales History</h4>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">3.94%</span> <small></small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Average Sales</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> <span class="text-dark">16.25</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mt-3">
                                                <h6 class="font-normal text-muted font-14">Total Sales</h6>
                                                <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">124,858.67</span> <small>USD</small></h6>
                                            </div>
                                        </div>
                                    </div>

                                    <canvas id="sales-history" height="350" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div>-->
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