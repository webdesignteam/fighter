<?php  //	print_r($SERIES_ID);exit;exit; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Udaan Exams Applications</title>
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
		
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
  
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
				<?php 
			
				if($exam_status_1) { ?>                 
				<div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Exam</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Question Answer</a></li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

				

  
 <center> <h5> You Already Submitted Your Answer .Please Go Through Result Menu..!!!! </h5></center>


                    </div> <!-- container -->

                </div> <!-- content --> <?php } else { ?>		
				
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Exam</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Question Answer</a></li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
						<style>
						.error
						{
							color: red;
						}
						
						</style>
							<?php 
	
	// echo date('F j Y h:i:s A');
		 date_default_timezone_set('Asia/Kolkata');
		//date_default_timezone_set('GMT');

//set an date and time to work with
$start =  date("Y-m-d H:i:s");

//display the converted time

if(!$exam_status_1) 
{
	 // $new_date=date('Y-m-d H:i:s',strtotime('+15 minutes',strtotime($start)));
	  $new_date=date('Y-m-d H:i:s',strtotime('+60 minutes',strtotime($start)));
  if(!$this->session->userdata('EXAM_TIMER'))
  {
	   $this->session->set_userdata('EXAM_TIMER',$new_date);
  }
}
 
 // echo $this->session->userdata('EXAM_TIMER');
	?>
				
<h4><p class="pull-right" id="demo"></p> </h4>
   <form action="#" name="examform" id="examform">
  <input type="hidden" name="EMPLOYEE_ID" id="EMPLOYEE_ID" value="<?php echo $this->session->userdata('EMPLOYEE_ID') ?>" />
  
  <input type="hidden" name="SERIES_ID" id="SERIES_ID" value="<?php echo $this->encryption->decrypt($this->uri->segment(3)); ?>" />
		<?php  foreach($questionaries as $questionaries)
		{
			?>
				<p style="font-size:20px !important;">Question <?php echo $questionaries['QUESTION_ID']; ?> :  <?php echo $questionaries['QUESTION_TEXT']; ?> </p>
				<p>
				<input type="hidden" name="questions[]" id="<?php echo $questionaries['QUESTION_ID']; ?>" value="<?php echo $questionaries['QUESTION_ID']; ?>" />
				 <div class="step">
                            <div class="row">
				<?php //echo count($questionaries['QUESTION_OPTIONS'])."Total"; ?>
				<?php 
				
				foreach($questionaries['QUESTION_OPTIONS'] as $options)
				{
					?>
							<div class="col-md-3 col-sm-3">
							<div class="form-group">
							
	<input  type="radio" name="<?php echo $questionaries['QUESTION_ID']; ?>" id="<?php echo $questionaries['QUESTION_ID']; ?>" value="<?php echo $options['OPTION_ID']; ?>"> <?php echo $options['OPTION_TEXT']; ?>
									
							</div>
							
							
							
							</div>
				
					
					<?php
					
					
				}
				
				?>
				</div>
				</div>
			

				</p>
		<?php } ?>

   <div class="checkbox">
    
    </div>
		<input type="submit" class="btn btn-default pull-right" name="submit" id="submit" value="Submit" />
   <!-- <button type="submit" class="btn btn-default pull-right" name="submit" id="submit" >Submit</button>-->

  </form>
  


                    </div> <!-- container -->

                </div> <!-- content -->
				<?php } 
				
				?>
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
		  <script type="text/javascript">
            $(document).ready(function() {
              //  $('form').parsley();
            });
        </script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>


	<script>
	$(function ()
	{
		$('#examform').validate({
			rules: 
			{
				"EMPLOYEE_ID":
				{
				required: true
				}
			},
			messages: 
			{
				"EMPLOYEE_ID": 
				{
				required: "Please Enter EMPLOYEE_ID"
				}
			},
			submitHandler: function (form) 
			{ 
			
				$.ajax({
				type: 'post',
				url: '<?php echo base_url();?>Employee/StartExam/<?php echo $SERIES_ID; ?>',
				data: $('#examform').serialize(),
				success: function(data)
				{
				var yourval = jQuery.parseJSON(JSON.stringify(data));		
				var obj = jQuery.parseJSON(data);
				if(obj.status==1)
				{
					 swal({ title: obj.message,
					text: "Redirecting To Result Menu",
					type: "success"}).then(okay => {
					if (okay) {
				//	window.location.href = "<?php echo base_url().'admin/Exam_result';?>";
					}
					}); 
				}
				else
				{
					swal({
					type: 'error',
					title: 'Oops...',
					text: obj.message
					})
				}			

				}
				});
				return false;
			}
		});
	});
	</script>

	<script>
// Set the date we're counting down to
//var countDownDate = new Date("Mar 2, 2019 12:30:50").getTime();
var countDownDate = new Date("<?php echo $this->session->userdata('EXAM_TIMER'); ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = hours + " Hours "
  + minutes + " Minutes " + seconds + " Seconds ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
	 //document.forms["examform"].submit();
	// $('#examform').submit(function(){return true;});
	// $( "#examform" ).submit();
	// $('#examform').trigger('submit');
	 
 //$("examform").trigger("submit");

  //$('examform').submit(); 
 /*  $('#examform').submit(function() 
  {
}); */
  $( "#examform" ).submit();
	
  }
}, 1000);
</script>
                <footer class="footer text-right">
                    2018 - 2019 © Hetero Healthcare Limited
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



     
	


    </body>
</html>