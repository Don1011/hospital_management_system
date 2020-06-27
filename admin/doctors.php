<?php
    include("./assets/inc/header.php");
    include("./assets/inc/conn.php");
?>
        <div class="container">
            <div class="row">
                <!-- <div class="margin_100"></div> -->
                <div class="col-md-6">
                    <?php
                        if(isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['phone_number']) && isset($_POST['specialty']) && isset($_FILES['photo']))
                        {
                            if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone_number']) && !empty($_POST['specialty']) && !empty($_FILES['photo']))
                            {
                                $full_name = $_POST['full_name'];
                                $email = $_POST['email'];
                                $phone_number = $_POST['phone_number'];
                                $specialty = $_POST['specialty'];
                                $photo = $_FILES['photo'];

                                //Getting the file extension
                                $file_ext = strtolower(end(explode(".", $photo['name'])));
                                //Allowed extensions
                                $allowed_ext = array("jpg", "png", "jpeg");
                                //If Statement to make the extension check 
                                if(in_array($file_ext, $allowed_ext))
                                {
                                    if($photo['error'] === 0)
                                    {
                                        $new_name = uniqid(strtolower(end(explode(" ", $ful_name))));
                                        $new_destination = "./assets/img/".$new_name.".".$file_ext;
                                        if(move_uploaded_file($photo['tmp_name'], '.'.$new_destination))
                                        {
                                            $insert_doc = "INSERT INTO doctors(name, email, phone_number, specialty, photo) VALUES('".$full_name."', '".$email."', '".$phone_number."', '".$specialty."', '".$new_destination."')";
                                            
                                            $query_insert_doc = mysqli_query($conn, $insert_doc);

                                            header("location: doctors.php");
                                        }
                                    }else
                                    {
                                        echo "<script lang =  'javascript'>Error uploading photo!</script>";
                                    }
                                }else
                                {
                                    echo "<script lang =  'javascript'>Please select a photo!</script>";
                                }

                                
                                
                               

                            }else
                            {
                                alert("Complete filling the form before submitting");
                            }
                        }
                    ?>
                    <form action="#" class = "grey_border" method = "POST" action = "doctors.php" enctype = "multipart/form-data">
                        <input name = "photo" type="file" class="hidden" id = "doctorsPhoto" oninput = "fileSelect()">
                        <label id = "fileLabel" for="doctorsPhoto" class = "form-control">Click To Select the Doctor's Picture</label>
                        <br>
                        <input name = "full_name" type="text" class="form-control" placeholder = "Enter the Doctor's Name" required>
                        <br>
                        <input name = "email" type="text" class="form-control" placeholder = "Enter the Doctor's Email" required>
                        <br>
                        <input name = "phone_number" type="text" class="form-control" placeholder = "Enter the Doctor's Phone number" required>
                        <br>
                        <input name = "specialty" type="text" class="form-control" placeholder = "Enter the Doctor's Specialty" required>
                        <br>
                        <div class="text-center">
                            <button class = "btn btn-dark" onclick = "addDoctorForm()">Add Doctor</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="grey_border text_small">
                        <?php
                            $sql_doc = "SELECT * FROM doctors";
                            $query_doc = mysqli_query($conn, $sql_doc);
                            while($fetch_doc = mysqli_fetch_assoc($query_doc)):
                        ?>
                        <div class="grey_border">
                            <h5>Name: <?php echo $fetch_doc['name']?></h5>
                            <div>Email: <?php echo $fetch_doc['email']?></div>
                            <div>Phone Number: <?php echo $fetch_doc['phone_number']?></div>
                            <div>Specialty: <?php echo $fetch_doc['specialty']?></div>
                        </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include("./assets/inc/footer.php");
?>