<?php
session_start();
if(isset($_SESSION['authen']))
{
	if ($_SESSION['type'] == "Borrower")
	{
    echo "<script type='text/javascript'>alert('You are already logged in!');
                    window.location='borrower-home.php';
                    </script>";
	}
	if ($_SESSION['type'] == "Lender")
	{
    echo "<script type='text/javascript'>alert('You are already logged in!');
                    window.location='lender-home.php';
                    </script>";
	}
	if ($_SESSION['type'] == "Borrower")
	{
    echo "<script type='text/javascript'>alert('You are already logged in!');
                    window.location='admin-lender.php';
                    </script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Pautanga</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

        <?php
        include 'dbconnect.php';

        if(isset($_POST['submit']))
        {
            $uname = $_POST['email'];
            $password = $_POST['password'];

            $sqlque = "SELECT * FROM customer WHERE Customer_email = '$uname' limit 1";
            $result = mysqli_query($con,$sqlque);
            $admins = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            $phash = $row['Password'];
            $type = $row['User_type'];
			$id = $row['CustomerID'];
            if ($admins > 0)
            {
                if (password_verify($password, $phash)) 
                {
                    if ($type == "Borrower")
                    {
						$_SESSION['authen'] = true;
						$_SESSION['borrowerid'] = $id;
						$_SESSION['type'] = $row['User_type'];
                        echo "<script type='text/javascript'>alert('Successfully logged in');
                            window.location='borrower-home.php';
                            </script>";
                    }
                    elseif ($type == "Lender")
                    {
						$_SESSION['lenderid'] = $id;
						$_SESSION['authen'] = true;
						$_SESSION['type'] = $row['User_type'];
                        echo "<script type='text/javascript'>alert('Successfully logged in ');
                            window.location='lender-home.php';
                            </script>";
                    }
                    else
                    {
						$_SESSION['adminid'] = $id;
						$_SESSION['authen'] = true;
						$_SESSION['type'] = $row['User_type'];
                        echo "<script type='text/javascript'>alert('Successfully logged in ');
                            window.location='admin-lender.php';
                            </script>";
                    }
                }   
                else
                {
                echo "<script type='text/javascript'>alert('Error. Invalid username or password');</script>";
                } 
            }
            else
            {
                echo "<script type='text/javascript'>alert('Error. Invalid username or password');
                            window.location='login.php';
                            </script>";
            }
        }
        ?>

    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>
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
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                        <!-- form -->
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" name = "email" type="email" id="emailaddress" required placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" name = "password"  type="password" required placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="d-grid mb-0 text-center">
                                <button class="btn btn-primary" type="submit" name = "submit"><i class="mdi mdi-login"></i> Log In </button>
                            </div>
                            <!-- social-->
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="landing.php" class="text-muted ms-1"><b>Sign Up</b></a></p>
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

    </body>

</html>