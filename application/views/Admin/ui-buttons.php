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
                                    <h4 class="page-title float-left">Buttons</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                        <li class="breadcrumb-item active">Buttons</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Default Buttons</h4>
                                    <p class="text-muted m-b-25 font-14">Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-gradient waves-light waves-effect w-md">Gradient</button>
                                        <button type="button" class="btn btn-primary waves-light waves-effect w-md">Primary</button>
                                        <button type="button" class="btn btn-secondary waves-light waves-effect w-md">Secondary</button>
                                        <button type="button" class="btn btn-success waves-light waves-effect w-md">Success</button>
                                        <button type="button" class="btn btn-danger waves-light waves-effect w-md">Danger</button>
                                        <button type="button" class="btn btn-warning waves-light waves-effect w-md">Warning</button>
                                        <button type="button" class="btn btn-info waves-light waves-effect w-md">Info</button>
                                        <button type="button" class="btn btn-light waves-effect w-md">Light</button>
                                        <button type="button" class="btn btn-dark waves-light waves-effect w-md">Dark</button>
                                        <button type="button" class="btn btn-link waves-effect w-md">Link</button>
                                        <button type="button" class="btn btn-pink waves-effect w-md waves-light">Pink</button>
                                        <button type="button" class="btn btn-purple waves-effect w-md waves-light">Purple</button>
                                        <button type="button" class="btn btn-custom waves-light waves-effect w-md">Custom</button>
                                    </div>

                                    <h4 class="header-title m-t-50">Button Bordered</h4>
                                    <p class="text-muted m-b-25 font-14">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-outline-primary waves-light waves-effect w-md">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary waves-light waves-effect w-md">Secondary</button>
                                        <button type="button" class="btn btn-outline-success waves-light waves-effect w-md">Success</button>
                                        <button type="button" class="btn btn-outline-danger waves-light waves-effect w-md">Danger</button>
                                        <button type="button" class="btn btn-outline-warning waves-light waves-effect w-md">Warning</button>
                                        <button type="button" class="btn btn-outline-info waves-light waves-effect w-md">Info</button>
                                        <button type="button" class="btn btn-outline-light waves-effect w-md">Light</button>
                                        <button type="button" class="btn btn-outline-dark waves-light waves-effect w-md">Dark</button>
                                        <button type="button" class="btn btn-outline-pink waves-effect w-md waves-light">Pink</button>
                                        <button type="button" class="btn btn-outline-purple waves-effect w-md waves-light">Purple</button>
                                        <button type="button" class="btn btn-outline-custom waves-light waves-effect w-md">Custom</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Button-Rounded</h4>
                                    <p class="text-muted m-b-25 font-14">Add <code>.btn-rounded</code> to default button to get rounded corners.</p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-gradient btn-rounded waves-light waves-effect w-md">Gradient</button>
                                        <button type="button" class="btn btn-primary btn-rounded waves-light waves-effect w-md">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-rounded waves-light waves-effect w-md">Secondary</button>
                                        <button type="button" class="btn btn-success btn-rounded waves-light waves-effect w-md">Success</button>
                                        <button type="button" class="btn btn-danger btn-rounded waves-light waves-effect w-md">Danger</button>
                                        <button type="button" class="btn btn-warning btn-rounded waves-light waves-effect w-md">Warning</button>
                                        <button type="button" class="btn btn-info btn-rounded waves-light waves-effect w-md">Info</button>
                                        <button type="button" class="btn btn-light btn-rounded waves-effect w-md">Light</button>
                                        <button type="button" class="btn btn-dark btn-rounded waves-light waves-effect w-md">Dark</button>
                                        <button type="button" class="btn btn-link btn-rounded waves-effect w-md">Link</button>
                                        <button type="button" class="btn btn-pink btn-rounded waves-effect w-md waves-light">Pink</button>
                                        <button type="button" class="btn btn-purple btn-rounded waves-effect w-md waves-light">Purple</button>
                                        <button type="button" class="btn btn-custom btn-rounded waves-light waves-effect w-md">Custom</button>
                                    </div>

                                    <h4 class="header-title m-t-50">Button Bordered Rounded</h4>
                                    <p class="text-muted m-b-25 font-14">Use a classes <code>.btn-outline-**</code> to quickly create a bordered buttons.</p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-outline-primary btn-rounded waves-light waves-effect w-md">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-rounded waves-light waves-effect w-md">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-rounded waves-light waves-effect w-md">Success</button>
                                        <button type="button" class="btn btn-outline-danger btn-rounded waves-light waves-effect w-md">Danger</button>
                                        <button type="button" class="btn btn-outline-warning btn-rounded waves-light waves-effect w-md">Warning</button>
                                        <button type="button" class="btn btn-outline-info btn-rounded waves-light waves-effect w-md">Info</button>
                                        <button type="button" class="btn btn-outline-light btn-rounded waves-effect w-md">Light</button>
                                        <button type="button" class="btn btn-outline-dark btn-rounded waves-light waves-effect w-md">Dark</button>
                                        <button type="button" class="btn btn-outline-pink btn-rounded waves-effect w-md waves-light">Pink</button>
                                        <button type="button" class="btn btn-outline-purple btn-rounded waves-effect w-md waves-light">Purple</button>
                                        <button type="button" class="btn btn-outline-custom btn-rounded waves-light waves-effect w-md">Custom</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Button-Width</h4>
                                    <p class="text-muted m-b-25 font-14">
                                        Create buttons with minimum width by adding add <code>.w-xs</code>, <code>.w-sm</code>, <code>.w-md</code> or <code>.w-lg</code>.
                                    </p>

                                    <button type="button" class="btn btn-light waves-effect w-xs">Xs</button>
                                    <button type="button" class="btn btn-light waves-effect w-sm">Small</button>
                                    <button type="button" class="btn btn-light waves-effect w-md">Middle</button>
                                    <button type="button" class="btn btn-light waves-effect w-lg">Large</button>

                                    <h4 class="header-title m-t-50">Button-Sizes</h4>
                                    <p class="text-muted m-b-25 font-14">
                                        Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-primary waves-effect waves-light btn-lg">Large</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Normal</button>
                                        <button type="button" class="btn btn-success waves-effect waves-light btn-sm">Small</button>
                                    </div>

                                    <h4 class="header-title m-t-50">Button-Disabled</h4>
                                    <p class="text-muted m-b-25 font-14">
                                        Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-info" disabled>Info</button>
                                        <button type="button" class="btn btn-purple" disabled>Purple</button>
                                        <button type="button" class="btn btn-pink" disabled>Pink</button>
                                        <button type="button" class="btn btn-dark" disabled>Dark</button>
                                    </div>

                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-4">
                                <div class="card-box">

                                    <h4 class="text-dark  header-title m-t-0">Icon Button</h4>
                                    <p class="text-muted m-b-25 font-14">
                                        Icon only button.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-icon waves-effect btn-light"> <i class="fa fa-heart-o"></i> </button>
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </button>
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-purple"> <i class="fa fa-music"></i> </button>
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-star"></i> </button>
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-success"> <i class="fa fa-thumbs-o-up"></i> </button>
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-info"> <i class="fa fa-keyboard-o"></i> </button>
                                        <button type="button" class="btn btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-wrench"></i> </button>
                                        <br>
                                        <button type="button" class="btn btn-light waves-effect"> <i class="fa fa-heart m-r-5"></i> <span>Like</span> </button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light"> <i class="fa fa-rocket m-r-5"></i> <span>Launch</span> </button>
                                        <button type="button" class="btn btn-info waves-effect waves-light"> <i class="fa fa-cloud m-r-5"></i> <span>Cloud Hosting</span> </button>
                                        <button type="button" class="btn btn-pink waves-effect waves-light"> <span>Book Flight</span> <i class="fa fa-plane m-l-5"></i> </button>
                                        <button type="button" class="btn btn-purple waves-effect waves-light"> <span>Donate Money</span> <i class="fa fa-money m-l-5"></i> </button>
                                    </div>

                                    <h4 class="text-dark  header-title m-t-50">Block Button</h4>
                                    <p class="text-muted m-b-25 font-14">
                                        Create block level buttons,with by adding add <code>.btn-block</code>.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-block btn-primary waves-effect waves-light">Block Button</button>
                                        <button type="button" class="btn btn-block btn-sm btn-info waves-effect waves-light">Block Button</button>
                                        <button type="button" class="btn btn-block btn-xs btn-success waves-effect waves-light">Block Button</button>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card-box">

                                    <h4 class="text-dark  header-title m-t-0">Button Group</h4>
                                    <p class="text-muted m-b-25 font-14">
                                        Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
                                    </p>


                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-light waves-effect">Left</button>
                                        <button type="button" class="btn btn-light waves-effect">Middle</button>
                                        <button type="button" class="btn btn-light waves-effect">Right</button>
                                    </div>
                                    <br>

                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-light waves-effect">1</button>
                                        <button type="button" class="btn btn-light waves-effect">2</button>
                                        <button type="button" class="btn btn-light waves-effect waves-light">3</button>
                                        <button type="button" class="btn btn-light waves-effect">4</button>
                                    </div>
                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-light waves-effect">5</button>
                                        <button type="button" class="btn btn-light waves-effect waves-light">6</button>
                                        <button type="button" class="btn btn-light waves-effect">7</button>
                                    </div>
                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-light waves-effect">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2">
                                        <button type="button" class="btn btn-light waves-effect">1</button>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">2</button>
                                        <button type="button" class="btn btn-light waves-effect">3</button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="btn-group-vertical mb-2">
                                                <button type="button" class="btn btn-light waves-effect">Top</button>
                                                <button type="button" class="btn btn-light waves-effect">Middle</button>
                                                <button type="button" class="btn btn-light waves-effect">Bottom</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="btn-group-vertical mb-2">
                                                <button type="button" class="btn btn-light waves-effect">Button 1</button>
                                                <button type="button" class="btn btn-light waves-effect">Button 2</button>
                                                <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0"><b>Social buttons</b></h4>
                                    <p class="text-muted m-b-30 font-14">
                                        Use class <code>.btn-@yoursocial</code> to the parent.
                                    </p>

                                    <div class="button-list">
                                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                                            <i class="fa fa-facebook"></i>
                                        </button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                            <i class="fa fa-linkedin"></i>
                                        </button>

                                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                            <i class="fa fa-dribbble"></i>
                                        </button>

                                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                            <i class="fa fa-google-plus"></i>
                                        </button>

                                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                            <i class="fa fa-pinterest"></i>
                                        </button>

                                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                            <i class="fa fa-dropbox"></i>
                                        </button>

                                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                                            <i class="fa fa-flickr"></i>
                                        </button>

                                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                            <i class="fa fa-tumblr"></i>
                                        </button>

                                        <button type="button" class="btn btn-skype waves-effect waves-light">
                                            <i class="fa fa-skype"></i>
                                        </button>

                                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                                            <i class="fa fa-youtube"></i>
                                        </button>

                                        <button type="button" class="btn btn-github waves-effect waves-light">
                                            <i class="fa fa-github"></i>
                                        </button>


                                        <br>


                                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                                            <i class="fa fa-facebook m-r-5"></i> Facebook
                                        </button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                                            <i class="fa fa-twitter m-r-5"></i> Twitter
                                        </button>

                                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                            <i class="fa fa-linkedin m-r-5"></i> Linkedin
                                        </button>

                                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                            <i class="fa fa-dribbble m-r-5"></i> Dribbble
                                        </button>

                                        <button type="button" class="btn btn-googleplus waves-effect waves-light">
                                            <i class="fa fa-google-plus m-r-5"></i> Google+
                                        </button>

                                        <button type="button" class="btn btn-instagram waves-effect waves-light">
                                            <i class="fa fa-instagram m-r-5"></i> Instagram
                                        </button>

                                        <button type="button" class="btn btn-pinterest waves-effect waves-light">
                                            <i class="fa fa-pinterest m-r-5"></i> Pinterest
                                        </button>

                                        <button type="button" class="btn btn-dropbox waves-effect waves-light">
                                            <i class="fa fa-dropbox m-r-5"></i> Dropbox
                                        </button>

                                        <button type="button" class="btn btn-flickr waves-effect waves-light">
                                            <i class="fa fa-flickr m-r-5"></i> Flickr
                                        </button>

                                        <button type="button" class="btn btn-tumblr waves-effect waves-light">
                                            <i class="fa fa-tumblr m-r-5"></i> Tumblr
                                        </button>

                                        <button type="button" class="btn btn-skype waves-effect waves-light">
                                            <i class="fa fa-skype m-r-5"></i> Skype
                                        </button>

                                        <button type="button" class="btn btn-youtube waves-effect waves-light">
                                            <i class="fa fa-youtube m-r-5"></i> Youtube
                                        </button>

                                        <button type="button" class="btn btn-github waves-effect waves-light">
                                            <i class="fa fa-github m-r-5"></i> Github
                                        </button>
                                    </div>

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