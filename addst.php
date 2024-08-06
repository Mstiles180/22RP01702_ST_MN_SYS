<?php
include 'home.php'; 
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
			margin-top: 5rem;
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
	<center>
	<fieldset>
	<form method="POST">
		<label>FIRSTNAME:</label><br>
		<input class="a1" type="text" name="first_name" required><br>
		<label>LASTNAME:</label><br>
		<input class="a1" type="text" name="last_name" required><br>
		<label>EMAIL:</label><br>
		<input class="a1" type="email" name="email" required><br>
		<label>DATEOFBIRTH:</label><br>
		<input class="a1" type="date" name="date_of_birth" required><br><br>
		<input class="a2" type="submit" name="add" value="add">
	</fieldset>
	</center>
</body>
</html>
<?php 
require 'connect.php';
if (isset($_POST['add'])) {
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$email=$_POST['email'];
	$dob=$_POST['date_of_birth'];
if (empty($fname) || empty($lname) || empty($email) || empty($dob)) {
	echo "all fields must not be empty";
}
elseif(!preg_match("/^[A-Za-z\s]+$/", $fname) || !preg_match("/^[A-Za-z\s]+$/", $lname)){
	echo "invalid firstname or lastname";
}
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	echo "invalid email";
}
else{
$query=mysqli_query($conn,"insert into students values('','$fname','$lname','$email','$dob')");
if ($query==1) {
	echo "<script>alert('Student added successfully');location.href='viewst.php'</script>";
}
else{
	echo "not added";
}
}}
?>