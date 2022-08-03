﻿<!DOCTYPE html>
<html lang="en">
    

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="<?php echo base_url('landing')?>" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="<?php echo base_url('assets')?>/images/plong.png" alt="" height="60" width="160">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo base_url('assets')?>/images/plogo.png" alt="" height="30" width="30">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Lender</li>


                        <li class="side-nav-item">
                            <a data-bs-toggle="" href="<?php echo base_url('lender')?>" class="side-nav-link">
                                <i class="uil-briefcase-alt"></i>
                                <span> Home </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('lender-loan-market')?>" class="side-nav-link">
                                <i class="uil-calendar-alt"></i>
                                <span> Loan Market </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('lender-loans')?>" class="side-nav-link">
                                <i class="uil-calendar-alt"></i>
                                <span> Loans </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('lender-transa')?>" class="side-nav-link">
                                <i class="uil-calendar-alt"></i>
                                <span> Transactions </span>
                            </a>

                            <a data-bs-toggle="" href="<?php echo base_url('lender-profile')?>" class="side-nav-link">
                                <i class="uil-calendar-alt"></i>
                                <span> Profile </span>
                            </a>

                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

        </div>
        <!-- END wrapper -->
        
    </body>
</html>
