<?php
    include("./assets/inc/conn.php");
    include("./assets/inc/header.php");
?>
<hr>
<div class = "container" id="doctors">
    <div class="row">
        <div class="text-center row " style = "width: 100%">
            <h3 style = "width: 100%">Doctors</h3>
        </div>
        <?php
            $get_doctors = "SELECT * FROM doctors";
            $query_doctors = mysqli_query($conn, $get_doctors);
            while($fetch_doctors = mysqli_fetch_assoc($query_doctors)):
        ?>
        <div class="col-md-3">
            <div class="card">
                <img class="img-fluid" src="<?php echo $fetch_doctors['photo']?>" alt="" style = "height: 200px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fetch_doctors['name']?></h5>
                    <p class="card-text"><?php echo $fetch_doctors['email']?></p>
                    <p class="card-text"><?php echo $fetch_doctors['phone_number']?></p>
                    <p class="card-text"><?php echo $fetch_doctors['specialty']?></p>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        ?>
    </div>
</div>
<?php
    include("./assets/inc/footer.php");
?>