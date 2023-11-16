<?php
session_start();
include('../Optical-Shop-Software/config/DB_conn.php');

if (isset($_POST['register_btn'])) {
    $Firstname = mysqli_real_escape_string($con, $_POST["Firstname"]);
    $Lastname = mysqli_real_escape_string($con, $_POST["Lastname"]);  
    $ContactPhone = mysqli_real_escape_string($con, $_POST["ContactPhone"]);
    $ContactEmail = mysqli_real_escape_string($con, $_POST["ContactEmail"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);

    // Check if passwords match
    if ($password !== $cpassword) {
        $_SESSION['message'] = "Passwords do not match!";
        header('Location: registration.php');
        exit();
    }

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email is already registered
    $check_email_query = "SELECT ContactEmail FROM customers WHERE ContactEmail='$ContactEmail'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered!";
        header("Location: registration.php");   
        exit();
    }

    // Insert data with hashed password
    $insert_query = "INSERT INTO customers (FirstName, LastName, ContactEmail, ContactPhone, password) VALUES ('$Firstname', '$Lastname', '$ContactEmail', '$ContactPhone', '$hashed_password')";
    $insert_query_run = mysqli_query($con, $insert_query);

    if ($insert_query_run) {
        $_SESSION['message'] = "Registered Successfully";
        header("Location: loginpage.php");
        exit();
    } else {
        $_SESSION['message'] = "Something went wrong";
        header("Location: registration.php");
        exit();
    }
}

// Login process
else if(isset($_POST['login_btn'])) {
    $ContactEmail = mysqli_real_escape_string($con, $_POST["ContactEmail"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $login_query = "SELECT * FROM customers WHERE ContactEmail='$ContactEmail'";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $userdata = mysqli_fetch_array($login_query_run);
        $stored_password = $userdata['password'];

        if (password_verify($password, $stored_password)) {
            $_SESSION['auth'] = true;

            $username = $userdata['Firstname'];
            $useremail = $userdata['ContactEmail'];

            $_SESSION['auth_user'] = [
                'Firstname' => $username,
                'ContactEmail' => $useremail
            ];

            $_SESSION['message'] = "Logged In Successfully";
            header('Location: homepage.php');
            exit();
        } else {
            $_SESSION['message'] = "Invalid Credentials";
            header("Location: loginpage.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "Invalid Credentials";
        header("Location: loginpage.php");
        exit();
    }
}
?>
