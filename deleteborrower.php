<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete</title>
	<?php 
	$con = mysqli_connect('localhost', 'root', '','lmmsapi');
	if (isset($_GET['deleteid']))
	{
		$id = $_GET['deleteid'];
		$sql = "UPDATE loan_product SET Loan_status='Inactive' WHERE LoanID = '$id'";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<script>alert('Deleted Successfully');
			window.location='borrower-cloan.php';
			</script>";
		}
		else
		{
			echo "<script>alert('Failed to Delete');
			window.location='borrower-cloan.php';
			</script>";
		}
	}
	?>
</head>
<body>
</body>
</html>