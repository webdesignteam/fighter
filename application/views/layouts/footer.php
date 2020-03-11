<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="<?php echo base_url(); ?>" title="Findoctor">
							<img src="http://www.heterohealthcare.com/images/hhcl-logo-main2.png" alt="HHCL" data-retina="true" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<!-- <h5>About</h5> -->
					<!-- <ul class="links">
						<li><a href="#0">About us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#0">FAQ</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
					</ul> -->
				</div>
				<div class="col-lg-3 col-md-4">
					
				</div>
				<div class="col-lg-3 col-md-4">
					<!--<h5>Contact with Us</h5>-->
					<ul class="contacts">
						<!-- <li><a href="tel://6598291149"><i class="icon_mobile"></i> +65 98291149,+65 98235402</a></li>
						<li><a href="mailto:info@oncologymedicine.in"><i class="icon_mail_alt"></i>oncologymedicine@gmail.com<br>sgoncologymedicine@gmail.com</a></li> -->
					</ul>
					<div class="follow_us">
						<!--<h5>Follow us</h5>-->
						<ul>
							<!--<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							 <li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<!-- <li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li> -->
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2016 Hetero Healthcare Limited</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url();?>assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/common_scripts.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/functions.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    var table = $('#example').DataTable( {
	        scrollY:        "300px",
	        scrollX:        true,
	        scrollCollapse: true,
	        paging:         false,
	        fixedColumns:   {
            leftColumns: 1,
            rightColumns: 1
        	}
	    } );
		} );
	</script>
	
<script type="text/javascript">
	$('input[type=radio]').change(function() {
	if($(this).attr('id') == 'Q1-verydissatisfied') {    	
        $("#Q1-reason").attr("readonly",false);
    }else if($(this).attr('id') == 'Q1-dissatisfied'){
		$("#Q1-reason").attr("readonly",false);
    }else if ($(this).attr('id') == 'Q1-neutral') {
		$("#Q1-reason").attr("readonly",false);
    }else{
    	$("#Q1-reason").attr("readonly",true);
    }
});
</script>
<script type="text/javascript">
	$('input[type=radio]').change(function() {
	 try{
         // alert(1);		 
	if($(this).attr('id') == 'Q3-Yes-Quite-often') {    	
        $("#Q3-reason").attr("readonly",false);
    }else if($(this).attr('id') == 'Q3-Yes-but-rarely'){
		$("#Q3-reason").attr("readonly",false);
    }else{
    	$("#Q3-reason").attr("readonly",true);
    }
	 }catch(err){
		 alert(err.message);
	 }
	
});
</script>
<script>
            $(document).ready(function(){
            $('#emp_id').change(function(){
                //Selected value
                var inputValue = $(this).val();
                // alert("value in js "+inputValue);
                // alert(base_url);
                //Ajax for calling php function
                $.post('http://services.heterohcl.com/php/CustomerSS/Home/getEmployeeData/', { employee_code: inputValue }, function(data){
                	var obj = jQuery.parseJSON(data);
					if(obj.status == 1){
						$("#emp_name").val(obj.result.EmpName);
                     	$("#emp_dept").val(obj.result.Dept);
                     	$("#emp_division").val(obj.result.BusinessUnit);
					}else{
						$("#emp_name").val("NA");
                     	$("#emp_dept").val("NA");
                     	$("#emp_division").val("NA");
					}
                   // alert('ajax completed. Response:  '+data);
                    //var datashow = JSON.parse(data); 
                   // alert(datashow);
                    //do after submission operation in DOM
                    

                });
            });
        });
</script>
<script type="text/javascript">
$(document).ready(function(){
    /* Populate data to state dropdown */
    $('#app_name').on('change',function(){
        var APP_CODE = $(this).val();
        // alert(APP_CODE);
        // alert('app_code='+APP_CODE);
        if(APP_CODE){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url('Home/getAppversion'); ?>',
                data:'app_code='+APP_CODE,
                success:function(data){
                    $('#app_version').html('<option value="">Select App Version</option>'); 
                    var dataObj = jQuery.parseJSON(data);
                    // alert(dataObj.result[0].APP_CODE);
                    if(dataObj){
                        $(dataObj).each(function(){
                            var option = $('<option />');
                            option.attr('value', this.result[0].VERSION_VALUE).text(this.result[0].VERSION_VALUE);           
                            $('#app_version').append(option);
                        });
                    }else{
                        $('#app_version').html('<option value="">App Version not available</option>');
                    }

                }
            }); 
        }else{
            $('#app_version').html('<option value="">Select App Version</option>');
           
        }
    });
});
</script>
<script>

