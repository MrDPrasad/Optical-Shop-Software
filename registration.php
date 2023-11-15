

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
    <!--<link rel="stylesheet" href="assets/registration.css">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">

    <?php
    /*if (isset($_POST["submit"])) {
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
*/
    ?>

    <?php
    session_start();
    ?>

    <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

            <?php
            if (isset($_SESSION['message'])) 
            {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       <strong>Hey!</strong> <?=$_SESSION['message']; ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['message']);
                
            }

            ?>

 


                <div class="card">
                       <div class="card-header">
                        <h4>Registration Form</h4>
                       </div>
                     <div class="card-body">

                      <form action="authcode.php" method="POST">

                           <div class="mb-3">
                             <label class="form-label">First name</label>
                             <input type="text" name="Firstname" class="form-control" placeholder="Enter your name">
                             </div>

                             <div class="mb-3">
                             <label class="form-label">Last name</label>
                             <input type="text" name="Lastname" class="form-control" placeholder="Enter your name">
                             </div>


                             <div class="mb-3">
                             <label class="form-label">Phone</label>
                             <input type="number" name="ContactPhone" class="form-control" placeholder="Enter your phone number">
                             </div>
                             


                           <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Email address</label>
                             <input type="email" name="ContactEmail" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                              
                            </div>


                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" id="exampleInputPassword1">
                             </div>

                             <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
                             </div>

                             <!--


                             <div class="mb-3 form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                              </div>
-->


                                 <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>


                      </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
    </div>
    
</div>
</body>
</html>