<?php

include 'db/connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM fir WHERE fir_id='$id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $crime = $_POST['crime'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $update = "UPDATE fir SET

    complainant_name='$name',
    crime_type='$crime',
    crime_location='$location',
    crime_date='$date',
    description='$description'

    WHERE fir_id='$id'";

    mysqli_query($conn,$update);

    header("Location: view_fir.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Edit FIR</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.container{
    width:400px;
    background:white;
    padding:30px;
    margin:50px auto;
    border-radius:10px;
    text-align:center;
}

input, textarea{
    width:90%;
    padding:10px;
    margin:10px;
}

button{
    padding:10px 20px;
    background:green;
    color:white;
    border:none;
}

</style>

</head>

<body>

<div class="container">

<h2>Edit FIR</h2>

<form method="POST">

<input type="text" name="name"
value="<?php echo $row['complainant_name']; ?>">

<input type="text" name="crime"
value="<?php echo $row['crime_type']; ?>">

<input type="text" name="location"
value="<?php echo $row['crime_location']; ?>">

<input type="date" name="date"
value="<?php echo $row['crime_date']; ?>">

<textarea name="description"><?php echo $row['description']; ?></textarea>

<button name="update">Update FIR</button>

</form>

</div>

</body>

</html>