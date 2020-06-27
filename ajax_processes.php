<?php
    include("./assets/inc/conn.php");
    if(isset($_GET['query'])){
        $query = $_GET['query'];
        $sql_search = "SELECT * FROM doctors WHERE name LIKE '%".$query."%'";
        $query_search = mysqli_query($conn, $sql_search);
        if(mysqli_num_rows($query_search)){
            while($fetch_search = mysqli_fetch_assoc($query_search)){
?>
                <div class="col-md-3">
                    <button class="card doctor_button" onclick="selectDoctor(<?php echo $fetch_search['id']?>)">
                        <img class="img-fluid" src="<?php echo $fetch_search['photo']?>" alt="" style = "height: 200px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch_search['name']?></h5>
                            <p class="card-text"><?php echo $fetch_search['email']?></p>
                            <p class="card-text"><?php echo $fetch_search['phone_number']?></p>
                            <p class="card-text"><?php echo $fetch_search['specialty']?></p>
                        </div>
                    </button>
                </div>
<?php
            }
        }else{
            echo "<div style = 'width: 100%; padding: 50px' class = 'text-danger text-center'>NO DOCTOR MATCHES YOUR SEARCH.</div>";
        }
    }
?>