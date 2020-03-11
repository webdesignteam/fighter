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

        <!-- Table Responsive css -->
        <link href="<?php echo base_url().'theme/plugins';?>/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

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
                                    <h4 class="page-title float-left">Responsive Table</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">Responsive Table</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th data-priority="1">Last Trade</th>
                                                    <th data-priority="3">Trade Time</th>
                                                    <th data-priority="1">Change</th>
                                                    <th data-priority="3">Prev Close</th>
                                                    <th data-priority="3">Open</th>
                                                    <th data-priority="6">Bid</th>
                                                    <th data-priority="6">Ask</th>
                                                    <th data-priority="6">1y Target Est</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td>597.74</td>
                                                    <td>12:12PM</td>
                                                    <td>14.81 (2.54%)</td>
                                                    <td>582.93</td>
                                                    <td>597.95</td>
                                                    <td>597.73 x 100</td>
                                                    <td>597.91 x 300</td>
                                                    <td>731.10</td>
                                                </tr>
                                                <tr>
                                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td>378.94</td>
                                                    <td>12:22PM</td>
                                                    <td>5.74 (1.54%)</td>
                                                    <td>373.20</td>
                                                    <td>381.02</td>
                                                    <td>378.92 x 300</td>
                                                    <td>378.99 x 100</td>
                                                    <td>505.94</td>
                                                </tr>
                                                <tr>
                                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td>191.55</td>
                                                    <td>12:23PM</td>
                                                    <td>3.16 (1.68%)</td>
                                                    <td>188.39</td>
                                                    <td>194.99</td>
                                                    <td>191.52 x 300</td>
                                                    <td>191.58 x 100</td>
                                                    <td>240.32</td>
                                                </tr>
                                                <tr>
                                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td>31.15</td>
                                                    <td>12:44PM</td>
                                                    <td>1.41 (4.72%)</td>
                                                    <td>29.74</td>
                                                    <td>30.67</td>
                                                    <td>31.14 x 6500</td>
                                                    <td>31.15 x 3200</td>
                                                    <td>36.11</td>
                                                </tr>
                                                <tr>
                                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td>25.50</td>
                                                    <td>12:27PM</td>
                                                    <td>0.66 (2.67%)</td>
                                                    <td>24.84</td>
                                                    <td>25.37</td>
                                                    <td>25.50 x 71100</td>
                                                    <td>25.51 x 17800</td>
                                                    <td>31.50</td>
                                                </tr>
                                                <tr>
                                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td>18.65</td>
                                                    <td>12:45PM</td>
                                                    <td>0.97 (5.49%)</td>
                                                    <td>17.68</td>
                                                    <td>18.23</td>
                                                    <td>18.65 x 10300</td>
                                                    <td>18.66 x 24000</td>
                                                    <td>21.12</td>
                                                </tr>
                                                <tr>
                                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td>15.81</td>
                                                    <td>12:25PM</td>
                                                    <td>0.11 (0.67%)</td>
                                                    <td>15.70</td>
                                                    <td>15.94</td>
                                                    <td>15.79 x 6100</td>
                                                    <td>15.80 x 17000</td>
                                                    <td>18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr>
                                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td>597.74</td>
                                                    <td>12:12PM</td>
                                                    <td>14.81 (2.54%)</td>
                                                    <td>582.93</td>
                                                    <td>597.95</td>
                                                    <td>597.73 x 100</td>
                                                    <td>597.91 x 300</td>
                                                    <td>731.10</td>
                                                </tr>
                                                <tr>
                                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td>378.94</td>
                                                    <td>12:22PM</td>
                                                    <td>5.74 (1.54%)</td>
                                                    <td>373.20</td>
                                                    <td>381.02</td>
                                                    <td>378.92 x 300</td>
                                                    <td>378.99 x 100</td>
                                                    <td>505.94</td>
                                                </tr>
                                                <tr>
                                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td>191.55</td>
                                                    <td>12:23PM</td>
                                                    <td>3.16 (1.68%)</td>
                                                    <td>188.39</td>
                                                    <td>194.99</td>
                                                    <td>191.52 x 300</td>
                                                    <td>191.58 x 100</td>
                                                    <td>240.32</td>
                                                </tr>
                                                <tr>
                                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td>31.15</td>
                                                    <td>12:44PM</td>
                                                    <td>1.41 (4.72%)</td>
                                                    <td>29.74</td>
                                                    <td>30.67</td>
                                                    <td>31.14 x 6500</td>
                                                    <td>31.15 x 3200</td>
                                                    <td>36.11</td>
                                                </tr>
                                                <tr>
                                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td>25.50</td>
                                                    <td>12:27PM</td>
                                                    <td>0.66 (2.67%)</td>
                                                    <td>24.84</td>
                                                    <td>25.37</td>
                                                    <td>25.50 x 71100</td>
                                                    <td>25.51 x 17800</td>
                                                    <td>31.50</td>
                                                </tr>
                                                <tr>
                                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td>18.65</td>
                                                    <td>12:45PM</td>
                                                    <td>0.97 (5.49%)</td>
                                                    <td>17.68</td>
                                                    <td>18.23</td>
                                                    <td>18.65 x 10300</td>
                                                    <td>18.66 x 24000</td>
                                                    <td>21.12</td>
                                                </tr>
                                                <tr>
                                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td>15.81</td>
                                                    <td>12:25PM</td>
                                                    <td>0.11 (0.67%)</td>
                                                    <td>15.70</td>
                                                    <td>15.94</td>
                                                    <td>15.79 x 6100</td>
                                                    <td>15.80 x 17000</td>
                                                    <td>18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr>
                                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td>597.74</td>
                                                    <td>12:12PM</td>
                                                    <td>14.81 (2.54%)</td>
                                                    <td>582.93</td>
                                                    <td>597.95</td>
                                                    <td>597.73 x 100</td>
                                                    <td>597.91 x 300</td>
                                                    <td>731.10</td>
                                                </tr>
                                                <tr>
                                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td>378.94</td>
                                                    <td>12:22PM</td>
                                                    <td>5.74 (1.54%)</td>
                                                    <td>373.20</td>
                                                    <td>381.02</td>
                                                    <td>378.92 x 300</td>
                                                    <td>378.99 x 100</td>
                                                    <td>505.94</td>
                                                </tr>
                                                <tr>
                                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td>191.55</td>
                                                    <td>12:23PM</td>
                                                    <td>3.16 (1.68%)</td>
                                                    <td>188.39</td>
                                                    <td>194.99</td>
                                                    <td>191.52 x 300</td>
                                                    <td>191.58 x 100</td>
                                                    <td>240.32</td>
                                                </tr>
                                                <tr>
                                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td>31.15</td>
                                                    <td>12:44PM</td>
                                                    <td>1.41 (4.72%)</td>
                                                    <td>29.74</td>
                                                    <td>30.67</td>
                                                    <td>31.14 x 6500</td>
                                                    <td>31.15 x 3200</td>
                                                    <td>36.11</td>
                                                </tr>
                                                <tr>
                                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td>25.50</td>
                                                    <td>12:27PM</td>
                                                    <td>0.66 (2.67%)</td>
                                                    <td>24.84</td>
                                                    <td>25.37</td>
                                                    <td>25.50 x 71100</td>
                                                    <td>25.51 x 17800</td>
                                                    <td>31.50</td>
                                                </tr>
                                                <tr>
                                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td>18.65</td>
                                                    <td>12:45PM</td>
                                                    <td>0.97 (5.49%)</td>
                                                    <td>17.68</td>
                                                    <td>18.23</td>
                                                    <td>18.65 x 10300</td>
                                                    <td>18.66 x 24000</td>
                                                    <td>21.12</td>
                                                </tr>
                                                <tr>
                                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td>15.81</td>
                                                    <td>12:25PM</td>
                                                    <td>0.11 (0.67%)</td>
                                                    <td>15.70</td>
                                                    <td>15.94</td>
                                                    <td>15.79 x 6100</td>
                                                    <td>15.80 x 17000</td>
                                                    <td>18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr>
                                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td>597.74</td>
                                                    <td>12:12PM</td>
                                                    <td>14.81 (2.54%)</td>
                                                    <td>582.93</td>
                                                    <td>597.95</td>
                                                    <td>597.73 x 100</td>
                                                    <td>597.91 x 300</td>
                                                    <td>731.10</td>
                                                </tr>
                                                <tr>
                                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td>378.94</td>
                                                    <td>12:22PM</td>
                                                    <td>5.74 (1.54%)</td>
                                                    <td>373.20</td>
                                                    <td>381.02</td>
                                                    <td>378.92 x 300</td>
                                                    <td>378.99 x 100</td>
                                                    <td>505.94</td>
                                                </tr>
                                                <tr>
                                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td>191.55</td>
                                                    <td>12:23PM</td>
                                                    <td>3.16 (1.68%)</td>
                                                    <td>188.39</td>
                                                    <td>194.99</td>
                                                    <td>191.52 x 300</td>
                                                    <td>191.58 x 100</td>
                                                    <td>240.32</td>
                                                </tr>
                                                <tr>
                                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td>31.15</td>
                                                    <td>12:44PM</td>
                                                    <td>1.41 (4.72%)</td>
                                                    <td>29.74</td>
                                                    <td>30.67</td>
                                                    <td>31.14 x 6500</td>
                                                    <td>31.15 x 3200</td>
                                                    <td>36.11</td>
                                                </tr>
                                                <tr>
                                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td>25.50</td>
                                                    <td>12:27PM</td>
                                                    <td>0.66 (2.67%)</td>
                                                    <td>24.84</td>
                                                    <td>25.37</td>
                                                    <td>25.50 x 71100</td>
                                                    <td>25.51 x 17800</td>
                                                    <td>31.50</td>
                                                </tr>
                                                <tr>
                                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td>18.65</td>
                                                    <td>12:45PM</td>
                                                    <td>0.97 (5.49%)</td>
                                                    <td>17.68</td>
                                                    <td>18.23</td>
                                                    <td>18.65 x 10300</td>
                                                    <td>18.66 x 24000</td>
                                                    <td>21.12</td>
                                                </tr>
                                                <tr>
                                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td>15.81</td>
                                                    <td>12:25PM</td>
                                                    <td>0.11 (0.67%)</td>
                                                    <td>15.70</td>
                                                    <td>15.94</td>
                                                    <td>15.79 x 6100</td>
                                                    <td>15.80 x 17000</td>
                                                    <td>18.16</td>
                                                </tr>
                                                <!-- Repeat -->
                                                <tr>
                                                    <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                    <td>597.74</td>
                                                    <td>12:12PM</td>
                                                    <td>14.81 (2.54%)</td>
                                                    <td>582.93</td>
                                                    <td>597.95</td>
                                                    <td>597.73 x 100</td>
                                                    <td>597.91 x 300</td>
                                                    <td>731.10</td>
                                                </tr>
                                                <tr>
                                                    <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                    <td>378.94</td>
                                                    <td>12:22PM</td>
                                                    <td>5.74 (1.54%)</td>
                                                    <td>373.20</td>
                                                    <td>381.02</td>
                                                    <td>378.92 x 300</td>
                                                    <td>378.99 x 100</td>
                                                    <td>505.94</td>
                                                </tr>
                                                <tr>
                                                    <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                    <td>191.55</td>
                                                    <td>12:23PM</td>
                                                    <td>3.16 (1.68%)</td>
                                                    <td>188.39</td>
                                                    <td>194.99</td>
                                                    <td>191.52 x 300</td>
                                                    <td>191.58 x 100</td>
                                                    <td>240.32</td>
                                                </tr>
                                                <tr>
                                                    <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                    <td>31.15</td>
                                                    <td>12:44PM</td>
                                                    <td>1.41 (4.72%)</td>
                                                    <td>29.74</td>
                                                    <td>30.67</td>
                                                    <td>31.14 x 6500</td>
                                                    <td>31.15 x 3200</td>
                                                    <td>36.11</td>
                                                </tr>
                                                <tr>
                                                    <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                    <td>25.50</td>
                                                    <td>12:27PM</td>
                                                    <td>0.66 (2.67%)</td>
                                                    <td>24.84</td>
                                                    <td>25.37</td>
                                                    <td>25.50 x 71100</td>
                                                    <td>25.51 x 17800</td>
                                                    <td>31.50</td>
                                                </tr>
                                                <tr>
                                                    <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                    <td>18.65</td>
                                                    <td>12:45PM</td>
                                                    <td>0.97 (5.49%)</td>
                                                    <td>17.68</td>
                                                    <td>18.23</td>
                                                    <td>18.65 x 10300</td>
                                                    <td>18.66 x 24000</td>
                                                    <td>21.12</td>
                                                </tr>
                                                <tr>
                                                    <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                    <td>15.81</td>
                                                    <td>12:25PM</td>
                                                    <td>0.11 (0.67%)</td>
                                                    <td>15.70</td>
                                                    <td>15.94</td>
                                                    <td>15.79 x 6100</td>
                                                    <td>15.80 x 17000</td>
                                                    <td>18.16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

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

        <!-- responsive-table-->
        <script src="<?php echo base_url().'theme/plugins';?>/responsive-table/js/rwd-table.min.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

        <script>
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>

    </body>
</html>