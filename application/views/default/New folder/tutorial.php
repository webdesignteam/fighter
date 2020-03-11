<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan-Tutorials List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">

        <!-- DataTables -->
        <link href="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/plugins';?>/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url().'theme/plugins';?>/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo base_url().'theme/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url().'theme/assets';?>/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>
		<style type="text/css"> @media print { body { display:none } } </style>
		<style> #toolbarContainer {  position: absolute;
visibility:hidden;
display:none; } </style>
<style> .toolbar {  position: absolute;
visibility:hidden;
display:none; }</style>
<style>.toolbar{  position: absolute;
visibility:hidden;
display:none; }


#outerContainer #mainContainer div.toolbar {
  display: none !important; /* hide PDF viewer toolbar */
}
#outerContainer #mainContainer #viewerContainer {
  top: 0 !important; /* move doc up into empty bar space */
}

</style>
	    <link rel="stylesheet" href="<?php echo base_url().'tutorial/';?>assets/css/font-awesome.min.css">
<style>
.main-block {

}
.content-block {
    padding-top: 15px;
}
.content-title {
    padding: 3px;
    border: 3px solid #000;
    width: 205px;
    margin: 0 auto;
}
.content-title h1 {
    text-align: center;
    font-weight: 700;
    color: #000;
    font-size: 28px;
    line-height: normal;
    padding: 3px;
    border: 1px solid #000;
    width: 190px;
    margin: 0 auto;
}
.content-block h2 {
    color: #000;
    font-size: 20px;
    font-weight: 600;
    padding: 10px 0;
}
.content-block p {
    color: #000;
    font-size: 16px;
    padding-bottom: 10px;
}
.italic-style {
    font-style: italic;
    font-weight: 700;
}

.fist-menu {

}
.fist-menu li {
    color: #000;
    font-size: 16px;
    padding-bottom: 10px;
    list-style: disc;
    margin-left: 20px;
}
.images-link {
    list-style: none !important;
}
.images-link img {
    margin: 0 auto;
}
.content-block h2 {
    color: #000;
    font-size: 20px;
    font-weight: 600;
    padding: 10px 0;
}
.underline {
    text-decoration: underline;
}
.tree-structure2 {
    margin: 0 auto;
}
.second-menu li {
    list-style: square;
}

</style>
    <link rel="stylesheet" href="<?php echo base_url().'tutorial/';?>assets/css/responsive.css" type="text/css">	

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
                                    <h4 class="page-title float-left">Tutorials</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Active</a></li>                                       
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
					

                                  <div class="row">
                            <div class="col-lg-12">
                                <div id="accordion" class="m-b-30">                                
									
										<?php  
										$counter=1;
										foreach($tutorial as $tutorial) { 
                                        $status='';
										if($counter==1) { $status ="show";}
										
										
										?>
										
										 <div class="card">
                                        <div class="card-header" id="headingOne">
										 <div class="row">
                                          <div class="col-lg-6">
                                            <h6 class="m-0">
                                                <a href="#collapseOne<?php echo $counter; ?>" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne<?php echo $counter; ?>">
                                                  <?php echo $tutorial->TUTORIAL_TITLE; ?>
                                                </a>
                                            </h6>
											</div>
											<div class="col-lg-6">
											<h4 class="page-title float-right"><a href="<?php  echo base_url().'Employee/tutorial_series'?>" > <button type="button" class="btn btn-success">Back</button></a></h4>
											</div>
											</div>
											 
                                        </div>
                            
                                        <div id="collapseOne<?php echo $counter; ?>" class="collapse <?php echo $status; ?>" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                             <?php //echo $tutorial->TUTORIAL_DESC;
                                        $this->load->view($tutorial->TUTORIAL_VIEW_PATH);
										?>
                                            </div>
                                        </div>
                                    </div>
										
										<?php 
                                    $counter = $counter+1;										

										} ?>
									
                       
                                </div>
                            </div>							
                        </div> 
						
						
						
						
						
				
						
						
					    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'tutorial/';?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'tutorial/';?>assets/js/bootstrap.min.js"></script>	
						
						
						
						
						
						
						
						
						
						
						
						
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
				
	
					

                <footer class="footer text-right">
                    <center> © 2016 All Rights Reserved @ Hetero Healthcare Limited </center>
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

        <!-- Required datatable js -->
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url().'theme/plugins';?>/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
        <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons1').DataTable({
                    lengthChange: false,
                //    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
		
		  <script type="text/javascript">
 $(document).ready(function () {
	//Disable cut copy paste
	$('body').bind('cut copy paste', function (e) {
		e.preventDefault();
	});
	
	//Disable mouse right click
	$("body").on("contextmenu",function(e){
		return false;
	}); 
});  
</script>

    </body>
</html>