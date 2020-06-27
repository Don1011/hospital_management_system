<?php
    include("./assets/inc/header2.php");
    include("./assets/inc/conn.php");
?>
    <!-- Doctor list starts -->
    <div class="container" id = "doctorList">
        <div class="text-center">
            <h2>Select A Doctor</h2>
        </div>
        <div class="row">
            <div class = "col-12 margin-20">
                <form id = "searchForm">
                    <div class="input-group mb-3">
                        <input id="searchQuery" type="text" class="form-control" placeholder = "Search the Doctor you want to attend to you" oninput = "search()">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light fa fa-search bg-dark" type="button"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- For normal display on page load -->
        <div class = "container">
            <div class="row" id = "display">
                <?php 
                    $sql_doctors = "SELECT * FROM doctors";
                    $query_doctors = mysqli_query($conn, $sql_doctors);
                    while($fetch_doctors = mysqli_fetch_assoc($query_doctors)):
                ?>
                <div class="col-md-3">
                    <button class="card doctor_button" onclick="selectDoctor(<?php echo $fetch_doctors['id']?>)">
                        <img class="img-fluid" src="<?php echo $fetch_doctors['photo']?>" alt="" style = "height: 200px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch_doctors['name']?></h5>
                            <p class="card-text"><?php echo $fetch_doctors['email']?></p>
                            <p class="card-text"><?php echo $fetch_doctors['phone_number']?></p>
                            <p class="card-text"><?php echo $fetch_doctors['specialty']?></p>
                        </div>
                    </button>
                </div>
                <?php 
                    endwhile;
                ?>
            </div>
        </div>
    </div>
    <!-- Doctor List End -->

    <!-- Book Appointment Starts -->
    <div id = "finishBooking" class = "hide_display">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class=" grey_border col-md-4">
                    <?php
                        if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email']) && isset($_GET['phone_number']) && isset($_GET['doctor']) && isset($_GET['complain']) && isset($_GET['date']))
                        {
                            if(!empty($_GET['name']) && !empty($_GET['age']) && !empty($_GET['email']) && !empty($_GET['phone_number']) && !empty($_GET['doctor']) && !empty($_GET['complain']) && !empty($_GET['date']))
                            {
                                $name = $_GET['name'];
                                $age = $_GET['age'];
                                $email = $_GET['email'];
                                $phone_number = $_GET['phone_number'];
                                $doctor = $_GET['doctor'];
                                $complain = $_GET['complain'];
                                $date = $_GET['date'];
            

                                $sql_create_accout = "INSERT INTO appointments(name, age, email, phone_number, doctor_id, complain, date) VALUES('".$name."', '".$age."', '".$email."', '".$phone_number."', '".$doctor."', '".$complain."', '".$date."')";
                                $query_create_account = mysqli_query($conn, $sql_create_accout);
                                echo "<script lang = 'javascript'>alert('Appointment Successfully Booked');</script>";
                                header("location: home.php");
                            }else{
                                echo "<script lang = 'javascript'>alert('Finish filling the form before submitting');</script>";
                            }
                        }
                    ?>
                    <h4 class = "text-center">Enter Details</h4>
                    <form action="book_appointment.php" method = "GET">
                        <!-- Hidden input for doctor's id -->
                        <input type="hidden" id = "docId" name = "doctor">
                        <input type="hidden" id = "date" name = "date" value = "<?php echo date("d-m-Y")?>">
                        <input type="text" name = "name" class="form-control" placeholder = "Enter Your Full Name.">
                        <br>
                        <input type="number" name = "age" class="form-control" placeholder = "Enter Your Age.">
                        <br>
                        <input type="email" name = "email" class="form-control" placeholder = "Enter An Active Email Of Yours.">
                        <br>
                        <input type="text" name = "phone_number" class="form-control" placeholder = "Enter An Active Phone Number Of Yours">
                        <br>
                        <div class="text-center">
                            <textarea name="complain" class="form-control" id="" cols="30" rows="10">--Write Down Your Complain--</textarea>
                        </div>
                        <br>
                        <div class = "text-center">
                            <button class = "btn btn-dark">Book Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include("./assets/inc/footer.php");
?>