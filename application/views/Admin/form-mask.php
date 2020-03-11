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
                                    <h4 class="page-title float-left">Form Masks</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Masks</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Input Masks</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Your awesome text goes here.Your awesome text goes here.
                                    </p>

                                    <form action="#">
                                        <div class="form-group">
                                            <label>ISBN 1</label>
                                            <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                            <span class="font-14 text-muted">e.g "999-99-999-9999-9"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN 2</label>
                                            <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                            <span class="font-14 text-muted">999 99 999 9999 9</span>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN 3</label>
                                            <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                            <span class="font-14 text-muted">999/99/999/9999/9</span>
                                        </div>
                                        <div class="form-group">
                                            <label>IPV4</label>
                                            <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                            <span class="font-14 text-muted">192.168.110.310</span>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>IPV6</label>
                                            <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                            <span class="font-14 text-muted">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Input Masks</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Your awesome text goes here.Your awesome text goes here.
                                    </p>

                                    <form action="#">
                                        <div class="form-group">
                                            <label>Tax ID</label>
                                            <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                            <span class="font-14 text-muted">99-9999999</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                            <span class="font-14 text-muted">(999) 999-9999</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Currency</label>
                                            <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                            <span class="font-14 text-muted">$ 999,999,999.99</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                            <span class="font-14 text-muted">dd/mm/yyyy</span>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>Date 2</label>
                                            <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                            <span class="font-14 text-muted">dd-mm-yyyy</span>
                                        </div>

                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Auto Numberic</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Your awesome text goes here.Your awesome text goes here.
                                    </p>

                                    <form action="#">
                                        <div class="form-group">
                                            <label>Default</label>
                                            <input type="text" placeholder="" class="form-control autonumber" data-a-sep="." data-a-dec=",">
                                            <span class="font-14 text-muted">e.g. "1.234.567.890.123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric ($)</label>
                                            <input type="text" placeholder="" data-a-sign="$ " class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "$ $ 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric (€)</label>
                                            <input type="text" placeholder="" data-a-sign="€ " class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "€ 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric (Rs.)</label>
                                            <input type="text" placeholder="" data-a-sign="Rs. " class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "Rs. 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>4 digit Group (¥)</label>
                                            <input type="text" placeholder="" data-d-group="4" data-a-sign="¥ " class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "¥ 1,2345,6789,0123"</span>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Auto Numberic</h4>
                                    <p class="text-muted font-14 m-b-30">
                                        Your awesome text goes here.Your awesome text goes here.
                                    </p>

                                    <form action="#">
                                        <div class="form-group">
                                            <label>Auto Numeric (£)</label>
                                            <input type="text" placeholder="" data-a-sign="£ " class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "£ 1,234,567,890,123"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Auto Numeric (%)</label>
                                            <input type="text" placeholder="" data-a-sign="%" data-p-sign="s" class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "11%"</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Maximum Value (0 - 9999)</label>
                                            <input type="text" placeholder="" data-v-max="9999" data-v-min="0" class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "9,999"</span>
                                        </div>

                                        <div class="form-group">
                                            <label>Range Value (-99.99 - 1000.00)</label>
                                            <input type="text" placeholder="" data-v-min="-99.99" data-v-max="1000.00" class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "1000 Or -99.99"</span>
                                        </div>

                                        <div class="form-group m-b-0">
                                            <label>Bracket Value</label>
                                            <input type="text" placeholder="" data-a-sep="." data-a-dec="," data-v-min="-9999.99" data-v-max="0.00" data-n-bracket="(,)" class="form-control autonumber">
                                            <span class="font-14 text-muted">e.g. "(9,999.00)"</span>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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

        <script src="<?php echo base_url().'theme/plugins';?>/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/autoNumeric/autoNumeric.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(function($) {
                $('.autonumber').autoNumeric('init');
            });
        </script>

    </body>
</html>