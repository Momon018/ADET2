<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Landing Page | PaUTANGNA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url('assets')?>/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets')?>/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="<?php echo base_url('assets')?>/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">        

    </head>

    <body class="loading" data-layout-config='{"darkMode":false}'>

        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
            <div class="container">

                <!-- logo -->
                <a href="index.html" class="navbar-brand me-lg-5">
                    <img src="<?php echo base_url('assets')?>/images/plong.png" alt="" class="logo-dark" height="30" width="150">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- menus -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- left menu -->
                    <ul class="navbar-nav me-auto align-items-center">
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="">Business Loan</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="pages-faq.html">FAQs</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="pages-register-2.html">Apply Now</a>
                        </li>
                       
                        
                    </ul>

                    <!-- right menu -->
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-0">
                            <a href="<?php echo base_url('login')?>" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                            <a href="<?php echo base_url('login')?>" target="_blank" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                                <i class="mdi mdi-basket me-2"></i> Login
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- START HERO -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="mt-md-4">
                            <div>
                                <span class="badge bg-danger rounded-pill">PaUTANGNA</span>
                                
                            </div>
                            <h2 class="text-white fw-normal mb-4 mt-3 hero-title" style="font-size: 3rem ;">
                                Fast and easy loans for you and your business with PaUTANGNA
                            </h2>

                            <p class="mb-4 font-16 text-white-50"></p>

                            <a href="" target="_blank" class="btn btn-success">Apply Now <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="text-md-end mt-3 mt-md-0">
                            <img src="<?php echo base_url('assets')?>/images/plogo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->

     

        
        <!-- START CONTACT -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3>Get In <span class="text-primary">Touch</span></h3>
                            <p class="text-muted mt-2">Please fill out the following form and we will get back to you shortly. For more 
                                <br>information please contact us.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-md-4">
                        <p class="text-muted"><span class="fw-bold">Customer Support:</span><br> <span class="d-block mt-1">+1 234 56 7894</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Email Address:</span><br> <span class="d-block mt-1">info@gmail.com</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Address:</span><br> <span class="d-block mt-1">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Time:</span><br> <span class="d-block mt-1">9:00AM To 6:00PM</span></p>
                    </div>

                    <div class="col-md-8">
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="fullname" class="form-label">Your Name</label>
                                        <input class="form-control form-control-light" type="text" id="fullname" placeholder="Name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="emailaddress" class="form-label">Your Email</label>
                                        <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="subject" class="form-label">Your Subject</label>
                                        <input class="form-control form-control-light" type="text" id="subject" placeholder="Enter subject...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea id="comments" rows="4" class="form-control form-control-light" placeholder="Type your message here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary">Send a Message <i class="mdi mdi-telegram ms-1"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- START FOOTER -->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo base_url('assets')?>/images/logo.png" alt="" class="logo-dark" height="18">
                        <p class="text-muted mt-4">Hyper makes it easier to build better websites with
                            <br> great speed. Save hundreds of hours of design
                            <br> and development by using it.</p>

                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Company</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">About Us</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Documentation</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Blog</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Affiliate Program</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Apps</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Ecommerce Pages</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Email</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Social Feed</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Projects</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Tasks Management</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Discover</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Help Center</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Our Products</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5">
                            <p class="text-muted mt-4 text-center mb-0">© 2018 - 2021 Hyper. Design and coded by
                                Coderthemes</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <script src="<?php echo base_url('assets')?>/js/vendor.min.js"></script>
        <script src="<?php echo base_url('assets')?>/js/app.min.js"></script>
    </body>

</html>