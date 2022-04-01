<?php
	if(isset($_POST['donate'])){
		include 'dbh.p.php';
		date_default_timezone_set('Asia/Manila');

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$date = date('Y-m-d');
		$amount = $_POST['amount'];
		$pMethod = $_POST['method'];
		$contact = $_POST['contact'];
		$remark = $_POST['remarks'];

		if(empty($_POST['anon'])){
			$anon = 'false';
		}else{
			$anon = 'true';
		}
		
		$sql = 'INSERT INTO `donation`(`fname`, `lname`, `time_date`, `amount`, `pMethod`, `contact`, `remarks`, `anon`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../online-donation.php?error=sql2&end");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "sssisiss", $fname, $lname, $date, $amount, $pMethod, $contact, $remark, $anon);
			mysqli_stmt_execute($stmt);

			header("Location:../online-donation.php?donationsuccess&end");
			exit();
		}
		
	}else{
		header('Location: ../online-donation.php');
		exit();
	}
?>