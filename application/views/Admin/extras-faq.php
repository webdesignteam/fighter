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
                                    <h4 class="page-title float-left">FAQ</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                                        <li class="breadcrumb-item active">FAQ</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-center mt-4">
                                                <h4>Frequently Asked Questions</h4>
                                                <p class="text-muted mt-3 mb-4"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                                                    dignissimos rem temporibus ea inventore alias!<br/> Beatae animi nemo ea
                                                    tempora, temporibus laborum facilis ut!</p>

                                                <button type="button" class="btn btn-primary waves-effect waves-light m-t-10">Email us your question</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light m-t-10">Send us a tweet</button>

                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->


                                    <div class="row m-t-50">
                                        <div class="col-sm-4">
                                            <div class="faq-box">
                                                <img src="<?php echo base_url().'theme/assets';?>/images/faq_icons/shield-1.png" alt="icon" class="img-responsive center-block">
                                                <h5 class="font-16">What is Lorem Ipsum?</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                        <!--/col-sm-4 -->

                                        <div class="col-sm-4">
                                            <div class="faq-box">
                                                <img src="<?php echo base_url().'theme/assets';?>/images/faq_icons/envelope.png" alt="icon" class="img-responsive center-block">
                                                <h5 class="font-16">Is safe use Lorem Ipsum?</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                        <!--/col-sm-4 -->

                                        <div class="col-sm-4">
                                            <div class="faq-box">
                                                <img src="<?php echo base_url().'theme/assets';?>/images/faq_icons/edit.png" alt="icon" class="img-responsive center-block">
                                                <h5 class="font-16">Why use Lorem Ipsum?</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                        <!--/col-sm-4 -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="faq-box">
                                                <img src="<?php echo base_url().'theme/assets';?>/images/faq_icons/files.png" alt="icon" class="img-responsive center-block">
                                                <h5 class="font-16">When can be used?</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                        <!--/col-sm-4 -->

                                        <div class="col-sm-4">
                                            <div class="faq-box">
                                                <img src="<?php echo base_url().'theme/assets';?>/images/faq_icons/open-book-1.png" alt="icon" class="img-responsive center-block">
                                                <h5 class="font-16">How many variations exist?</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                        <!--/col-sm-4 -->

                                        <div class="col-sm-4">
                                            <div class="faq-box">
                                                <img src="<?php echo base_url().'theme/assets';?>/images/faq_icons/tag.png" alt="icon" class="img-responsive center-block">
                                                <h5 class="font-16">License & Copyright</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            </div>
                                        </div>
                                        <!--/col-sm-4 -->
                                    </div>
                                    <!-- end row -->

                                    <p class="text-right"><small><i>Icon used by <a href="http://www.flaticon.com/packs/user-interface-7" target="_blank">flaticon</a> </i></small></p>

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