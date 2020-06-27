<?php 
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
<nav class = "navbar navbar-expand-md navbar-dark bg-dark">
    <a href="home.php" class = "navbar-brand">Appointment Booking</a>
    <button type="button" class = "navbar-toggler" data-toggle="collapse" data-target = "#navbarCollapse">
        <span class = "navbar-toggler-icon"></span>
    </button>

    <div class = "collapse navbar-collapse" id = "navbarCollapse">
        <div class = "navbar-nav">
            <a href="home.php" class = "nav-item nav-link">Home</a>
            <a href="#doctors" class = "nav-item nav-link">See Doctors</a>
            <a href="logout.php" class = "nav-item nav-link">Logout</a>
        </div>
    </div>
</nav>
        