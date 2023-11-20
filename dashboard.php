<?php
session_start();
include('../Optical-Shop-Software/config/DB_conn.php');
/*include('adminauthe.php');*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/dashboard.css" />
    <script src="https://kit.fontawesome.com/e3674a2474.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script>
        function closeOverlay() {
            document.getElementById("divOne").style.display = "none";
        }
    </script>
</head>
<body>

    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="assets//logo.jpg" alt="">
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>
                <li><a href="#"><i class="fas fa-home"></i><span class="nav-item">Home</span></a></li>
                <li><a href="cat.php"><i class="fas fa-user"></i><span class="nav-item">Category</span></a></li>
                <li><a href=""><i class="fas fa-user"></i><span class="nav-item">Items</span></a></li>
             <!--   <li><a href=""><i class="fa-solid fa-boxes-packing"></i><span class="nav-item">Supplier</span></a></li>-->
                <li><a href=""><i class="fas fa-wallet"></i><span class="nav-item">Customer</span></a></li>
                <li><a href=""><i class="fas fa-chart-bar"></i><span class="nav-item">Stocks</span></a></li>
                <li><a href=""><i class="fas fa-tasks"></i><span class="nav-item">Order</span></a></li>
                <li><a href="invoice_form.php"><i class="fas fa-cog"></i><span class="nav-item">Invoice</span></a></li>
                <li><a href=""><i class="fas fa-question-circle"></i><span class="nav-item">Reports</span></a></li>
                <li><a href="" class="logout"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Web</span></a></li>
            </ul>
        </nav>
       <div class="box">
            <a class="button" href="#divOne">Contact US</a>
        </div>
        <div class="overlay" id="divOne">
            <div class="wrapper">
                <h2>Fill up The Products</h2>
                <a class="close" href="#" onclick="closeOverlay()">&times;</a>
                <div class="content">
                    <div class="container">
                        <form method="post" action="process_form.php">
                            <label>Product Name</label>
                            <input placeholder="Fill product name.." type="text" name="product_name">
                            <label>Product Price</label>
                            <input placeholder="Product price" type="text" name="product_price">
                            <label>Discount</label>
                            <input placeholder="Fill product discount" type="text" name="discount">
                            <div class="form-outline mb-4 w-50 m-auto">
                                <select name="product_category" id="product_category" class="form-select">
                                    <option value="">Select a Category</option>
                                    <option value="Frames">Frames</option>
                                    <option value="Lenses">Lenses</option>
                                    <option value="Contact Lenses">Contact Lenses</option>
                                    <option value="Sunglasses">Sunglasses</option>
                                    <option value="Lens Care">Lens Care</option>
                                    <option value="Accessories">Accessories</option>
                                    <option value="Eye Health">Eye Health</option>
                                    <option value="Eye Exams">Eye Exams</option>
                                    <option value="Optical Instruments">Optical Instruments</option>
                                    <option value="Custom Eyewear">Custom Eyewear</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4 w-50 m-auto">
                                <label for="product_image" class="form-label">Product image</label>
                                <input type="file" name="product_image" id="product_image" class="form-control" required="required">
                            </div>
                            
                            <label>Description</label>
                            <textarea name="description" placeholder="Write something.." rows="4"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
