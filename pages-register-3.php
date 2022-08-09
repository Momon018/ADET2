<?php
    include 'dbconnect.php';
    include 'UUID.php';

    if(isset($_POST['submit']))
    {
        $uuid = UUID::v4();
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $sname = $_POST['sname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $bday = $_POST['bday'];
        $contact = $_POST['contact'];
        $lcapital = $_POST['lcapital'];
        $line1 = $_POST['line1'];
        $line2 = $_POST['line2'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $postal = $_POST['postal'];
        $country = $_POST['country'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];

        if ($pass == $pass2)
        {
            $sqlque = "SELECT * FROM customer WHERE Customer_email = '$email'";
            $result = mysqli_query($con,$sqlque);
            $testemail = mysqli_num_rows($result);
            if ($testemail > 0)
            {
                echo "<script type='text/javascript'>alert('Email is already taken.');
                </script>";
            }
            else
            {
            $phash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `customer` (`CustomerID`, `First_name`, `Middle_name`, `Last_name`, `Suffix_name`, `Customer_email`, `Password`, `Gender`, `Birthdate`, `Contact_number`,`lender_capital`, `Line1_add`, `Line2_add`, `City/Town`, `Barangay`, `Province`, `Country`, `PostalCode`, `Created_by`, `User_type`, `Status`) VALUES ('$uuid','$fname','$mname','$lname','$sname','$email','$phash','$gender','$bday','$contact','$lcapital','$line1','$line2','$city','$barangay','$province','$country','$postal','$uuid','Lender','Active')";
            $que = mysqli_query($con,$sql);

            if($que)
            {
                echo "<script type='text/javascript'>alert('Registered Successfully!');
                window.location='pages-register-2.php';
                </script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Failed');
                window.location='pages-register-2.php';
                </script>";
            }
        }
        }
        else
        {
            echo "<script type='text/javascript'>alert('Password and Confirm password should match!');
            window.location='pages-register-2.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Pautangna | Loan Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author"/>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    </head>

    <body  data-layout-config='{"darkMode":false}'>
        <style>
            body {
              background-image: url('borrower.jpg');
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: 100% 100%;
              backdrop-filter: blur(5px);

            }
        </style>
        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                         <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <a href="index.html" class="logo-dark">
                                <span><img src="assets/images/plong-dark.png" alt="" height="30" width="150"></span>
                            </a>
                            <a href="index.html" class="logo-light">
                                <span><img src="assets/images/logo.png" alt="" height="18"></span>
                            </a>
                        </div>
                        <br>

                        <!-- title-->
                        <h4 class="mt-0">Lender Sign Up</h4>
                        <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>

                        <!-- form -->
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">First Name</label>
                                <input class="form-control" name="fname" type="text" id="fullname" placeholder="Enter your first name"
                                required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Middle Name</label>
                                <input class="form-control" name="mname" type="text" id="fullname" placeholder="Enter your middle name" >
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Last Name</label>
                                <input class="form-control" name="lname" type="text" id="fullname" placeholder="Enter your last name" required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Suffix</label>
                                <input class="form-control" name="sname" type="text" id="fullname" placeholder="Enter your suffix" >
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Email Address</label>
                                <input class="form-control" name="email" type="text" id="fullname" placeholder="Enter your email address" required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Gender</label><br>
                                    <input  type="radio" name="gender" value="Male"><label>&nbsp;Male</label><br>
                                    <input  type="radio" name="gender" value="Female"><label>&nbsp;Female</label>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Birthdate</label>
                                <input class="form-control" name="bday" type="date" id="fullname" placeholder="Enter your birthdate" required>
                            </div>  
                             <div class="mb-3">
                                <label for="fullname" class="form-label">Lender Capital</label>
                                <input class="form-control" name="lcapital" type="text" id="fullname" placeholder="Enter your contact number" required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Contact Number</label>
                                <input class="form-control" name="contact" type="text" id="fullname" placeholder="Enter your contact number" required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Line 1</label>
                                <input class="form-control" name="line1" type="text" id="fullname" placeholder="Line 1" required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Line 2</label>
                                <input class="form-control" name="line2" type="text" id="fullname" placeholder="Line 2">
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Barangay</label>
                                <input class="form-control" name="barangay" type="text" id="fullname" placeholder="Enter your baranggay" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">City/Town</label>
                                <input class="form-control" name="city" type="text" id="emailaddress" required placeholder="Enter your city/town">
                            </div>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Province</label>
                                <input class="form-control" name="province" type="text" id="emailaddress" placeholder="Enter your province" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Postal Code</label>
                                <input class="form-control" name="postal" type="text" id="emailaddress" required placeholder="Enter your postal code">
                            </div>
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Country</label>
                                <input class="form-control" name="country" type="text" id="emailaddress" required placeholder="Enter your country">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="pass2" name="pass" required class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Re-type Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="pass2" name="pass2" required class="form-control" placeholder="Confirm Password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signup" required>
                                    <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <div class="mb-0 d-grid text-center">
                                <button class="btn btn-primary" type="submit" name = "submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                            </div>
                            <!-- social-->

                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Already have account? <a href="login.php" class="text-muted ms-1"><b>Log In</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

           
        </div>
        <!-- end auth-fluid-->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>
        </form>
    </body>

</html>