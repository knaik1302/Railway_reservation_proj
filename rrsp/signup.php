<!DOCTYPE html>
<html>
<head>
	<title>RRSP SIGNUP PAGE</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
	<header><h2 style="color: aliceblue; text-align: center;margin: 0px ;background-color: crimson;padding: 5px 0px 5px 0px;">WELCOME!! PLEASE REGISTER</h2></header>
	<div id="login">
		<div id="form">
	<form action="loginserver.php" method="post">
	 <h1>SIGNUP</h1>
	 <input type="text" name="username" id="uname" placeholder="UserName" required>
	 <input type="email" name="email" id="mailid" placeholder="Email">
	 <input class="password" type="password" name="password1" id="password" placeholder="Password">
	 <input class="confirmpassword" type="password" name="password2" id="Confirmpwd" placeholder="Confirm Password">
	  <p>Already have an account?<a href="http://localhost/rrsp/login.php">Signin</a></p>
	 <button class="button" type="submit" value="Submit" name="signup_user">Signup</button>
		 </form>
	<script>
		document.querySelector('.button').onclick = function(){
			var password=document.querySelector('.password').value,
				confirmpassword=document.querySelector('.confirmpassword').value;

			if(password==""){
				alert("field cannot be empty.");
			}
			else if (password!=confirmpassword)
			{
				alert("password didn't match try again.");
				return false
			}
			else if (password==confirmpassword){
				alert("password matched.");
			}
			return true
		}
	</script>
       </div>
	</div>
	<footer style="color: aliceblue;background-color: crimson;margin-top:40px; padding:0.05px;"><p style="margin-left: 20px;">Created by: Kartik V Naik and Hawaralu Vignesh</p> </footer>
</body>
</html>