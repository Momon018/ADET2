<?php
ob_start();
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logged out Successfully');
		window.location='login.php';
		</script>";
?>