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
                                    <h4 class="page-title float-left">Jquery Knob</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                        <li class="breadcrumb-item active">Jquery Knob</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2"
                                           data-fgColor="#188ae2" data-displayInput=false value="35"/>

                                    <h6 class="text-muted mt-3">Disable display input</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true
                                           data-fgColor="#4bd396" value="29"  data-knob-icon="icon-dollar"/>

                                    <h6 class="text-muted mt-3">Cursor mode</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#3ac9d6" data-displayPrevious=true value="44"/>

                                    <h6 class="text-muted mt-3">Display previous value</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                           data-fgColor="#f9c851" data-displayPrevious=true data-angleOffset=-125
                                           data-angleArc=250 value="44"/>

                                    <h6 class="text-muted mt-3">Angle offset and arc</h6>
                                </div>
                            </div><!-- end col-->
                        </div><!-- end row -->

                        <div class="row">

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150"
                                           data-angleOffset="90" data-linecap="round" data-fgColor="#f5707a"
                                           value="35"/>

                                    <h6 class="text-muted mt-3">Angle offset</h6>
                                </div>
                            </div><!-- end col-->

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000"
                                           data-displayPrevious=true data-max="15000" data-step="1000"
                                           value="-11000" data-fgColor="#3b3e47"/>

                                    <h6 class="text-muted mt-3">5-digit values, step 1000</h6>
                                </div>
                            </div><!-- end col-->

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round
                                           data-fgColor="#6b5fb5" value="80" data-skin="tron" data-angleOffset="180"
                                           data-readOnly=true data-thickness=".1"/>

                                    <h6 class="text-muted mt-3">Readonly</h6>
                                </div>
                            </div><!-- end col-->

                            <div class="col-md-3 col-sm-6 text-center">
                                <div class="card-box">
                                    <input data-plugin="knob" data-width="150" data-height="150"
                                           data-displayPrevious=true data-fgColor="#f06292" data-skin="tron"
                                           data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                           data-angleArc=250 />

                                    <h6 class="text-muted mt-3">Angle offset and arc</h6>
                                </div>
                            </div><!-- end col-->

                        </div><!-- end row-->

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

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="<?php echo base_url().'theme/plugins';?>/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="<?php echo base_url().'theme/plugins';?>/jquery-knob/jquery.knob.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>