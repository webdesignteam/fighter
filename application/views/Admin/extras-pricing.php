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
                                    <h4 class="page-title float-left">Pricing</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">Pricing</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-10 center-page">
                                <div class="text-center">
                                    <h4 class="mt-3">Choose your perfect plan</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has <br/> been the industry's standard dummy text ever since the
                                        1500s.
                                    </p>
                                </div>

                                <div class="row m-t-50">

                                    <!--Pricing Column-->
                                    <article class="pricing-column col-md-4">
                                        <div class="inner-box card-box">
                                            <div class="plan-header text-center">
                                                <h3 class="plan-title">Starter Pack</h3>
                                                <h2 class="plan-price">$19</h2>
                                                <div class="plan-duration">Per Month</div>
                                            </div>
                                            <ul class="plan-stats list-unstyled text-center">
                                                <li><b>10 GB</b> Storege</li>
                                                <li><b>500 GB</b> Bandwidth</li>
                                                <li><b>No</b> Domain</li>
                                                <li><b>1</b> User</li>
                                                <li><b>Email</b> Support</li>
                                                <li><b>24x7</b> Support</li>
                                            </ul>

                                            <div class="text-center mb-2">
                                                <a href="#" class="btn btn-success btn-bordered w-lg btn-md w-md btn-bordred btn-rounded waves-effect waves-light">Sign Up</a>
                                            </div>
                                        </div>
                                    </article>


                                    <!--Pricing Column-->
                                    <article class="pricing-column col-md-4">
                                        <div class="inner-box card-box">
                                            <div class="ribbon-pricing"><span>POPULAR</span></div>
                                            <div class="plan-header text-center">
                                                <h3 class="plan-title">Professional Pack</h3>
                                                <h2 class="plan-price">$29</h2>
                                                <div class="plan-duration">Per Month</div>
                                            </div>
                                            <ul class="plan-stats list-unstyled text-center">
                                                <li><b>50 GB</b> Storege</li>
                                                <li><b>900 GB</b> Bandwidth</li>
                                                <li><b>1</b> Domain</li>
                                                <li><b>20</b> User</li>
                                                <li><b>Email</b> Support</li>
                                                <li><b>24x7</b> Support</li>
                                            </ul>

                                            <div class="text-center mb-2">
                                                <a href="#" class="btn btn-success w-lg btn-md w-md btn-bordred btn-rounded waves-effect waves-light">Sign Up</a>
                                            </div>
                                        </div>
                                    </article>


                                    <!--Pricing Column-->
                                    <article class="pricing-column col-md-4">
                                        <div class="inner-box card-box">
                                            <div class="plan-header text-center">
                                                <h3 class="plan-title">Enterprise Pack</h3>
                                                <h2 class="plan-price">$39</h2>
                                                <div class="plan-duration">Per Month</div>
                                            </div>
                                            <ul class="plan-stats list-unstyled text-center">
                                                <li><b>100 GB</b> Storege</li>
                                                <li><b>2000 GB</b> Bandwidth</li>
                                                <li><b>10</b> Domain</li>
                                                <li><b>1000</b> User</li>
                                                <li><b>Email</b> Support</li>
                                                <li><b>24x7</b> Support</li>
                                            </ul>

                                            <div class="text-center mb-2">
                                                <a href="#" class="btn btn-success btn-bordered w-lg btn-md w-md btn-bordred btn-rounded waves-effect waves-light">Sign Up</a>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div><!-- end col -->
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

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>