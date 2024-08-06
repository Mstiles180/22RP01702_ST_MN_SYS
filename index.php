<?php 
session_start();

?>
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
		.red{
			color: red;
		}
	</style>
</head>
<body>
	<center>
	<form method="POST">
		<fieldset>
			<label>USERNAME:</label><br>
			<input class="a1" type="text" name="username" required><br>
			<label>PASSWORD:</label><br>
			<input class="a1" type="password" name="password" required><br><br>
			<input class="a2" type="submit" name="login" value="login"><br><br>
			<i>Click<a href="register.php">  here</a>  if you don't have account</i>
		</fieldset>
	</form>
	</center>
</body>
</html>
 <?php 
if (isset($_POST['login'])) {
	include 'connect.php';
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	$query=mysqli_query($conn,"select * from users where username='$uname' and password='$pass'");
	if ($rows=mysqli_num_rows($query)) {
		$_SESSION['usersession']=$uname;
		echo "<script>alert('Successfully logged in');location.href='home.php'</script>";
	}
	else{
		echo "<p><center><i class='red'>incorrect username or password</i></p></center>";
	}
}
?>