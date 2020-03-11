  <div class="topbar">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


		
                <!-- LOGO -->
                <div class="topbar-left" style="background: white !important;">
                    <a href="<?php echo base_url().'Employee' ?>" class="logo">
                        <span style="color:black">
						
                           <img src="<?php echo base_url().'theme/assets';?>/images/uddan-1.png" alt="Udaan App" height="77">
                        </span>
                        <i>
                           <!-- <img src="<?php echo base_url().'theme/assets';?>/images/logo_s3m.png" alt="G" height="28"> -->
						   UA
                        </i>
                    </a>
                </div>

               <!-- <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                       

                       
                        

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url().'theme/assets';?>/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?php echo $this->session->userdata('EMPLOYEE_NAME'); ?> <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome <?php echo $this->session->userdata('EMPLOYEE_NAME'); ?></h6>
                                </div>
						
                              
								
                                <a href="<?php echo base_url().'Employee/logout'?>" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                       </br> 
                      <marquee behavior="scroll" direction="left" style="color:white" >Welcome To Udaan Application</marquee>
                    </ul>

                </nav> -->
				
				
				    <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                       

                       

                       

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url().'theme/assets';?>/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?php echo   $this->session->userdata('EMPLOYEE_NAME'); ?> <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome <?php echo   $this->session->userdata('EMPLOYEE_NAME'); ?> </h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>My Account</span>
                                </a>     

						
                                <!-- item-->
								
                             <a href="<?php echo base_url().'Employee/logout'?>" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
				<!--	 <ul class="list-inline menu-left mb-0">
                       </br> 
                      <marquee behavior="scroll" direction="left" style="color:white" >Welcome To Udaan Application</marquee>
                    </ul> -->

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
						
						<marquee behavior="scroll" direction="left" style="color:white" >Welcome To Udaan Application</marquee>
						
                      
                    </ul>

                </nav>

				

            </div><br>