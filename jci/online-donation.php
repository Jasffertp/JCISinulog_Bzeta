<?php
	session_start();
?>

<html>
	<head>
		<title>Online Donation| JCI Cebu Sinulog</title>
		<script src="https://kit.fontawesome.com/3b23dca747.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/x-icon" href="images/logo-og2.png" />
	</head>
	<body>
	<?php
		include 'header.php'
	?>
		<div class="container">
			<div id="page-donation"><h1 id="text-donation">Online Donation</h1></div>
			<div id="form-donation">
				<a href="donate.php" id="back-online">Go Back</a>


				<form method="POST" action="backend/online-donation.p.php">
				<ul class="form-style-1">
				    <li>
				    	<label>Full Name <span class="required">*</span></label>
					    <input type="text" name="fname" class="field-divided" placeholder="First Name" required/> 
					    <input type="text" name="lname" class="field-divided" placeholder="Last Name" required/>
				    </li>

				    <li>

				    	<input type="checkbox" id="anon" name="anon" value='true'>
				    	<label for="anon" style="display:inline;">Stay Anonymous?</label>
				    </li>
				    
				    <li>
				        <label>Choose Bank: <span class="required">*</span></label>
				        <select name="method" class="field-select">
					        <option value="GCash">GCash</option>
					        <option value="BPI">BPI</option>
					        <option value="BDO">BDO</option>
				        </select>
				    </li>
				    <li>
				        <label>Amount <span class="required">*</span></label>
				        <input type="text" name="amount" class="field-long" required/>
				    </li>
				    <li>
				        <label>Contact number(optional):</label>
				        <input type="text" name="contact" class="field-long" />
				    </li>
				    <li>
				        <label>Remarks:</label>
				        <textarea name="remarks" id="field5" class="field-long field-textarea"></textarea>
				    </li>
				    <li>
				        <input type="submit" name="donate" id="donate" value="donate" >
				    </li>
				</ul>
				</form>
			</div>
		</div>
		<div class="empty-space" style="margin-top:80px;"></div>
		<?php
		include 'footer.php';
		?>
	</body>
</html>