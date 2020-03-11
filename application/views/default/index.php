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

        <!-- App css -->
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        

        <script src="<?php echo base_url().'employee_assets/assets';?>/js/modernizr.min.js"></script>

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
            <!-- Start Content -->

            
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Dashboard</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url().'Employee' ?>">Fighter</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
						<div class="row">
                            <div class="col-sm-7" style="display: flex; margin: 80px auto 0 auto;">
                                <img class="pull-left" src="<?php echo base_url().'employee_assets/assets/images/logo.svg'; ?>" height="200px">
                                <h2 class="pull-left" style="line-height: 200px;">By</h2>
                                <img class="pull-left" style="margin-left: 30px;" src="<?php echo base_url().'employee_assets/assets/images/hhcl_Logo.svg'; ?>" width="300px">
                            </div>
                        </div>
                    </div> 
                    <!-- container -->
                </div> 
                <!-- content -->

                <!-- Footer -->
                <?php $this->load->view('default/layout/footer');  ?>
                

            </div>
            <!-- Start Content End -->
        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/jquery.min.js"></script>
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/popper.min.js"></script>
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/waves.js"></script>
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url().'employee_assets/plugins';?>/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url().'employee_assets/plugins';?>/counterup/jquery.counterup.min.js"></script>

        <!-- Chart JS -->
        <script src="<?php echo base_url().'employee_assets/plugins';?>/chart.js/chart.bundle.js"></script>

        <!-- init dashboard -->
        <script src="<?php echo base_url().'employee_assets/assets';?>/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'employee_assets/assets';?>/js/jquery.app.js"></script>
    </body>
</html>