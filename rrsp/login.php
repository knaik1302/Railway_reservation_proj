<!DOCTYPE html>
<html>
<head>
	<title>RRSP SIGNIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body >
	<header><h2 style="color: aliceblue; text-align: center;margin: 0px ;background-color: crimson;padding: 5px 0px 5px 0px;">RAILWAY RESERVATION SYSTEM</h2></header>
	<div id="login">
		<div id="form">
		<form action="http://localhost/rrsp/validate.php" method="post">
		<h1>LOGIN</h1>
		 <input type="text" name="username" id="uname" placeholder="Username" required>
		 <input type="password" name="password" id="pswd" placeholder="Password" required>
		 <p>Don't have an account?<a href="http://localhost/rrsp/signup.php">Signup</a></p> 
		 <button type="submit" value="Login" name="login_user">Login</button>
		</form>
	</div>
	</div>
	<footer style="color: aliceblue;background-color: crimson;margin-top:40px;padding:0.05px;"><p style="margin-left: 20px;">Created by: Kartik V Naik and Hawaralu Vignesh</p> </footer>

</body>
</html> 