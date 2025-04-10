<?php
$conn = mysqli_connect("localhost", "your_username", "your_password", "your_database");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>