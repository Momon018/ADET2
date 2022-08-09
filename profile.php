<!DOCTYPE html>
    <html lang="en">

                                                    
    <head>
        <meta charset="utf-8">
        <title>Profile | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->

          <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="landing.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/plong.png" alt="" height="60" width="160">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/plogo.png" alt="" height="30" width="30">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">



                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Dashboard </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                   
                                    <li>
                                        <a href="admin-borrower.php">Borrower</a>
                                    </li>
                                    <li>
                                        <a href="admin-lender.php">Lender</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        

            



                    <!-- Help Box -->
                    
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
                           

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                 

                                    <div style="max-height: 230px;" data-simplebar="">
                                        <!-- item-->
                                        
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                       

                            <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                      
                                    </span>
                                    <span>
                                        <span class="account-user-name">My Account</span>
                                       
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            
                        </div>
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
 <div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Profile </h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    

    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">

                    <div class="tab-pane" id="settings">
                        <form action="" method="GET">
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> User Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <?php 
                                    $con = mysqli_connect('localhost', 'root', '','lmmsapi');
                                    if (isset($_GET['viewid']))
                                    {
                                        $id = $_GET['viewid'];
                                        echo "<script>alert('$id')</script>";
                                        $query = "SELECT * FROM customer WHERE CustomerID = '$id'";
                                        $query_run = mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                                {
                                            
                                           

                                    
                                    ?>
                                    <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="fistname" class="form-label">User Type</label>
                                        <input type="text" class="form-control" value="<?= $row['User_type'];?>" id="usertype" placeholder="Enter last name">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="fistname" class="form-label">First name</label>
                                        <input type="text" class="form-control" value="<?= $row['First_name'];?>" id="firstname" placeholder="Enter last name">
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" value="<?= $row['Middle_name'];?>" id="middlename" placeholder="Enter last name">
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="<?= $row['Last_name'];?>" id="lastname" placeholder="Enter last name">
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="suffixname" class="form-label">Suffix Name</label>
                                        <input type="text" class="form-control" value="<?= $row['Suffix_name'];?>" id="suffixname" placeholder="Enter last name">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                               
                                
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="gender" class="form-label">Gender</label>
                                        <input type="text" class="form-control" value="<?= $row['Gender'];?>" id="gender" placeholder="Enter gender">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="birthdate" class="form-label">Birthdate</label>
                                        <input type="text" class="form-control" value="<?= $row['Birthdate'];?>" id="birthdate" placeholder="Enter birthdate">
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="contact" class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" value="<?= $row['Contact_number'];?>" id="contact" placeholder="contact number">
                                    </div>
                                </div> <!-- end col -->

                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="line1" class="form-label">Line 1</label>
                                        <input type="text" class="form-control" value="<?= $row['Line1_add'];?>" id="line1" placeholder="Enter line 1">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="line2" class="form-label">Line 2</label>
                                        <input type="text" class="form-control" value="<?= $row['Line2_add'];?>" id="line2" placeholder="Enter line 2">
                                    </div>
                                </div> <!-- end col -->
                              </div> <!-- end row -->
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="barangay" class="form-label">Barangay</label>
                                        <input type="text" class="form-control" value="<?= $row['Barangay'];?>" id="barangay" placeholder="Enter barangay">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City/Town</label>
                                        <input type="text" class="form-control" value="<?= $row['City/Town'];?>" id="city" placeholder="Enter City/Town">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="province" class="form-label">Province</label>
                                        <input type="text" class="form-control" value="<?= $row['Province'];?>" id="province" placeholder="Enter Province">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="postalcode" class="form-label">Postal Code</label>
                                        <input type="text" class="form-control" value="<?= $row['PostalCode'];?>" id="postalcode" placeholder="Enter Postal Code">
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" value="<?= $row['Country'];?>" id="country" placeholder="Enter Country">
                                    </div>
                                </div><!-- end col -->
                              </div> <!-- end row -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                                    <?php
                                                                }
                                                            }
                                                            else
                                                            {
                                                                echo"No Record Found";
                                                            }
                                                        }
                                                    
                                    ?>
                                                   
                                </div>
                               
                        </form>
                    </div>
                    <!-- end settings content-->

                </div> <!-- end tab-content -->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row-->





                                           

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

    </body>
</html>