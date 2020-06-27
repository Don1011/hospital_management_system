<?php
    include("./assets/inc/header.php");
    include("./assets/inc/conn.php");
?>
        <div class="container">
            <div class="row">
                <div class="margin_100"></div>
                <div class="col-md-4">
                    <a href="doctors.php" class = "invisible_link">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Doctor.</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <p class="card-text text-muted text_small">This Links to a page where you can add new Doctors and remove old ones to and from the database. This is relevant in case a new Doctor has been Hired Or an old one, relieved of duties.</p>
                                <!-- <p class="card-text text-muted text_small d-inline"><small class="text-muted">Last updated 3 mins ago</small> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="view_appointments.php" class = "invisible_link">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">View Appointments.</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <p class="card-text text-muted text_small">On this page, all the booked appointments by the users can be viewed by the logged in admin immediately after they are booked.</p>
                                <!-- <p class="card-text text-muted text_small d-inline"><small class="text-muted">Last updated 3 mins ago</small> -->
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="posts.php" class = "invisible_link">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Posts</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                <p class="card-text text-muted text_small">Here Admin can add new posts to the homepage which will automatically delete the last one. There is only a maximum of two posts that can be shown on the homepage</p>
                                <!-- <p class="card-text text-muted text_small d-inline"><small class="text-muted">Last updated 3 mins ago</small> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("./assets/inc/footer.php");
?>