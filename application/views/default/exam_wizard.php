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
      
         <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/flatly/bootstrap.min.css" />-->

         <link href="<?php echo base_url().'employee_assets/assets';?>/css/bootstrap3.3.7.min.css" rel="stylesheet" type="text/css" />
      
         <link rel="stylesheet" href="<?php echo base_url().'wizard_assets/';?>css/style.css" />
         <style>
            h3, .h3 { font-size: 18px; }
            h1, .h1, h2, .h2, h3, .h3
            {
            margin-top: -17px !important;
            }
            .error
            {
            color: red;
            }
            .footer {
               border-top: 1px solid rgba(152, 166, 173, 0.2);
               bottom: 0;
               text-align: left !important;
               padding: 19px 30px 20px;
               position: absolute;
               right: 0;
               color: #c1bfa8;
               left: 240px;
               background-color: #77754c;
            }
            .footer a{
               color: #fff;
               text-decoration: none;
            }
            a{
               color: #fff !important;
               text-decoration: none;
            }
            a:hover{
               text-decoration: none;
            }
            .marked-link {
               background: #4c4b2d;
               text-decoration: none !important;
               padding: 5px;
               border-radius: 4px;
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
         <div class="content-page">
            <!-- Start content -->
            <div class="content" style="padding-left:0px;">
               <div class="container-fluid">
                  <!-- row -->
                  <div class="row">
                     <div class="col-12">
                        <div class="page-title-box">
                           <h4 class="page-title float-left">Exam</h4>
                           <ol class="breadcrumb float-right">
                              <li class="breadcrumb-item"><a href="<?php echo base_url().'Employee' ?>">Dashboard</a></li>
                              <li class="breadcrumb-item active">Start Exam</li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
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
                    $new_date=date('Y-m-d H:i:s',strtotime('+25 minutes',strtotime($start)));
                   if(!$this->session->userdata('EXAM_TIMER'))
                   {
                     $this->session->set_userdata('EXAM_TIMER',$new_date);
                   }
                  }
                  
                  // echo $this->session->userdata('EXAM_TIMER');
                  ?>
                  <!-- row -->
                  <div class="row question">
                     <div class="col-9">
                     <form id="examwizard-question" name="examwizard-question" >
                        <input type="hidden" name="EMPLOYEE_ID" id="EMPLOYEE_ID" value="<?php echo $this->session->userdata('EMPLOYEE_ID') ?>" />
                        <input type="hidden" name="SERIES_ID" id="SERIES_ID" value="<?php  PRINT_R($_POST['SERIES_ID']); ?>" />
                        <?php  //echo "<pre>"; print_r($questionaries); exit;
                           $counter=1; $fieldName=0; $answer=0;$arr_counter=0; ?>
                        <?php  foreach($questionaries as $questionaries) { ?>
                        <input type="hidden" name="questions[]" id="<?php echo $questionaries['QUESTION_ID']; ?>" value="<?php echo $questionaries['QUESTION_ID']; ?>" />
                        <div class="<?php if($counter!=1){ echo 'hidden';}; ?>" data-question="<?php echo $counter; ?>">
                           <div class="row">
                              <div class="col-xs-1 question-number">
                                 <span><?php echo $counter; ?></span> 
                              </div>
                              <div class="col-xs-11 question-text">
                                 <span><?php echo $questionaries['QUESTION_TEXT']; ?></span>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-xs-12">
                                 <div class="alert alert-danger hidden"></div>
                                    <ol type="A" class="question-answer">
                                       <?php  //echo $questionaries['QUESTION_ID']; ?>
                                       <li class="font-size-20 answer-number">
                                          &nbsp;&nbsp;<input type="radio" data-alternatetype="radio" name="<?php echo $questionaries['QUESTION_ID']; ?>" data-alternateName="answer[<?php echo $answer; ?>]" data-alternateValue="A" value="<?php echo $questionaries['QUESTION_OPTIONS'][0]['OPTION_ID'] ?>" id="<?php echo $questionaries['QUESTION_ID']; ?>"/>&nbsp;&nbsp;<label for="answer-<?php echo $answer; ?>-1" class="answer-text"><span></span><?php print_r($questionaries['QUESTION_OPTIONS'][0]['OPTION_TEXT']);?></label>
                                       </li>
                                       <li class="font-size-20 answer-number">
                                          &nbsp;&nbsp;<input type="radio" data-alternatetype="radio" name="<?php echo $questionaries['QUESTION_ID']; ?>" data-alternateName="answer[<?php echo $answer; ?>]" data-alternateValue="B"  value="<?php echo $questionaries['QUESTION_OPTIONS'][1]['OPTION_ID'] ?>" id="<?php echo $questionaries['QUESTION_ID']; ?>"/>&nbsp;&nbsp;<label for="answer-<?php echo $answer; ?>-2" class="answer-text"><span></span><?php print_r($questionaries['QUESTION_OPTIONS'][1]['OPTION_TEXT']);?></label>
                                       </li>
                                       <li class="font-size-20 answer-number">
                                          &nbsp;&nbsp;<input type="radio" data-alternatetype="radio" name="<?php echo $questionaries['QUESTION_ID']; ?>" data-alternateName="answer[<?php echo $answer; ?>]" data-alternateValue="C" value="<?php echo $questionaries['QUESTION_OPTIONS'][2]['OPTION_ID'] ?>" id="<?php echo $questionaries['QUESTION_ID']; ?>"/>&nbsp;&nbsp;<label for="answer-<?php echo $answer; ?>-3" class="answer-text"><span></span><?php print_r($questionaries['QUESTION_OPTIONS'][2]['OPTION_TEXT']);?></label>
                                       </li>
                                       <li class="font-size-20 answer-number">
                                          &nbsp;&nbsp;<input type="radio" data-alternatetype="radio" name="<?php echo $questionaries['QUESTION_ID']; ?>" data-alternateName="answer[<?php echo $answer; ?>]" data-alternateValue="D" value="<?php echo $questionaries['QUESTION_OPTIONS'][3]['OPTION_ID'] ?>" id="<?php echo $questionaries['QUESTION_ID']; ?>"/>&nbsp;&nbsp;<label for="answer-<?php echo $answer; ?>-4" class="answer-text"><span></span><?php print_r($questionaries['QUESTION_OPTIONS'][3]['OPTION_TEXT']);?></label>
                                       </li>
                                    </ol>
                                 </div>
                              </div>
                           </div>
                        <?php 
                           $counter=$counter + 1; 
                           $fieldName= $fieldName + 1;
                           $answer= $answer + 1;
                           $arr_counter= $arr_counter + 1;
                           
                           
                           } ?>
                        <input type="hidden" value="1" id="currentQuestionNumber" name="currentQuestionNumber" />
                        <input type="hidden" value="<?php echo $counter-1;?>" id="totalOfQuestion" name="totalOfQuestion" />
                        <input type="hidden" value="[]" id="markedQuestion" name="markedQuestions" />
                     </form>
                     </div>
                     <!-- end coll -->
                     <!-- strat coll -->
                     <div class="col-3" id="quick-access-section">
                        <table class="table table-responsive text-center">
                           <thead>
                              <tr>
                                 <th>Question</th>
                                 <th>Response</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php for ($x = 1; $x < $counter; $x++) { ?>
                              <tr class="question-response-rows" data-question="<?php echo $x;?>">
                                 <td><?php echo $x; ?></td>
                                 <td class="question-response-rows-value">-</td>
                              </tr>
                              <?php } ?>                    
                           </tbody>
                        </table>
                        <div class="col-xs-12">
                           <a href="javascript:void(0)" class="btn btn-exam btn-sm" id="quick-access-prev">< Back</a>
                           <span class="btn btn-primary btn-sm" id="quick-access-info"></span>
                           <a href="javascript:void(0)" class="btn btn-exam btn-sm" id="quick-access-next">Next ></a>
                        </div>
                     </div>
                     <!-- end coll -->
                  </div>
                  <!-- end row -->
               
                  <!-- row -->
                  <div class="row exam-footer">
                     <div class="col-md-1">
                        <a href="javascript:void(0);" id="back-to-prev-question" class="btn btn-exam btn-sm disabled"><span class="fa fa-arrow-left"></span> Previous</a>
                     </div>
                     <div class="col-md-2 noofq text-center">
                        <p><span id="current-question-number-label">1</span> <span>of <?php echo $counter-1; ?> Questions</p>
                     </div>
                     <div class="col-md-1">
                        <a href="javascript:void(0);" id="go-to-next-question" class="btn btn-exam btn-sm">Next <span class="fa fa-arrow-right"></span></a>
                     </div>
                     <div class="col-md-1">
                        <?php for ($x = 1; $x < $counter; $x++) { ?>
                        <div class="mark-unmark-wrapper <?php if($x!=1) { echo "hidden"; } ?>" data-question="<?php echo $x;?>">
                           <a href="javascript:void(0);" class="mark-question btn btn-exam btn-sm" data-question="<?php echo $x;?>"><span class="fa fa-bookmark-o"></span> MARK</a>
                           <a href="javascript:void(0);" class="hidden unmark-question btn btn-sm btn-exam" data-question="<?php echo $x;?>"><span class="fa fa-bookmark"></span> UNMARK</a>
                        </div>
                        <?php } ?> 
                     </div>
                     <div class="col-md-4 text-center exam-time">
                        <span class="fa fa-clock-o"></span><span id="demo"></span>
                     </div>
                     <div class="col-md-1 pull-right text-right">
                        <a href="javascript:void(0);" id="finishExams" class="btn btn-exam btn-sm"><span class="fa fa-send"></span> Finish</a>
                     </div>
                  </div>
                  <!-- end row -->

               
               
               <div class="modal fade" id="finishExamsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center> <h4 class="modal-title" id="myModalLabel" style="margin-top: 9px !important;"><h3>Exam Summery</h3></h4></center>
                        </div>
                        <div class="modal-body">
						
