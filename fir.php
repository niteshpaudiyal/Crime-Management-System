<?php

include 'db/connection.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $crime = $_POST['crime'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $sql = "INSERT INTO fir
    (complainant_name, crime_type, crime_location, crime_date, description)

    VALUES

    ('$name','$crime','$location','$date','$description')";

    mysqli_query($conn, $sql);

    echo "FIR Added Successfully";
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Add FIR</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
    text-align:center;
}

form{
    background:white;
    width:400px;
    margin:auto;
    padding:30px;
    margin-top:50px;
    border-radius:10px;
}

input, textarea{
    width:90%;
    padding:10px;
    margin:10px;
}

button{
    padding:10px 20px;
    background:#2563eb;
    color:white;
    border:none;
}

</style>

</head>

<body>

<form method="POST">

<h2>Add FIR</h2>

<input type="text" name="name" placeholder="Complainant Name" required>

<input type="text" name="crime" placeholder="Crime Type" required>

<input type="text" name="location" placeholder="Crime Location" required>

<input type="date" name="date" required>

<textarea name="description" placeholder="Description"></textarea>

<button name="submit">Submit FIR</button>

</form>

</body>
</html>