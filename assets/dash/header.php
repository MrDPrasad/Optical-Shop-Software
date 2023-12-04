<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/dash/header.css">
    <script src="https://kit.fontawesome.com/7d286ea9a7.js" crossorigin="anonymous"></script>
    
</head>
<body>





    <div class="menu-bar">
        <p><i class="fa-solid fa-phone-volume"></i>&nbsp;999-666-222</p>
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="What are you looking for">
        
         
    
        <ul>

        <?php if (isset($_SESSION["auth"])): ?>
    <li class="menu-bar2">
        <li class="log">
            <i class="fa-solid fa-user"></i>
            <span style="margin-left: 5px;"><?=$_SESSION['auth_user']['FirstName']; ?></span>
            <li><a href="logout.php">Logout</a></li>
        </li>
    </li>
<?php else: ?>
    <li><a href="registration.php">Register</a></li>
    <li><a href="loginpage.php">Login</a></li>
    <li><a href="#">Contact us</a></li>  
<?php endif; ?>

             
            
            <li><a href="#">About</a></li>
            <li><a href="#">Products</a></li>
             
            <li><a href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i></i>  Cart</a></li>
             
        </ul>
             </div> 


         ]
        </div>