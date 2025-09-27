<?php
session_start();

if(!isset($_SESSION["is_login"]) || $_SESSION["is_login"] !== true) {
    header("Location: log-in.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/navbar.css?v=2">
    <link rel="stylesheet" href="assets/css/dashboard-style.css?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "navbar-dashboard.php"; ?>

    <div class="dashboard-container">
        <div class="sidebar">
            <a href="profile.php" target="dashboard-iframe">Profile</a>
            <a href="ebook.php" target="dashboard-iframe">Ebook</a>
            <div class="sidebar-button">
                <button onclick="location.href='logout.php'">Log Out</button>
            </div>
        </div>
        <iframe src="profile.php" name="dashboard-iframe"></iframe>
    </div>
</body>
</html>