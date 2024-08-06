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
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 10px;
        }   
        th {
            background-color: #4CAF50;
            color: white;
            height: 2rem;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        td{
        	height: 2rem;
        }

	</style>
</head>
<body>
	<center>
	<table border="1">
		<tr>
			<th>STUDENT_ID</th>
			<th>FIRSTNAME</th>
			<th>LASTNAME</th>
			<th>EMAIL</th>
			<th>DATEOFBIRTH</th>
			<th colspan="2">Options</th>
		</tr>
		<?php 
		require 'connect.php';
		$query=mysqli_query($conn,"select * from students");
		while ($var=mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $var['0'] ?></td>
			<td><?php echo $var['1'] ?></td>
			<td><?php echo $var['2'] ?></td>
			<td><?php echo $var['3'] ?></td>
			<td><?php echo $var['4'] ?></td>
			<td><a href="update.php?stid=<?php echo $var['stid'] ?>">UPDATE</a></td>
			<td><a href="delete.php?stid=<?php echo $var['stid'] ?>">DELETE</a></td>
		</tr>
		<?php } ?>
	</table>
	</center>
</body>
</html>