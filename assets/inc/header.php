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
                    <a href="#doctors" class = "nav-item nav-link">See Doctors</a>
                    <a href="logout.php" class = "nav-item nav-link">Logout</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class = "index_button_container">
                        <a href = "book_appointment.php" class= "custom_index_button">
                            BOOK APPOINTMENT
                        </a>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php 
                        $sql_posts = "SELECT * FROM posts";
                        $query_posts = mysqli_query($conn, $sql_posts);
                        while($fetch_posts = mysqli_fetch_assoc($query_posts)):
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch_posts['title']?></h5>

                            <p class="card-text"><?php echo $fetch_posts['post']?></p>
                            <p class="card-text d-inline"><small class="text-muted"><?php echo $fetch_posts['date']?></small>
                        </div>
                    </div>
                    <br>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>