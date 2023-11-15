 

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




    //check email alredy registered
    $check_email_query = "SELECT ContactEmail FROM customers WHERE ContactEmail='$ContactEmail' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered!";
        header("Location: registration.php");   
    }
    else
    {

    if ($password == $cpassword) {
        // Insert data
        $insert_query = "INSERT INTO customers (FirstName, LastName, ContactEmail, ContactPhone, password) VALUES ('$Firstname', '$Lastname', '$email', '$phone', '$password')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if ($insert_query_run) {
            $_SESSION['message'] = "Registered Successfully";
            header("Location: loginpage.php");
             
        } else {
            $_SESSION['message'] = "Something went wrong";
            header("Location: registration.php");
             
        }
    } else {
        $_SESSION['message'] = "Passwords do not match!";
        header('Location: registration.php');
         
    }
}
}

else if(isset($_POST['login_btn']))
{
    $ContactEmail = mysqli_real_escape_string($con, $_POST["ContactEmail"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $login_query = "SELECT *FROM customers WHERE ContactEmail='$ContactEmail' AND password='$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) 
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['Firstname'];
        $useremail = $userdata['ContactEmail'];

        $_SESSION['auth_user'] = [
            'Firstname' => $username,
            'ContactEmail' => $useremail
        ];

        $_SESSION['message'] = "Loged In Successfully";
        header('Location: ../homepage.php');

        
    }
    else
    {
        $_SESSION['message'] = "Invalid Credentials";
        header("Location: loginpage.php");
    }

}
?>



 