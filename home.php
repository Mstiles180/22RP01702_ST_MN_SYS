<?php 
session_start();
if ($_SESSION['usersession'] == false) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <style>
        body, h1, p, a {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            padding: 50px 0;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 15px 25px;
            margin: 10px;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        a:active {
            background-color: #004494;
            transform: scale(1);
        }
    </style>
</head>
<body>
    <a href="addst.php">ADD STUDENT</a>
    <a href="viewst.php">VIEW STUDENTS</a>
    <a href="logout.php">LOGOUT</a>
     <?php 
    echo $_SESSION['usersession'];
    ?>
</body>
</html>
