<?php

include 'db/connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM fir WHERE fir_id='$id'";

mysqli_query($conn,$sql);

header("Location: view_fir.php");

?>