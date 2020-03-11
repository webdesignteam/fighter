<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Udaan-Employee Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="<?php echo base_url().'theme/assets';?>/images/favicon.ico">
      <!-- App css -->
      <link href="<?php echo base_url().'theme/assets';?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url().'theme/assets';?>/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url().'theme/assets';?>/css/metismenu.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url().'theme/assets';?>/css/style.css" rel="stylesheet" type="text/css" />
      <script src="<?php echo base_url().'theme/assets';?>/js/modernizr.min.js"></script>
      <style>
         .error
         {
         color: red;
         }
      </style>
   </head>
   <body class="bg-accpunt-pages" >
      <!-- HOME -->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="wrapper-page">
                     <div class="account-pages">
                        <div class="account-box">
                           <div class="account-logo-box">
                           </div>
                           <div class="account-content">
                              <form name="login" id="login" method="post" class="form-horizontal">
                                 <div class="form-group row m-b-20">
                                    <div class="col-12">
                                       <label for="password">Employee ID</label>
                                       <input type="text" class="form-control" name="emp_id" id="emp_id" required placeholder="Employee ID" />
                                    </div>
                                 </div>
                                 <div class="form-group row m-b-20">
                                    <div class="col-12">
                                       <label for="password">Employee Password</label>
                                       <input type="password" class="form-control" name="emp_pass" id="emp_pass" required placeholder="Password" />
                                    </div>
                                 </div>
                                 <div class="form-group row m-t-10">
                                    <div class="col-12">
                                       <input class="btn btn-success btn-rounded w-md pull-right" name="submit" type="submit" value="Login" />
                                       <div class="form-group row m-t-10">
                                          <div class="col-12">
                                             <a href="<?php echo base_url().'Employee/register';?>" > <input class="btn btn-success btn-rounded w-md pull-left"  type="button" value="Register" /> </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <p> If you are Not registered ..Please click on Register </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end card-box-->
                  </div>
                  <!-- end wrapper -->
               </div>
            </div>
         </div>
      </section>
      <!-- END HOME -->
      <!-- jQuery  -->
      <!-- <script src="<?php echo base_url().'theme/assets';?>/js/jquery.min.js"></script> -->
      <script src="<?php echo base_url().'theme/assets';?>/js/popper.min.js"></script>
      <script src="<?php echo base_url().'theme/assets';?>/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url().'theme/assets';?>/js/metisMenu.min.js"></script>
      <script src="<?php echo base_url().'theme/assets';?>/js/waves.js"></script>
      <script src="<?php echo base_url().'theme/assets';?>/js/jquery.slimscroll.js"></script>
      <!-- App js -->
      <script src="<?php echo base_url().'theme/assets';?>/js/jquery.core.js"></script>
      <script src="<?php echo base_url().'theme/assets';?>/js/jquery.app.js"></script>
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/additional-methods.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
      <script>
         $(function () {
         $('#login').validate({
         rules: 
         {
         "emp_id":
         {
           required: true
         
         },      
         
         "emp_pass":
         {
           required: true
         
         },     
         "emp_mob":
         {
         minlength:10,
         maxlength:10,
         number: true
         
         }
         
         },
         messages: 
         {
         "emp_id": 
         {
           required: "Please Enter Employee ID"
         },   
         
         "emp_pass": 
         {
           required: "Please Enter Employee Password"        
         }
         },
         submitHandler: function (form) 
         { // for demo
         $.ajax({
         type: 'post',
         url: '<?php echo base_url();?>Employee/login',
         data: $('#login').serialize(),
         success: function(data)
         {
         var yourval = jQuery.parseJSON(JSON.stringify(data));		
         var obj = jQuery.parseJSON(data);
         		if(obj.status==1)
         {
         /* 					Swal.fire({
         position: 'top-end',
         type: 'success',
         title: 'Your work has been saved',
         showConfirmButton: false,
         timer: 1500
         }) */
         
         setTimeout(function () {
         
         swal({
         title: "Success!",
         text: "Redirecting in 2 seconds.",
         type: "success",
         timer: 2000,
         showConfirmButton: false
         }, function(){
         //	window.location.href = "http://172.19.1.128/genx_backUp/";
         });	
         }, 1000);
         
         window.location = "<?php echo base_url().'Employee/index'?>";
         
         
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
   </body>
</html>