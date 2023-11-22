<?php
session_start();
include('../Optical-Shop-Software/config/DB_conn.php');

function generateCustomerID() {
    $prefix = '#CUST'; // Prefix for the customer ID
    $randomPart = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6); // Random part of the ID
    $customerID = $prefix . $randomPart;

    // Check if the generated ID already exists in the database
    global $con;
    $check_id_query = "SELECT CustomerID FROM Customers WHERE CustomerID='$customerID'";
    $check_id_query_run = mysqli_query($con, $check_id_query);

    if (mysqli_num_rows($check_id_query_run) > 0) {
        // If the ID already exists, generate a new one recursively
        return generateCustomerID();
    } else {
        // If the ID is unique, return it
        return $customerID;
    }
}

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

       // Generate a unique customer ID
       $customerID = generateCustomerID();

         // Insert data with hashed password and generated customer ID
    $insert_query = "INSERT INTO Customers (CustomerID, FirstName, LastName, ContactEmail, ContactPhone, password) VALUES ('$customerID', '$Firstname', '$Lastname', '$ContactEmail', '$ContactPhone', '$hashed_password')";
    $insert_query_run = mysqli_query($con, $insert_query);

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
            $role_as = $userdata['role_as'];

            $_SESSION['auth_user'] = [
                'Firstname' => $username,
                'ContactEmail' => $useremail
            ];

            
//admin authentication

            $_SESSION['role_as'] = $role_as;

            if ($role_as == 1) 
            {
                $_SESSION['message'] = "Wellcome to dashboard";
                header('Location: dashboard.php');
                exit();
            }
            else 
            {
                $_SESSION['message'] = "Logged In Successfully";
                header('Location: homepage.php');
                exit();
            }

        } 
        
      else 
        {
            $_SESSION['message'] = "Invalid Credentials";
            header("Location: loginpage.php");
            exit();
        }
    } 
    else {
        $_SESSION['message'] = "Invalid Credentials";
        header("Location: loginpage.php");
        exit();
    }
}
?>
