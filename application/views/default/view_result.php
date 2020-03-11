<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php $this->load->view('default/layout/title');  ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <?php $this->load->view('default/layout/favicon');  ?>

        <!-- Styles -->
        <?php $this->load->view('default/layout/styles');  ?>
      
        <!-- App css -->
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'employee_assets/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />

      <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>
      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <!--<link rel="stylesheet" href="<?php echo base_url().'wizard_assets/';?>css/style.css" />-->
      <style>
         h3, .h3 { font-size: 18px; }
         h1, .h1, h2, .h2, h3, .h3
         {
         margin-top: -17px !important;
         }
      </style>
   </head>
   <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
			<?php $this->load->view('default/layout/top_navigation');  ?>
			<!-- Top Bar End -->
			<!-- Left Sidebar Start -->
			<?php $this->load->view('default/layout/left_sidebar');  ?>
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
                                    <h4 class="page-title float-left">Exam Report</h4>
                                    <ol class="breadcrumb float-right">
										<li class="breadcrumb-item"><a href="<?php echo base_url().'Employee' ?>">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Exam Report</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <?php // echo "<pre>";print_r($result_by_category); ?>
                        <div class="row">
                            <div class="col-12">
                                <?php  if($last_exam) { ?>
								<table class="table table-custom"  id="customers">
                                    <tbody>
                                        <tr>
                                            <td><strong>Employee ID : </strong> <?php echo $this->session->userdata('EMPLOYEE_ID');?></td>
                                            <td><strong>Employee Name :</strong> <?php echo $this->session->userdata('EMPLOYEE_NAME');?></td>                               
                                        </tr>                                
										<tr>                                          
                                            <td><strong>Division Name :</strong> <?php print_r($last_exam[0]->SERIES_TITLE);?></td>
                                            <td><strong>Exam Name :</strong> <?php print_r($last_exam[0]->SERIES_DESC);?></td>
                                        </tr>									
										<tr>
                                            <td><strong>Total Questions</strong></td>
                                            <td>25 </td>
                                        </tr>
										<tr>
                                            <td><strong>Total Obtained</strong></td>
                                            <td><?php print_r($last_exam[0]->RESULT_SCORE);?> / 25</td>
                                        </tr>								
										<tr>
                                            <td><strong>Percentage</strong></td>
                                            <td><?php print_r($last_exam[0]->RESULT_PERCENTAGE);?> %</td>
                                        </tr>										
										<tr>
                                            <td><strong>Result</strong></td>
                                            <td> <?php if($last_exam[0]->RESULT_PERCENTAGE >= 75) { echo "Passs";} else { echo"Failed"; } ?>  (75 Or More Than 75% Required to Pass)</td>
                                        </tr>
										<?php
										foreach($result_by_category as $result_by_category)
                                        {
							            // print_r($result_by_category);
							            switch ($result_by_category->CAT_ID) {
                                            case "1":
                                            $total=10;
                                                break;
                                            case "2":
                                            $total=10;
                                                break;
                                            default:
                                            $total=5;
                                        }
                                        ?> 
							            <tr>
                                            <td><strong><?php  print_r($result_by_category->CATEGORYNAME);?> :</strong></td>
                                            <td><?php  print_r($result_by_category->Value); echo "/".$total;?> </td>
                                        </tr>
                                        <?php } ?>
									</tbody>
                                </table>
                                <?php } else { echo "<center>You have Not attended Any Exam..!!!</center>"; } ?>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <!-- Footer -->
                <?php $this->load->view('default/layout/footer');  ?>
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
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
      
   </body>
</html>