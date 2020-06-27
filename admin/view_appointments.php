<?php
    include("./assets/inc/header.php");
    include("./assets/inc/conn.php");
?>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="grey_border text-center">
                    <h3>Patient's Bookings</h3>
                </div>
                <div class="grey_border text_small">
                    <?php
                        $sql_app = "SELECT * FROM appointments";
                        $query_app = mysqli_query($conn, $sql_app);
                        while($fetch_app = mysqli_fetch_assoc($query_app)):
                    ?>
                    <!-- name 	age 	email 	phone_number 	doctor_id 	complain 	date -->
                    <div class="grey_border">
                        <h5>Patient's Name: <?php echo $fetch_app['name']?></h5>
                        <div>Patient's Email: <?php echo $fetch_app['email']?></div>
                        <div>Patient's Age: <?php echo $fetch_app['age']?></div>
                        <div>Patient's Phone Number: <?php echo $fetch_app['phone_number']?></div>
                        <p>
                            Patient's Complain: <?php echo $fetch_app['complain']?>
                        </p>
                        <hr>
                        <?php 
                            $sql_doc = "SELECT * FROM doctors WHERE id = '".$fetch_app['doctor_id']."'";
                            $query_doc = mysqli_query($conn, $sql_doc);
                            $fetch_doc = mysqli_fetch_assoc($query_doc);
                        ?>
                         <!-- Full texts 	id 	name 	email 	phone_number 	specialty 	photo -->
                        <h5>Doctor's Name: <?php echo $fetch_doc['name']?></h5>
                        <div>Doctor's Email: <?php echo $fetch_doc['email']?></div>
                        <div>Doctor's Phone Number: <?php echo $fetch_doc['phone_number']?></div>
                        <div>Doctor's Specialty: <?php echo $fetch_doc['specialty']?></div>
                        <hr>
                        <div>Date: <?php echo $fetch_app['date']?></div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php
    include("./assets/inc/footer.php");
?>