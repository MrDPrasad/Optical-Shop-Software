

<?php
/*session_start();
if (isset($_SESSION["user"])) {
    header("Location: homepage.php");
}*/
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/registration.css">
</head>
<body>

    <div class="container">


    <?php
    
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
       
        require_once "DB_conn.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"]="yes";
                header("Location: homepage.php");
                die();
            }
            else{
                echo "<div class='alert alert-danger'>Password does not match !</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger'>Email does not match !</div>";
        }
    }

    ?>




        <form action="loginpage.php" method="post">
             <div class="form-group">
                <input type="email" placeholder="Enter Email" name="email" class="form-control">
             </div>

             <div class="form-group">
                <input type="password" placeholder="Enter password" name="password" class="form-control">
             </div>

             <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Login" name="login">
            </div>

             
        </form>

        <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
    
</body>
</html>