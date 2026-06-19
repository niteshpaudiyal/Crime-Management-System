<?php

$conn = mysqli_connect("localhost","root","","crime_management1");

if(!$conn){
    die("Connection Failed");
}
else{
    echo "Database Connected Successfully";
}

?>