<div class="row">
<div class="col-sm-6" style=""><center>Total Questions :</center>
</div>
<div class="col-sm-6" style="">
 <?php echo $counter-1;?>
</div>
</div>

<div class="row">
<div class="col-sm-6" style=""><center>Answered Questions</center>
</div>
<div class="col-sm-6" style="">
 <span class="finishExams-total-answerd"></span>
</div>
</div>


<div class="row">
<div class="col-sm-6" style=""><center>Marked Questions</center>
</div>
<div class="col-sm-6" style="">
<span class="finishExams-total-marked"></span>
</div>
</div>

<div class="row">
<div class="col-sm-6" style=""><center>Unanswered Questions</center>
</div>
<div class="col-sm-6" style="">
 <span class="finishExams-total-remaining"></span>
</div>
</div>
				        
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close/Back</button>
                           <button type="button" class="btn btn-primary" id="submitdata" name="submitdata" >Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Footer -->
               <!-- Scripts -->
               <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
               <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
               <script src="<?php echo base_url().'wizard_assets/';?>js/examwizard.js"></script><!-- Required -->
               <script>
                  var examWizard = $.fn.examWizard({
                      finishOption: {
                          enableModal: true,
                      },
                      quickAccessOption: {
                          quickAccessPagerItem: 5,
                      },
                  });
               </script>
               <script type="text/javascript">
                  var _gaq = _gaq || [];
                  _gaq.push(['_setAccount', 'UA-36251023-1']);
                  _gaq.push(['_setDomainName', 'jqueryscript.net']);
                  _gaq.push(['_trackPageview']);
                  
                  (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                  })();
                  
               </script>
               </script>
               <!-- container -->
            </div>
            <!-- content -->
            <!-- Footer -->
            <?php $this->load->view('default/layout/footer');  ?>
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
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
      <script>
         $( "#submitdata" ).click(function() {
         $( "#examwizard-question" ).submit();
         // alert('sdfsdfsdfds');
         });
         
         
         $(function ()
         {
         $('#examwizard-question').validate({
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
         	url: '<?php echo base_url();?>Employee/wizard/<?php echo $SERIES_ID; ?>',
         	data: $('#examwizard-question').serialize(),
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
                      	window.location.href = "<?php echo base_url().'Employee/exam_report';?>";
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
          $( "#examwizard-question" ).submit();
         	
           }
         }, 1000);
      </script>
   </body>
</html>