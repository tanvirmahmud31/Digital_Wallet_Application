<?php
include 'db.php';

$id = $_GET['id'];

$stmt = mysqli_prepare(
    $conn,
    "SELECT full_name, email, balance FROM users WHERE id=?"
);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);

echo "Name: " . $row['full_name'] . "<br>";
echo "Email: " . $row['email'] . "<br>";
echo "Balance: " . $row['balance'];
?>
