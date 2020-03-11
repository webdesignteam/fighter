 <div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Profile -->
            <div class="text-center left-said-user">
                <img src="<?php echo base_url().'theme/assets';?>/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> 
                <p><?php echo   $this->session->userdata('EMPLOYEE_NAME'); ?> </p>
                <span>medical representative</span>
            </div>
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title d-none">Navigation</li>
                <li>
                    <a href="<?php echo base_url().'Employee';?>">
                        <i class="fas fa-house-damage"></i> <span> Dashboard </span>
                    </a>
                </li>
                <li><a href="#"><i class="fas fa-user"></i></i> <span>Profile</span> </a></li>
                <li><a href="#"><i class="fas fa-tools"></i></i> <span>Settings</span> </a></li>
                <li><a href="<?php echo base_url().'Employee/';?>exam_series"><i class="fas fa-tasks"></i></i> <span>Exam Series</span> </a></li>
                <li><a href="<?php echo base_url().'Employee/';?>tutorial_series"><i class="fas fa-book"></i><span>Tutorial Series</span> </a></li>
                <li><a href="<?php echo base_url().'Employee/';?>exam_report"><i class="fas fa-file-alt"></i><span>Recent Result</span> </a></li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>