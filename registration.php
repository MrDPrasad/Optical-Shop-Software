

<?php
/*session_start();
if (!isset($_SESSION["user"])) {
    header("Location: loginpage.php");
}*/
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/registration.css">
</head>
<body>
    <div class="container">

    <?php
    if (isset($_POST["submit"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        //password encription:
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if (empty($fullname) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,"Email is not valid !");
        }

        if (strlen($password)<8) {
            array_push($errors,"Password must be atleast 8 characters long");
        }

        if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match !");
        }



    //already exists

    require_once "DB_conn.php";
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount>0) {
        array_push($errors,"Email already exists ! ");
    }




        if (count($errors)>0) {
         foreach($errors as $error){
            echo "<div class='alert alert-danger'>$error</div>";
         }
        }
        else
        {
            require_once "DB_conn.php";
            $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $preparestmt =  mysqli_stmt_prepare($stmt, $sql);
            if ($preparestmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullname, $email, $password);
                mysqli_stmt_execute($stmt);
                $_SESSION['message'] = "Registered Successfully";
                header("Location: loginpage.php");
            }
            else{
                $_SESSION['message'] = "Someting went wrong";
                header("Location: registration.php");
            }
        }
        

    }

    ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password">
            </div>
            
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>

        <div><p>Already Registered<a href="loginpage.php">Login Here</a></p></div>

    </div>
</body>
</html>