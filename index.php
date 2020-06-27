<?php 
    session_start();
    include("assets/inc/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    
    <div class = "container">
        <div class="row justify-content-md-center text-center">
            <?php 
                
                if(isset($_POST['login_email']) && isset($_POST['login_password']))
                {
                    $email = $_POST['login_email'];
                    $password = $_POST['login_password'];

                    // login_user($email, $password);
                    $sql_login = "SELECT * FROM users WHERE email = '".$email."'";
                    $query_login = mysqli_query($conn, $sql_login);
                    if(mysqli_num_rows($query_login)){
                        $fetch_login = mysqli_fetch_assoc($query_login);
                        if($fetch_login['password'] == $password){
                            $_SESSION['user_id'] = $fetch_login['id'];
                            header("location: home.php");
                        }else{
                            echo "<script lang = 'javascript'>Login Error</script>";
                            header("location: index.php");
                        }
                    }else{
                        echo "<script lang = 'javascript'>Login Error</script>";
                        header("location: index.php");
                    }
                }
            ?>
            <form action="index.php" method = "POST" class = "login-form" id = "login" onsubmit = "loginValidation()">
                <div>
                    <h1>Login</h1>
                </div>
                <div>
                    <input type="text" name="login_email" id="loginEmail" class = "form-control" placeholder = "Enter Email">
                </div>
                <div>
                    <input type="password" name="login_password" id="loginPassword" class = "form-control" placeholder= "Enter Password">
                </div>
                <div>
                    <button class = "btn btn-outline-light btn-primary">Login</button>
                </div>
                <div>
                    <button class = "btn btn-outline-light btn-primary text-light" onclick = "toggleLogin()" type = "button" role = "button">Create Account</button>
                </div>
            </form>
            <?php 
                if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['password']))
                {
                    $name = $_POST['name'];
                    $age = $_POST['age'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $sql_create_accout = "INSERT INTO users(name, age, email, password) VALUES('".$name."', '".$age."', '".$email."', '".$password."')";
                    $query_create_account = mysqli_query($conn, $sql_create_accout);

                    // login_user($email, $password);
                    $sql_login = "SELECT * FROM users WHERE email = '".$email."'";
                    $query_login = mysqli_query($conn, $sql_login);
                    if(mysqli_num_rows($query_login)){
                        $fetch_login = mysqli_fetch_assoc($query_login);
                        if($fetch_login['password'] == $password){
                            $_SESSION['user_id'] = $fetch_login['id'];
                            header("location: home.php");
                        }else{
                            echo "<script lang = 'javascript'>Login Error</script>";
                            header("location: index.php");
                        }
                    }else{
                        echo "<script lang = 'javascript'>Login Error</script>";
                        header("location: index.php");
                    }
                }
            ?>
            <form action="index.php" method = "POST" class = "login-form" id = "createAccount" onsubmit = "createAccountValidation()">
                <div>
                    <h1>Create Account</h1>
                </div>
                <div>
                    <input type="text" name="name" id="name" class = "form-control" placeholder = "Enter Full Name">
                </div>
                <div>
                    <input type="number" name="age" id="age" class = "form-control" placeholder = "Enter Age">
                </div>
                <div>
                    <input type="email" name="email" id="email" class = "form-control" placeholder = "Enter Email">
                </div>
                <div>
                    <input type="password" name="password" id="password" class = "form-control" placeholder= "Enter Password">
                </div>
                <div>
                    <input type="password" name="retypedPassword" id="retypedPassword" class = "form-control" placeholder= "Enter Password Again">
                </div>
                <div>
                    <button class = "btn btn-outline-light btn-primary">Create Account</button>
                </div>
                <div>
                    <button class = "btn btn-outline-light btn-primary" onclick = "toggleLogin()" type = "button" role = "button">Login</button>
                </div>
            </form>
        </div>

    </div>

    <script src= "./assets/bootstrap/js/bootstrap.js"></script>
    <script src= "./assets/js/jquery-3.4.1.js"></script>
    <script src= "./assets/js/script.js"></script>
    <script src= "./assets/js/common.min.js"></script>
    <script src= "./assets/js/custom.min.js"></script>
    <script src= "./assets/js/settings.js"></script>
    <script src= "./assets/js/gleek.js"></script>
    <script src= "./assets/js/styleSwitcher.js"></script>
</body>
</html>