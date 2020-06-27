<?php
    session_start();
    if(!isset($_SESSION['admin_id']))
    {
        header("location: index.php");
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
<div style = "background-image: url(./assets/img/doctor.jpg); height: 650px; background-size: cover">
    <div style="height: 650px; background-color: rgba(0, 0, 0, 0.7);" >
        <nav class = "navbar navbar-expand-md navbar-dark">
            <a href="home.php" class = "navbar-brand">Appointment Booking</a>
            <button type="button" class = "navbar-toggler" data-toggle="collapse" data-target = "#navbarCollapse">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse" id = "navbarCollapse">
                <div class = "navbar-nav">
                    <a href="home.php" class = "nav-item nav-link">Home</a>
                    <a href="doctors.php" class = "nav-item nav-link">Add Doctors</a>
                    <a href="view_appointments.php" class = "nav-item nav-link">View Appointments</a>
                    <a href="posts.php" class = "nav-item nav-link">Posts</a>
                    <a href="logout.php" class = "nav-item nav-link">Logout</a>
                </div>
            </div>
        </nav>
        