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

        <!-- Plugins css -->
        <link href="../plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url().'theme/plugins';?>/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url().'theme/plugins';?>/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url().'theme/plugins';?>/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                                    <h4 class="page-title float-left">Form Pickers</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Pickers</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Timepicker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        Easily select a time for a text input using your mouse or keyboards arrow keys.
                                    </p>

                                    <div class="form-group">
                                        <label>Default Time Picker</label>
                                        <div class="input-group">
                                            <input id="timepicker" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div><!-- input-group -->
                                    </div>

                                    <div class="form-group">
                                        <label>24 Hour Mode Time Picker</label>
                                        <div class="input-group">
                                            <input id="timepicker2" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div><!-- input-group -->
                                    </div>

                                    <div class="form-group">
                                        <label>Specify a step for the minute field</label>
                                        <div class="input-group">
                                            <input id="timepicker3" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div><!-- input-group -->
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Colorpicker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        Add color picker to field or to any other element.
                                    </p>

                                    <form action="#">
                                        <div class="form-group">
                                            <label>Default</label>
                                            <input type="text" class="colorpicker-default form-control" value="#8fff00">
                                        </div>
                                        <div class="form-group">
                                            <label>RGBA</label>
                                            <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                                        </div>
                                        <div class="form-group">
                                            <label>As Component</label>
                                            <div data-color-format="rgb" data-color="rgb(255, 146, 180)" class="colorpicker-default input-group">
                                                <input type="text" readonly="readonly" value="" class="form-control">
                                                <span class="input-group-append add-on">
                                                    <button class="btn btn-white" type="button">
                                                        <i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Date Range Picker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        A JavaScript component for choosing date ranges.
                                        Designed to work with the Bootstrap CSS framework.
                                    </p>

                                    <form>
                                        <div class="form-group m-b-20">
                                            <label>With all options</label>
                                            <input type="text" id="reportrange" class="form-control"/>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label>Date Range Pick</label>
                                            <div>
                                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015"/>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label>Date Range With Time</label>
                                            <div>
                                                <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM"/>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>Limit Selectable Dates</label>
                                            <div>
                                                <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015"/>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="header-title">Clock Picker</h4>
                                    <p class="text-muted font-14">
                                        A clock-style timepicker for Bootstrap (or jQuery).
                                    </p>
                                    <div class="form-group">
                                        <label>Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Auto close</label>
                                        <div class="input-group clockpicker m-b-20" data-placement="top" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Now time</label>
                                        <div class="input-group m-b-20">
                                            <input class="form-control" id="single-input" type="text" value="" placeholder="Now">
                                            <span class="input-group-append">
                                                <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Place at left, align the arrow to top </label>
                                        <div class="input-group clockpicker" data-placement="top" data-align="top">
                                            <input type="text" class="form-control" value="13:14">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- card-box -->

                            </div> <!-- end col -->

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

        <!-- plugin js -->
        <script src="<?php echo base_url().'theme/plugins';?>/moment/moment.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Init js -->
        <script src="<?php echo base_url().'theme/assets';?>/pages/jquery.form-pickers.init.js"></script>


        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>