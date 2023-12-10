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

             <label for="">Item Name</label>
             <input type="text" placeholder="Enter Category Name">
              
             <label for="">Description</label>
             <input type="text" id="description" placeholder="Enter Description">

             <label for="">Upload Image</label>
             <input type="file" name="image">

              

             <button id="submitButton">Add Item</button>

             <button id="submitButton" onclick="window.location.href='display_category.php'">Display Items</button>


            </div>

   

        </section>

        <!--  <button id="submitButton12">+ Add Item</button>

          <table class="item-table">

           

  <thead>
    <tr>
      <th>#</th>
      <th>Date Created</th>
      <th>Brand</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>2023-12-01</td>
      <td>Item A</td> 
      <td>glass</td>
      <td>500</td>
      <td>Description of Item A</td>
      <td><button class="status-btn active">Active</button></td>
      <td>
         
        <button class="action-btn">Edit</button>
        <button class="action-btn">Remove</button>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>2023-12-02</td>
      <td>Item B</td>
      <td>glass</td>
      <td>500</td>
      <td>Description of Item B</td>
      <td><button class="status-btn inactive">Inactive</button></td>
      <td>
         
        <button class="action-btn">Edit</button>
        <button class="action-btn">Remove</button>
      </td>
    </tr>
     
  </tbody>
</table>

 <div class="pagination">
      <a href="#">&laquo; Previous</a>
      
       
       
      <a href="#">Next &raquo;</a>
    </div>
 


             
             
          </div>
        </section>
      </section>
    </div>



     The modal  
<div class="modal" id="addItemModal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Add Item</h2>
    <form>
      <label for="brandName">Brand Name:</label>
      <input type="text" id="brandName" name="brandName"><br>

      <label for="category">Category:</label>
      <input type="text" id="category" name="category"><br>

      <label for="description">Description:</label>
      <input type="text" id="description" name="description"><br>

      <label for="price">Image</label>
      <input type="file" name="img"><br>

      <label for="price">Price:</label>
      <input type="text" id="price" name="price"><br>

      <label for="status">Status:</label>
      <input type="text" id="status" name="status"><br>

      <button type="button" onclick="saveItem()">Save</button>
      <button type="button" onclick="closeModal()">Cancel</button>
    </form>
  </div>
</div>-->

<script>
  const modal = document.getElementById('addItemModal');
const addButton = document.getElementById('submitButton12');

addButton.onclick = function() {
  modal.style.display = 'block';
  document.body.classList.add('modal-open');   
}

function closeModal() {
  modal.style.display = 'none';
  document.body.classList.remove('modal-open');  
}

function saveItem() {
  closeModal();
}
  </script>



  </body>
  </html></span>