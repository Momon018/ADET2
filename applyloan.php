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
	if (isset($_GET['applyid']))
	{
		include 'UUID.php';
		$uuid = UUID::v4();
		$id = $_GET['applyid'];
		$sqlque = "SELECT * from loan_product WHERE LoanId = '$id'";
		$que = mysqli_query($con,$sqlque);
		$row = mysqli_fetch_assoc($que);
		$amount = $row['Loan_amount'];
		$term = $row['Loan_terms'];
		$loanid = $row['LoanID'];
		$lenderid = $row['FK_LenderID'];
		$customerid = $_SESSION['borrowerid'];
		$sql = "INSERT INTO `transaction` (`TransactionID`, `Approved_amount`, `Approved_term`, `Status`, `fk_CustomerID`, `fk_LoanID`, `fk_LenderID`) VALUES ('$uuid','$amount','$term','Active','$customerid','$loanid','$lenderid')";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<script>alert('Applied Successfully');
			window.location='borrower-apply.php';
			</script>";
		}
		else
		{
			echo "<script>alert('Failed to Apply');
			window.location='borrower-apply.php';
			</script>";
		}
	}
	?>
</head>
<body>
</body>
</html>