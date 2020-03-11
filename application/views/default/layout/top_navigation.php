<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="<?php echo base_url().'Employee' ?>" class="logo">
            <span class=logo-sm>
                <img src="<?php echo base_url().'employee_assets/assets';?>/images/logo-sm.svg" alt="Fighter">
            </span>
            <span class=logo-lg>
                <img src="<?php echo base_url().'employee_assets/assets';?>/images/logo.svg" alt="Fighter" height="77">
            </span>
        </a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-right-menu float-right mb-0 d-none">
            <li class="dropdown notification-list">
                <a href="<?php echo base_url().'Employee/logout'?>" class="">
                    <i class="fi-power"></i>
                </a> 
            </li>
            <li class="dropdown notification-list d-none">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <img src="<?php echo base_url().'theme/assets';?>/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1"><?php echo   $this->session->userdata('EMPLOYEE_NAME'); ?> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
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
        <ul class="list-unstyled topbar-right-icon-menu float-right">
            <li class="dropdown">
                <a href="<?php echo base_url().'Employee/logout'?>" class="">
                    <i class="fi-power"></i> <span>Logout</span>
                </a> 
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li>
                <marquee behavior="scroll" direction="left" style="color:white; line-height: 64px; width: 90%;" >Welcome To Fighter - Examination Application</marquee>
            </li>
        </ul>
    </nav>
</div><br>