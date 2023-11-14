
    <?php 
    <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <title>Dashboard </title>
        <link rel="stylesheet" href="assets/dashboard.css" />
        <script src="https://kit.fontawesome.com/e3674a2474.js" crossorigin="anonymous"></script>
        <!-- Font Awesome Cdn Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
      </head>
      <body>
      
        <div class="container">
          <nav>
            <ul>
              <li><a href="#" class="logo">
                <img src="assets//logo.jpg" alt="">
                <span class="nav-item">DashBoard</span>
              </a></li>
              <li><a href="#">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
              </a></li>
              <li><a href="">
                  <i class="fas fa-user"></i>
                  <span class="nav-item">Category</span>
                </a></li> 
                 <li><a href="">
                  <i class="fas fa-user"></i>
                  <span class="nav-item">Items</span>
                </a></li>
              <li><a href="">
                <i class="fa-solid fa-boxes-packing"></i>
                <span class="nav-item">Supplier</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-wallet"></i>
                <span class="nav-item">Customer</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Stocks</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-tasks"></i>
                <span class="nav-item">Order</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Invoice</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-question-circle"></i>
                <span class="nav-item">Reports</span>
              </a></li>
              <li><a href="" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">web</span>
              </a></li>
            </ul>
          </nav>
          <div class="box">
            <a class="button" href="#divOne">Contact US</a>
          </div>
          <div class="overlay" id="divOne">
            <div class="wrapper">
              <h2>Fill up The Products</h2>
              <a class="close" href="#">&times;</a>
              <div class="content">
                <div class="container">
                  <form>
                    <label>product Name</label>
                    <input placeholder="fill product name.." type="text">
                    <label>product price</label>
                    <input placeholder="product price" type="text">
                    <label>Discount</label>
                    <input placeholder="fill product discount" type="text">
                    <label>product price </label>
                    <input placeholder="product price" type="text">
        
                    <!-- categories -->
                    <div class="form-outline mb-4 w-50 m-auto">
                      <select name="product_category" id="" class="form-select">
                        <option value="">Select a Category</option>
                        <option value="">Category1</option>
                        <option value="">Category2</option>
                        <option value="">Category3 </option>
                        <option value="">Category4</option>
                      </select>
                      <!-- Image 1 -->
                      <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_image1" class="form-label">Product image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
                      </div>
                       <!-- Image 2-->
                       <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_image1" class="form-label">Product image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
                      </div>
                       <!-- Image 3 -->
                       <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_image1" class="form-label">Product image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
                      </div>
                       <!-- Image 3-->
                       <div class="form-outline mb-4 w-50 m-auto">
                        <label for="product_image1" class="form-label">Product image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
                      </div>
                    </div>
                    <!--descreption-->
                    <label>description</label>
                    <textarea placeholder="Write something.."></textarea>
                    <input type="submit" value="Submit">
                  </form>
                </div>
              </div>
            </div>
          </div>
      </body>
      </html>
      ?>