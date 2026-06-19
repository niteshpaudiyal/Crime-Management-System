<?php

include 'db/connection.php';

$sql = "SELECT * FROM fir";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

<title>View FIR</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
    text-align:center;
}

h2{
    margin-top:30px;
}

table{
    width:95%;
    margin:auto;
    border-collapse:collapse;
    background:white;
}

th, td{
    padding:12px;
    border:1px solid black;
}

th{
    background:#2563eb;
    color:white;
}

a{
    text-decoration:none;
    color:red;
    font-weight:bold;
}

</style>

</head>

<body>

<h2>FIR Records</h2>

<table>

<tr>

<th>FIR ID</th>
<th>Complainant Name</th>
<th>Crime Type</th>
<th>Crime Location</th>
<th>Crime Date</th>
<th>Description</th>
<th>Delete</th>
<th>Edit</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['fir_id']; ?></td>

<td><?php echo $row['complainant_name']; ?></td>

<td><?php echo $row['crime_type']; ?></td>

<td><?php echo $row['crime_location']; ?></td>

<td><?php echo $row['crime_date']; ?></td>

<td><?php echo $row['description']; ?></td>

<td>
<a href="delete_fir.php?id=<?php echo $row['fir_id']; ?>">
Delete
</a>
</td>

<td>
<a href="edit_fir.php?id=<?php echo $row['fir_id']; ?>">
Edit
</a>
</td>

</tr>

<?php
}
?>

</table>

</body>

</html>