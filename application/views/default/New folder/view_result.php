<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Udaan-View Result </title>
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
      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/flatly/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url().'wizard_assets/';?>css/style.css" />
      <style>
         h3, .h3 { font-size: 18px; }
         h1, .h1, h2, .h2, h3, .h3
         {
         margin-top: -17px !important;
         }
      </style>
   </head>
   <body>
      <!-- Questions -->
      <!-- Begin page -->
      <div id="wrapper">
      <!-- Top Bar Start -->
      <?php    $this->load->view('default/topbar');  ?>
      <!-- Top Bar End -->
      <!-- ========== Left Sidebar Start ========== -->
      <?php $this->load->view('default/sidebar');  ?>
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
								<?php // echo "<pre>";print_r($result_by_category); ?>
                                    <h4 class="page-title float-center"><center>Exam Report</center></h4>

                                    <ol class="breadcrumb float-right">
                                       <li class="breadcrumb-item"> <a href="#">Report</a></li>
                                     
                                    </ol>
									<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

                                    <div class="clearfix"></div>
									</br>
						<?php  if($last_exam) { ?>
									<table class="table"  id="customers">
                                        
                                        <tbody>
                                        <tr  style="border-bottom:1pt solid black;">
                                          
                                            <td>Employee ID : <?php echo $this->session->userdata('EMPLOYEE_ID');?></td>
                                            <td>Employee Name :<?php echo $this->session->userdata('EMPLOYEE_NAME');?></td>                               
                                           
                                        </tr>                                
    
										<tr  style="border-bottom:1pt solid black;">                                          
                                            <td>Division Name :<?php print_r($last_exam[0]->SERIES_TITLE);?></td>
                                             <td>Exam Name : <?php print_r($last_exam[0]->SERIES_DESC);?></td>
                                           
                                        </tr>									
										
										<tr>
                                            
                                            <td>Total Questions </td>
                                            <td>25 </td>
                                        </tr>
										<tr>
                                            
                                            <td>Total Obtained </td>
                                            <td><?php print_r($last_exam[0]->RESULT_SCORE);?> / 25</td>
                                        </tr>								
										<tr>
                                            
                                            <td>Percentage </td>
                                            <td> <?php print_r($last_exam[0]->RESULT_PERCENTAGE);?> %</td>
                                        </tr>										
										
										<tr>
                                            
                                            <td>Result </td>
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
                                            
                                            <td><?php  print_r($result_by_category->CATEGORYNAME);?> :</td>
                                             <td> <?php  print_r($result_by_category->Value); echo "/".$total;?> </td>
                                        </tr>
							   
							   <?php
						   }
										?>
									
                                        	<!--
                                        <tr>
                                            
                                            <td>Brand </td>
                                            <td colspan="2">10 </td>
                                        </tr>
										<tr>
                                            
                                            <td>Marketing </td>
                                            <td colspan="2">5 </td>
                                        </tr>	-->							
	

                                        </tbody>
						</table>  <?php } else { echo "<center>You have Not attended Any Exam..!!!</center>"; } ?>
									
						
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                     <center> © 2016 All Rights Reserved @ Hetero Healthcare Limited </center>
                </footer>

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