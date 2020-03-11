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

        <!-- Sweet Alert css -->
        <link href="<?php echo base_url().'theme/plugins';?>/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="page-title float-left">Sweet Alert</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Sweet Alert</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="min-width:50%;">Alert Type</th>
                                            <th>Example</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>A basic message</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>A title with a text under</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A success message!</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A warning message, with a function attached to the "Confirm"-button...</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>By passing a parameter, you can execute something else for "Cancel".</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A message with custom Image Header</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A message with auto close timer</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Custom HTML description and buttons</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="custom-html-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A message with custom width, padding and background</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="custom-padding-width-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ajax request example</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="ajax-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chaining modals (queue) example</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="chaining-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dynamic queue example</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="dynamic-alert">Click me</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

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

        <!-- Sweet Alert Js  -->
        <script src="<?php echo base_url().'theme/plugins';?>/sweet-alert/sweetalert2.min.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/pages/jquery.sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

    </body>
</html>