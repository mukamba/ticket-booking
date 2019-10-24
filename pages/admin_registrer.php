
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Customer Registration</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/nunito-font.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="../css/customerRegisterStyle.css"/>
	
</head>
<body class="form-v6">
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="../images/employee.jpg" alt="form">
			</div>
			<form class="form-detail" action="../php/staff_signup.php" method="post">
				<h2>Register Form</h2>
				<div class="form-row">
					<input type="text" name="txt_firstName" id="firstName" class="input-text" placeholder="Your First Name" required>
				</div>
				<div class="form-row">
					<input type="text" name="txt_lastName" id="lastName" class="input-text" placeholder="Your Last Name" required>
				</div>
				
				
				<div class="form-row">
					<input type="text" name="txt_email" id="txt_email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
			
				<div class="form-row">
					<input type="password" name="txt_password" id="password" class="input-text" placeholder="Password" required>
				</div>
				<div class="form-row">
					<input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Comfirm Password" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
				
			
			</form>
		</div>
	</div>
</body>
</html>