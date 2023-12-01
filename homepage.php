
<?php
session_start();
include('../Optical-Shop-Software/config/DB_conn.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/lens.css">
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





    <div class="lens">

        <img src="assets/computerglass.jpg" alt="">
        <img src="assets/123.jpg" alt="">
        <img src="assets/kidsglass.jpg" alt="">
        <img src="assets/power sunglass.jpg" alt="">
         <img src="assets/eye.jpg" alt="">

    </div>





    <!--<div class="main">
        <img src="" alt="">
    </div>


    <div class="cart">

        <div class="card">

        </div>
    </div>-->
 

    <div class="banner">
      
        <div class="img">
            <img src="assets/dp2.webp" alt="">
        </div>
    </div>


    <!--
    <div class="main">
        <img src="premium glass.jpg" alt="">
    </div>
-->








    <div class="banner">
        <h2>PREMIUM EYEWEAR</h2>
        <div class="img">
            <img src="assets/dp.webp" alt="">
        </div>
    </div>
 




   <!-- <div class="footer">
         
        <div class="list">
            <ul>
                <li>
                    <h2>Services</h2>
                    <a>Store Locator</a>
                    <a>Buying Guide</a>
                    <a>Frame Size</a>
                </li>
            </ul>
        </div>

        <div class="list">
            <ul>
                <li>
                    <h2>About Us</h2>
                    <a>We Are Hiring</a>
                    <a>Refer And Earn</a>
                    <a>About us</a>
                    <a>Coupons</a>
                </li>
            </ul>
        </div>

        <div class="list">
            <ul>
                <li>
                    <h2>Help</h2>
                    <a>FAQ's</a>
                     
                </li>
            </ul>
        </div>
    </div>
-->


<section class="footer">
    <div class="box-container">
        <div class="box">
        <h2>Quick link</h2>
        <a href=""><i class="fa-solid fa-angle-right"></i>home</a>
        <a href=""><i class="fa-solid fa-angle-right"></i>about</a>
        <a href=""><i class="fa-solid fa-angle-right"></i>Products</a>
    </div>

    <div class="box">

        <h2>Extra link</h2>
        <a href=""><i class="fa-solid fa-angle-right"></i>ask questions</a>
        <a href=""><i class="fa-solid fa-angle-right"></i>privacy policy</a>
        <a href=""><i class="fa-solid fa-angle-right"></i> terms of use</a>
         

    </div>

    <div class="box">

        <h2>Contact information</h2>
        <a href=""><i class="fa-solid fa-phone"></i>+123-456-7890</a>
        
        <a href=""><i class="fa-solid fa-envelope"></i></i>abcd@gmail.com</a>
        <a href=""><i class="fa-solid fa-location-dot"></i></i>sullia, india - 12345</a>
         

    </div>

    <div class="box">
        <h2>Follow us</h2>
        <a href=""><i class="fa-brands fa-facebook"></i>facebook</a>
        <a href=""><i class="fa-brands fa-twitter"></i>twitter</a>
        <a href=""><i class="fa-brands fa-square-instagram"></i>instagram</a>
    </div>

    </div>

    <div class="credit"> created by <span>mr.Ni_Dpn designer</span> | all rights reserved! </div>

 </section>





</body>
    </html>