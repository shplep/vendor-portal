<?php
// public/dashboard.php
$page_title = "Vendor Dashboard";
require_once 'partials/header.php';
require_once '../config/db.php';

$user_id = $_SESSION['user_id'];
$user_role_result = mysqli_query($conn, "SELECT role FROM users WHERE id = $user_id");
$user_role = mysqli_fetch_assoc($user_role_result)['role'];
$result = mysqli_query($conn, "SELECT vendor_id FROM vendor_users WHERE user_id = $user_id");
$vendor_ids = [];
while ($row = mysqli_fetch_assoc($result)) $vendor_ids[] = $row['vendor_id'];
if (empty($vendor_ids)) $vendor_ids = ['90'];

// ... rest of the dashboard.php content ...