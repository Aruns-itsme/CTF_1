<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "<h1>Unauthorized Access</h1>";
    echo "<p>You must log in to access this page.</p>";
    exit();
}

echo "<h1>Admin Panel</h1>";
echo "<p>Welcome to the admin panel. Only authorized users should be here, but this is vulnerable!</p>";
echo "<p>Flag: flag{broken_access_control}</p>";
?>
