<?php
session_start();
include('../config/DB_conn.php');

if (isset($_POST['add_cat_btn'])) {
    $CategoryName = mysqli_real_escape_string($con, $_POST['CategoryName']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    // Validate inputs before proceeding
    if (!empty($CategoryName) && !empty($status)) {
        $cat_query = "INSERT INTO category (CategoryName, status) VALUES ('$CategoryName', '$status')";
        $cat_query_run = mysqli_query($con, $cat_query);

        if ($cat_query_run) {
            $_SESSION['message'] = "Category Added Successfully";
            header("Location: cat.php");
            
        } else {
            $_SESSION['message'] = "Database error: " . mysqli_error($con);
            header("Location: cat.php");
            
        }
    } else {
        $_SESSION['message'] = "Please fill in all fields";
        header("Location: cat.php");
        
    }
}

//add products
?>
