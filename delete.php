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
		$sql = "UPDATE customer SET Status='Inactive' WHERE CustomerID = '$id'";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<script>alert('Deleted Successfully');
			window.location='admin-borrower.php';
			</script>";
		}
		else
		{
			echo "<script>alert('Failed to Delete');
			window.location='admin-borrower.php';
			</script>";
		}
	}
	?>
</head>
<body>
</body>
</html>