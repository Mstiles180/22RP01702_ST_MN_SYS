<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		fieldset{
			width: 20rem;
			background-color: #f0f0f0;
			border: none;
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
			margin-top: 10rem;
		}
		label{
			font-style: italic;
		}
		.a1{
			width: 15rem;
			background-color: #f0f0f0;
			height: 1.5rem;
			border-radius: 4px;
		}
		.a2{
			width: 15.4rem;
			height: 1.7rem;
			color: white;
			background-color: forestgreen;
			border: none;
			border-radius: 3px;
			font-size: 17px;
			font-family: monospace;
		}
	</style>
</head>
<body>
	<form method="POST">
		<center>
		<fieldset>
			<label>USERNAME:</label><br>
			<input class="a1" type="text" name="username" required><br>
			<label>PASSWORD:</label><br>
			<input class="a1" type="password" name="password" required><br>
			<label>CONFIRM-PASSWORD</label>
			<input class="a1" type="password" name="password1" required><br><br>
			<input class="a2" type="submit" name="register" value="register"><br>
			<a href="index.php">already have account</a>
		</fieldset>
	</form>
	</center>
</body>
</html>
<?php 
if (isset($_POST['register'])) {
	include 'connect.php';
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	$pass1=$_POST['password1'];
	if ($pass != $pass1) {
		echo "<p><center><i>passwords don't match</i></p></center>";
	}
	elseif (empty($uname) || empty($pass) || empty($pass1)) {
		echo "all fields are required";
	}
	else{
	$query=mysqli_query($conn,"insert into users values('','$uname','$pass')");
	if ($query==1) {
		echo "<script>alert('Account Created');location.href='index.php'</script>";
	}
	else{
		echo "incorect username or password";
	}
	}
}
?>