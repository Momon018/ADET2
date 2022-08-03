<!DOCTYPE html>
<html lang="en">



    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">


                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                            <li class="breadcrumb-item active">Loan Application</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Loan Application</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Checkout Steps -->
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#billing-information" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                    <i class="mdi mdi-account-circle font-18"></i>
                                                    <span class="d-none d-lg-block">Apply Loan</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#shipping-information" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                    <i class="mdi mdi-truck-fast font-18"></i>
                                                    <span class="d-none d-lg-block">Choose a Lender</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#payment-information" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    <i class="mdi mdi-cash-multiple font-18"></i>
                                                    <span class="d-none d-lg-block">Payment Info</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Steps Information -->
                                        <div class="tab-content">

                                            <!-- Billing Content-->
                                            <div class="tab-pane show active" id="billing-information">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h4 class="mt-2">Borrower information</h4>

                                                        <p class="text-muted mb-4">Fill the form below in order to
                                                            apply required borrower information.</p>

                                                        <form>
                               
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="billing-first-name" class="form-label">First Name</label>
                                                                        <input class="form-control" type="text" placeholder="Enter your first name" id="billing-first-name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="billing-last-name" class="form-label">Last Name</label>
                                                                        <input class="form-control" type="text" placeholder="Enter your last name" id="billing-last-name">
                                                                    </div>
                                                                </div>
                                                            </div>  --><!-- end row -->
                                                           

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Loan Amount</label>
                                                                        <input class="form-control" type="text" placeholder="ex. (1,000,000.00)">
                                                                        <p class="text-muted mb-4">Reminder: The loan amount should be in Philippine Peso Currency.</p>
                                                                    </div>
                                                                </div> 
                                                            </div> <!-- end row -->

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Loan Term</label>
                                                                        <select data-toggle="select2" title="LTErm">
                                                                            <option value="0">Select Term</option>
                                                                            <option value="1">Monthly</option>
                                                                            <option value="1">Quarterly</option>
                                                                            <option value="2">Semi-Annually</option>
                                                                            <option value="2">Annually</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                       <!--  <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">Ship to different address ?</label>
                                                                        </div> -->
                                                                    </div>

                                                                    <div class="mb-3 mt-3">
                                                                        <label for="example-textarea" class="form-label">Loan Purpose:</label>
                                                                        <textarea class="form-control" id="example-textarea" rows="3" placeholder="Write some note.."></textarea>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->

                                                            <div class="row mt-4">
                                                                <div class="col-sm-6">
                                                                    <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                        <i class="mdi mdi-arrow-left"></i> Back to Home </a>
                                                                </div> <!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                            <i class="mdi mdi-truck-fast me-1"></i> Proceed to Lender Selection </a>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <!-- <h4 class="header-title mb-3">Order Summary</h4> -->
            
                                              
                                                            </div>
                                                            <!-- end table-responsive -->
                                                        </div> <!-- end .border-->
            
                                                    </div> <!-- end col -->            
                                                </div> <!-- end row-->
                                            </div>
                                            <!-- End Billing Information Content-->

                                            <!-- Shipping Content-->
                                            <div class="tab-pane" id="shipping-information">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h4 class="mt-2">Choose a Lender</h4>

                                                        <p class="text-muted mb-3">Choose an available lender below.</p>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="border p-3 rounded mb-3 mb-md-0">
                                                                    <address class="mb-0 address-lg">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio1" name="customRadio" class="form-check-input" checked="">
                                                                            <label class="form-check-label font-16 fw-bold" for="customRadio1">Lender #1</label>
                                                                        </div>
                                                                     <!--    <br>
                                                                        <span class="fw-semibold">Stanley Jones</span> <br>
                                                                        795 Folsom Ave, Suite 600<br>
                                                                        San Francisco, CA 94107<br>
                                                                        <abbr title="Phone">P:</abbr> (123) 456-7890 <br> -->
                                                                    </address>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-3 rounded">
                                                                    <address class="mb-0 address-lg">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                                            <label class="form-check-label font-16 fw-bold" for="customRadio2">Lender #2</label>
                                                                        </div>
                                                                     <!--    <br>
                                                                        <span class="fw-semibold">Stanley Jones</span> <br>
                                                                        795 Folsom Ave, Suite 600<br>
                                                                        San Francisco, CA 94107<br>
                                                                        <abbr title="Phone">P:</abbr> (123) 456-7890 <br> -->
                                                                    </address>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row-->

                                                     
                                                                    <div class="border p-3 rounded mb-3 mb-md-0">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="shippingMethodRadio1" name="shippingOptions" class="form-check-input" checked="">
                                                                            <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio1">Standard Delivery - FREE</label>
                                                                        </div>
                                                                        <p class="mb-0 ps-3 pt-1">Estimated 5-7 days shipping (Duties and tax may be due upon delivery)</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="border p-3 rounded">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="shippingMethodRadio2" name="shippingOptions" class="form-check-input">
                                                                            <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio2">Fast Delivery - $25</label>
                                                                        </div>
                                                                        <p class="mb-0 ps-3 pt-1">Estimated 1-2 days shipping (Duties and tax may be due upon delivery)</p>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- end row-->

                                                            <div class="row mt-4">
                                                                <div class="col-sm-6">
                                                                    <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                        <i class="mdi mdi-arrow-left"></i> Back to Home </a>
                                                                </div> <!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                            <i class="mdi mdi-cash-multiple me-1"></i> Continue to Payment Method </a>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-4">
                                                
            
                                                    </div> <!-- end col -->            
                                                </div> <!-- end row-->
                                            </div>
                                            <!-- End Shipping Information Content-->

                                            <!-- Payment Content-->
                                            <div class="tab-pane" id="payment-information">
                                                <div class="row">

                                                    <div class="col-lg-8">
                                                        <h4 class="mt-2">Select Mode of Payment</h4>

                                                        <p class="text-muted mb-4">Fill the form below in order to
                                                            register required payment information.</p>

                                                        <!-- Pay with Paypal box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio2" name="billingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio2">Pay with Paypal</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">You will be redirected to PayPal website to complete your purchase securely.</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="assets/images/payments/paypal.png" height="25" alt="paypal-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Pay with Paypal box-->

                                                        <!-- Credit/Debit Card box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio1" name="billingOptions" class="form-check-input" checked="">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio1">Credit / Debit Card</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="assets/images/payments/master.png" height="24" alt="master-card-img">
                                                                    <img src="assets/images/payments/discover.png" height="24" alt="discover-card-img">
                                                                    <img src="assets/images/payments/visa.png" height="24" alt="visa-card-img">
                                                                    <img src="assets/images/payments/stripe.png" height="24" alt="stripe-card-img">
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row mt-4">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="card-number" class="form-label">Card Number</label>
                                                                        <input type="text" id="card-number" class="form-control" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="card-name-on" class="form-label">Name on card</label>
                                                                        <input type="text" id="card-name-on" class="form-control" placeholder="Master Shreyu">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="card-expiry-date" class="form-label">Expiry date</label>
                                                                        <input type="text" id="card-expiry-date" class="form-control" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="card-cvv" class="form-label">CVV code</label>
                                                                        <input type="text" id="card-cvv" class="form-control" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                        </div>
                                                        <!-- end Credit/Debit Card box-->

                                                        <!-- Pay with Payoneer box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio3" name="billingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio3">Pay with Payoneer</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">You will be redirected to Payoneer website to complete your purchase securely.</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="assets/images/payments/payoneer.png" height="30" alt="paypal-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Pay with Payoneer box-->

                                                        <!-- Cash on Delivery box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio4" name="billingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio4">Pay with Gcash</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">Pay with Gcash for faster transaction.</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="assets/images/payments/cod.png" height="22" alt="paypal-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Cash on Delivery box-->

                                                        <div class="row mt-4">
                                                            <div class="col-sm-6">
                                                                <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                    <i class="mdi mdi-arrow-left"></i> Back to Home </a>
                                                            </div> <!-- end col -->
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                        <i class="mdi mdi-cash-multiple me-1"></i> Complete Application </a>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row-->

                                                    </div> <!-- end col -->

                                                
            
                                                    </div> <!-- end col -->            
                                                </div> <!-- end row-->
                                            </div>
                                            <!-- End Payment Information Content-->

                                        </div> <!-- end tab content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        



        
    </body>

</html>