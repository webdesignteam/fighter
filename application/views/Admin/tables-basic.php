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
                                    <h4 class="page-title float-left">Basic Tables</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">Basic Tables</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Basic example</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                                    </p>

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Inverse table</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Your awesome text goes here.Your awesome text goes here.
                                    </p>

                                    <table class="table table-dark">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Table head options</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                    </p>

                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Table head options</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                    </p>

                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Striped rows</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Use <code>.table-striped</code> to add zebra-striping to any table row
                                        within the <code>&lt;tbody&gt;</code>.
                                    </p>

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@TwBootstrap</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Bordered table</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                    </p>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@TwBootstrap</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Hoverable rows</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Create responsive tables by wrapping any
                                        <code>.table</code> in
                                        <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px).
                                    </p>
                            
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                            </div>
                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Small table</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.
                                    </p>

                                    <table class="table mb-0 table-sm">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                            <td>Column content</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                            
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Contextual classes</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Use contextual classes to color table rows or individual cells.
                                    </p>
                            
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active">
                                                <th scope="row">1</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-success">
                                                <th scope="row">3</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-info">
                                                <th scope="row">5</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-warning">
                                                <th scope="row">7</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-danger">
                                                <th scope="row">9</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                            </div>

                            <div class="col-lg-6">
                            
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Contextual with background color</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Use contextual classes to color table rows or individual cells.
                                    </p>
                            
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-dark text-white">
                                                <th scope="row">1</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="bg-success text-white">
                                                <th scope="row">3</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="bg-info text-white">
                                                <th scope="row">5</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="bg-warning text-white">
                                                <th scope="row">7</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="bg-danger text-white">
                                                <th scope="row">9</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Borderless table</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                                    </p>

                                    <table class="table table-borderless">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Borderless Inverse table</h4>
                                    <p class="text-muted font-14 m-b-20">
                                        Your awesome text goes here.Your awesome text goes here.
                                    </p>

                                    <table class="table table-dark table-borderless">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--- end row -->

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