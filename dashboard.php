<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: http://127.0.0.1/project/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
    text-align:center;
}

.container{
    margin-top:100px;
}

a{
    display:block;
    width:250px;
    margin:20px auto;
    padding:15px;
    background:#2563eb;
    color:white;
    text-decoration:none;
    border-radius:10px;
    font-size:18px;
}

a:hover{
    background:#1d4ed8;
}

h1{
    margin-bottom:40px;
}

</style>

</head>

<body>

<div class="container">

<h1>Crime Management Dashboard</h1>

<a href="fir.php">Add FIR</a>

<a href="view_fir.php">View FIR</a>

<a href="logout.php">Logout</a>

</div>

</body>

</html>