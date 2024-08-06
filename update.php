<?php
include 'home.php'; 
?>
<?php 
require 'connect.php';
$sid=$_GET['stid'];
$query=mysqli_query($conn,"select * from students where stid='$sid'");
while ($var=mysqli_fetch_array($query)) {
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
			margin-top: 3rem;
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
<body><center>
	<fieldset>
		
	<form method="post">
		<input type="hidden" name="stid" value="<?php echo $var['0'] ?>"><br>
		<label>FIRSTNAME:</label><br>
		<input class="a1" type="text" name="first_name" value="<?php echo $var['1'] ?>"><br>
		<label>LASTNAME:</label><br>
		<input class="a1" type="text" name="last_name" value="<?php echo $var['2'] ?>"><br>
		<label>EMAIL:</label><br>
		<input class="a1" type="email" name="email" value="<?php echo $var['3'] ?>"><br>
		<label>DATEOFBIRTH:</label><br>
		<input class="a1" type="date" name="date_of_birth" value="<?php echo $var['4'] ?>"><br><br>
		<input class="a2" type="submit" name="update" value="Update"><br>
	</form>
</fieldset>
	</center>
<?php } ?>
</body>
</html>
<?php 
if (isset($_POST['update'])) {
	$sid=$_POST['stid'];
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$dob=$_POST['date_of_birth'];
	$q=mysqli_query($conn,"update students set first_name='$fname',last_name='$lname',date_of_birth='$dob' where stid='$sid'");
	if ($q==1) {
		echo "<script>alert('Update Successfully');location.href='viewst.php'</script>";
	}
	else{
		echo "not updated";
	}
}
?>