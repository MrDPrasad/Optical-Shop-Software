<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard | By Code Info</title>
    <link rel="stylesheet" href="dash.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <style>
    /* CSS code to increase the size of the h1 element */
    .main-course h1 {
      font-size: 25px; /* Adjust the size as needed */
    }

  

  </style>

  </head>
  <body>
    <div class="container">

      <div class="topbar">
        
          
          
          <div class="user">
          <img src="img/user.png" alt="">
        </div>
      </div>

      <nav>

        
          
        <ul>
          <li><a href="#" class="logo">
            <img src="../assets/logo.jpg" alt="">
            <span class="nav-item">DashBoard</span>
          </a></li>
          <li><a href="dash.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a></li>
          <li><a href="category.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Category</span>
          </a></li>
          <li><a href="items.php">
            <i class="fas fa-wallet"></i>
            <span class="nav-item">Items</span>
          </a></li>
          <li><a href="Customer.php">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Customer</span>
          </a></li>
          <li><a href="">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Stocks</span>
          </a></li>
          <li><a href="">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Order</span>
          </a></li>
          <li><a href="">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Invoice</span>
          </a></li>
          <li><a href="">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Reports</span>
          </a></li>
          <li><a href="">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item">Web</span>
          </a></li>
          <li><a href="" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a></li>
        </ul>
      </nav>
  
      <section class="main">
        <div class="main-top">
          <h1>Welcome</h1>

         <!--<div class="search">
            <input type="text" name="search" placeholder="search here">
            <label for="search"><i class="fas fa-search"></i></label>
           </div>-->

          <!--<i class="fas fa-user-cog"></i>-->
        </div>
       <div class="main-skills">
          
        </div>
  
        <section class="main-course">
          <h1>Items</h1>
          <div class="course-box">

          <table class="item-table">
  <thead>
    <tr>
      <th>#</th>
       
      <th>CustomerID </th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>ContactEmail</th>
      <th>ContactPhone</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>fahb233476</td>
      <td>John</td>  
      <td>Doe</td>
      <td>ksabhwe</td>
      <td>45678</td>
      <td><button class="status-btn active">Active</button></td>
      <td>
         
        <button class="action-btn">Edit</button>
        <button class="action-btn">Remove</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>wkeFJH34986</td>
      <td>John</td>  
      <td>Doe</td>
      <td>ksabhwe</td>
      <td>45678</td>
      <td><button class="status-btn inactive">Inactive</button></td>
      <td>
         
        <button class="action-btn">Edit</button>
        <button class="action-btn">Remove</button>
      </td>
    </tr>
    <!-- Add more rows as needed -->
  </tbody>
</table>

<!--<div class="pagination">
      <a href="#">&laquo; Previous</a>
      
       
       
      <a href="#">Next &raquo;</a>
    </div>
-->


             
             
          </div>
        </section>
      </section>
    </div>
  </body>
  </html></span>