<?php

$conn = mysqli_connect(
    "localhost",
    "tanvir",
    "tanvir123",
    "digital_wallet"
);

if(!$conn){
    die("DB Connection Failed: " . mysqli_connect_error());
}

?>
