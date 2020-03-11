<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">

        <!-- jvectormap -->
        <link href="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

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
                                    <h4 class="page-title float-left">Vector Map</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                        <li class="breadcrumb-item active">Vector Map</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">World Map</h4>

                                    <div id="world-map-markers" style="height: 500px"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">USA Map</h4>

                                    <div id="usa" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">India Map</h4>

                                    <div id="india" style="height: 400px"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">UK Map</h4>

                                    <div id="uk" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Chicago Map</h4>

                                    <div id="chicago" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Australia Map</h4>

                                    <div id="australia" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Canada Map</h4>

                                    <div id="canada" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Germany Map</h4>

                                    <div id="germany" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Asia Map</h4>

                                    <div id="asia" style="height: 400px"></div>
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

        <!-- Jvector map -->
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/gdp-data.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/pages/jquery.jvectormap.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>