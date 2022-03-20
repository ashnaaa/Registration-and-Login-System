
<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php 
	require('regconn.php');

	require('loginconn.php');
?>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="fname" placeholder="First Name" required="">
					<input type="text" name="lname" placeholder="Last Name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswrd" placeholder="Password" required="">

					<label for="gender" id="gender">Gender:</label><br>
					<input type="radio" name="gender" id="female" required="" <?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">
					<label id="gender" for="female">Female</label>
					<input type="radio" name="gender" id="male" required=""
					<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">
					<label for="male" id="gender">Male</label>
					<button name="submit" type="submit">Sign up</button>
				</form>
			</div>

			
			<div class="login">
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswrd" placeholder="Password" required="">
					<button name="login" type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>