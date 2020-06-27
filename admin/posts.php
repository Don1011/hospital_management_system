<?php
    include("./assets/inc/header.php");
    include("./assets/inc/conn.php");
?>
        <div class="container">
            <div class="row">
                <!-- <div class="margin_100"></div> -->
                <div class="col-md-6">
                    <?php
                        if(isset($_GET['title']) && isset($_GET['date']) && isset($_GET['post']))
                        {
                            if(!empty($_GET['title']) && !empty($_GET['date']) && !empty($_GET['post']))
                            {
                                $title = $_GET['title'];
                                $date = $_GET['date'];
                                $post = $_GET['post'];
                                
                                $sql_fetch_all = "SELECT * FROM posts";
                                $query_fetch_all = mysqli_query($conn, $sql_fetch_all);
                                if(mysqli_num_rows($query_fetch_all) == 2)
                                {
                                    $sql_delete_first = "DELETE FROM posts LIMIT 1";
                                    $query_delete_first = mysqli_query($conn, $sql_delete_first);
                                }
                                $sql_insert_post = "INSERT INTO posts(title, post, date) VALUES('".$title."', '".$post."', '".$date."')";
                                $query_insert_post = mysqli_query($conn, $sql_insert_post);
                                header("location: posts.php");
                            }else
                            {
                                echo "<script lang = 'javascript'>Complete filling the form before submitting</script>";
                            }
                        }
                    ?>
                    <form action="#" class = "grey_border" action = "posts.php" method = "GET">
                        <input type="text" name = "title" class="form-control" placeholder = "Post Title">
                        <!-- Hidden Input fields -->
                        <input type="hidden" name = "date" value = "<?php echo date('d-m-Y')?>">
                        <br>
                        <textarea name="post" id="" cols="30" rows="10" class = "form-control">Enter Post Details</textarea>
                        <br>
                        <button class = "btn btn-dark">Post</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="grey_border text_small">
                        <?php
                            $sql_fetch_post = "SELECT * FROM posts ORDER BY id DESC";
                            $query_fetch_post = mysqli_query($conn, $sql_fetch_post);
                            while($fetch_post = mysqli_fetch_assoc($query_fetch_post)):
                        ?>
                        <div class="grey_border">
                            <h5><?php echo $fetch_post['title']?></h5>
                            <p>
                                <?php echo $fetch_post['post']?>
                            </p>
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