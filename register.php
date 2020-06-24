<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Full name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		 <div>
			 <label for="dob">DOB</label>
             <input class="input-group"  type="dob" name="dob"required>
         </div>
         <div class="input-group">
                        <label for="gender">Gender:</label>
                        <label for="gender">M:</label>
                        <input type="radio" name="gender" value="male" required>
                        <label  for="gender">F:</label>
                        <input  type="radio" name="gender" value="female" required>
                        <label for="gender">other:</label>
                        <input  type="radio" name="gender" value="other" required> 
           </div>            
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>