function onsumbit(){
	var checklength=$('input[name="Q2-1"]:checked').length+$('input[name="Q2-2"]:checked').length+$('input[name="Q2-3"]:checked').length+$('input[name="Q2-4"]:checked').length+$('input[name="Q2-5"]:checked').length+$('input[name="Q2-6"]:checked').length+$('input[name="Q2-7"]:checked').length
	
	// alert(checklength);
	// alert($('input[name="Q1"]:checked').length);
	//alert($('input[name="Q1"]:checked').val());
	

	if($('#app_name').val() == 0){
		alert('Please Select App Name');
		
		$("#app_name").focus();
		return false;
	}else if ($('#app_version').val() == 0){
		alert('Please Select App Version');
		$("#app_version").focus();
		return false;
	}else if ($('#emp_id').val() == 0) {
		alert('Please Enter Employee ID');
		$("#emp_id").focus();
		return false;
	}	
	
	if($('input[name="Q1"]:checked').length==0)
	{
		alert("Please Select overall satisfaction ");
		
		$("#Q1").focus();
		
		
		return false;
		
	}
	 
	else if($('input[name="Q1"]:checked').val()=='3'||$('input[name="Q1"]:checked').val()=='2'||$('input[name="Q1"]:checked').val()=='1')
	{
		
		if($('#Q1-reason').val()=="")
		{
			alert("enter Text value");
			
			$("#Q1-reason").focus();
			
			return false;
		}
		
		//return false;	
	}
	
	
	
	 
	  if(checklength==0)
	 {
		 alert("Please Select team in following areas ");
		 
		 $("#Q2").focus();
		  
		  return false;
	 }
	 
	 else if(checklength!=0)
	 {
		 
		 if($('input[name="Q2-2"]:checked').length==0)
		 { 
	        alert("Quality of Product");
		 
		  $( 'input[name="Q2-2"]').focus();
		  
		  return false;
		 }
		 else if($('input[name="Q2-3"]:checked').length==0)
		 { 
	        alert("Delivery Time Lines");
			 
		 
		  $( 'input[name="Q2-3"]').focus();
		  return false;
		 }
		  else if($('input[name="Q2-4"]:checked').length==0)
		 { 
	        alert("Ability to meet needs");
			 
		 
		  $( 'input[name="Q2-4"]').focus();
		  return false;
		 }
		  else if($('input[name="Q2-5"]:checked').length==0)
		 { 
	        alert("Design & Appearance");
			 
		 
		  $( 'input[name="Q2-5"]').focus();
		  return false;
		 }
		 else if($('input[name="Q2-6"]:checked').length==0)
		 { 
	        alert("Comparison with outside vendors");
			 
		 
		  $( 'input[name="Q2-6"]').focus();
		  return false;
		 }
		 else if($('input[name="Q2-7"]:checked').length==0)
		 { 
	        alert("Ease of operating application");
			 
		 
		  $( 'input[name="Q2-7"]').focus();
		  return false;
		 }
		 
		 
	 }
	 
	 
	 if($('input[name="Q3"]:checked').length==0)
	{
		alert("Please Select applications / products delivered");
		
		$("#Q3-Yes-Quite-often").focus();
		
		
		return false;
		
	}
	
	else if($('input[name="Q3"]:checked').val()=='Yes-Quite-often'||$('input[name="Q3"]:checked').val()=='Yes-but-rarely')
	{
		
		if($('#Q3-reason').val()=="")
		{
			alert("enter Text value");
			
			$("#Q3-reason").focus();
			
			return false;
		}
		
		//return false;	
	}
	
	 
	 // alert("Call");
	 
	//calll to controller ajax	 
	
	 $.ajax({
                type: 'post',
                url: '<?php echo base_url();?>surveydata',                
                data: $('#survey').serialize(),
                success: function(data) {
                    //var yourval = jQuery.parseJSON(JSON.stringify(data));
                    //var obj = jQuery.parseJSON(data);
                    // alert(data);
                    //alert(data.status);
                    window.location = data;
      //               setTimeout(function () {
				  //  window.location = data;
				  // }, 3000);
                }
            });
	
}

</script>
</body>

</html>