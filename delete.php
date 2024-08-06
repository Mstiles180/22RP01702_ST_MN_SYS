<?php 
require 'connect.php';
$sid=$_GET['stid'];
$query=mysqli_query($conn,"delete from students where stid='$sid'");
if ($query==1) {
	echo "<script>alert('deleted');location.href='viewst.php'</script>";
}
else{
	echo "not deleted";
}
?>