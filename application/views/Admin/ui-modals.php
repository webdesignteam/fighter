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

        <!-- Custom box css -->
        <link href="<?php echo base_url().'theme/plugins';?>/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="<?php echo base_url().'theme/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
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
                                    <h4 class="page-title float-left">Modals</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Modals</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- Bootstrap Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Bootstrap Modals (default)</h4>

                                    <p class="text-muted m-b-30">
                                        A rendered modal with header, body, and set of actions in the footer.
                                    </p>

                                    <!-- sample modal content -->
                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h6>Text in a modal</h6>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h6>Overflowing text to show scroll behavior</h6>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!--  Modal content for the above example -->
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="button-list">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <!-- Small modal -->
                                        <button  type="button"class="btn btn-custom waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Modal with Pages</h4>

                                    <p class="text-muted m-b-30">
                                        Examples of custom modals.
                                    </p>

                                    <!-- Signup modal content -->
                                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                                                        <a href="index.html" class="text-success">
                                                            <span><img src="<?php echo base_url().'theme/assets';?>/images/logo_dark.png" alt="" height="20"></span>
                                                        </a>
                                                    </h2>


                                                    <form class="form-horizontal" action="#">

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="username">Name</label>
                                                                <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="password">Password</label>
                                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-20">
                                                            <div class="col-12">
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox11" type="checkbox" checked>
                                                                    <label for="checkbox11">
                                                                        I accept <a href="#">Terms and Conditions</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group account-btn text-center m-t-10">
                                                            <div class="col-12">
                                                                <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Sign Up Free</button>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->


                                    <!-- Signup modal content -->
                                    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                                                        <a href="index.html" class="text-success">
                                                            <span><img src="<?php echo base_url().'theme/assets';?>/images/logo_dark.png" alt="" height="20"></span>
                                                        </a>
                                                    </h2>

                                                    <form class="form-horizontal" action="#">

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress1">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <a href="page-recoverpw.html" class="text-muted pull-right font-14">Forgot your password?</a>
                                                                <label for="password1">Password</label>
                                                                <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-20">
                                                            <div class="col-12">
                                                                <div class="checkbox checkbox-custom">
                                                                    <input id="checkbox12" type="checkbox" checked>
                                                                    <label for="checkbox12">
                                                                        Remember me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group account-btn text-center m-t-10">
                                                            <div class="col-12">
                                                                <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="button-list">
                                        <!-- Custom width modal -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#signup-modal">Sign Up Modal</button>
                                        <!-- Full width modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#login-modal">Log in Modal</button>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- End row -->



                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0">Modals Examples (Animations)</h4>

                                    <p class="text-muted m-b-30">Use<code>data-animation="xxx" data-plugin="custommodal"
                                        data-overlaySpeed="xxx" data-overlayColor="#xxx"</code>. </p>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="fadein" data-plugin="custommodal"
                                       data-overlaySpeed="200" data-overlayColor="#36404a">Fade in</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="slide" data-plugin="custommodal"
                                       data-overlaySpeed="200" data-overlayColor="#36404a">Slide</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="newspaper" data-plugin="custommodal"
                                       data-overlaySpeed="200" data-overlayColor="#36404a">Newspaper</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="fall" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Fall</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="sidefall" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Side Fall</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="blur" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Blur</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="flip" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Flip</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="sign" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Sign</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="superscaled" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Super Scaled</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="slit" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Slit</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="rotate" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Rotate</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="letmein" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Letmein</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="makeway" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Makeway</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="slip" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Slip</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="corner" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Corner</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="slidetogether" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Slide together</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="scale" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Scale</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="door" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Door</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="push" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Push</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="contentscale" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Content Scale</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="swell" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Swell</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="rotatedown" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Rotate Down</a>

                                    <a href="#custom-modal" class="btn btn-light waves-effect w-md mr-2 mb-2" data-animation="flash" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Flash</a>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- End row -->



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

        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Modal title</h4>
            <div class="custom-modal-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/popper.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/waves.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.slimscroll.js"></script>

        <!-- Modal-Effect -->
        <script src="<?php echo base_url().'theme/plugins';?>/custombox/js/custombox.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/custombox/js/legacy.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>