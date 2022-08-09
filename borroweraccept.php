<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete</title>
	<?php 
	$con = mysqli_connect('localhost', 'root', '','lmmsapi');
    
	if (isset($_GET['applyid']))
	{
		$id = $_GET['applyid'];
		$sql = "UPDATE loan_product SET Loan_status='Approved' WHERE LoanID = '$id'";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<script>alert('Applied');
			window.location='borrower-apply.php';
			</script>";
		}
		else
		{
			echo "<script>alert('Rejected');
			window.location='borrower-apply.php';
			</script>";
		}
	}
	?>
</head>
<body>
</body>
</html>

