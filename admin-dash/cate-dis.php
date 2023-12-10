


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    
    
        
            <div class="main-skills">
            </div>
            <section class="main-course">
                <h1>Category</h1>
                <div class="course-box">
                    <label for="">Name</label>
                    <input type="text" placeholder="Enter Category Name">
                    <label for="">Description</label>
                    <input type="text" id="description" placeholder="Enter Description">
                    <label for="">Upload Image</label>
                    <input type="file" name="image">
                    <button id="submitButton">Add Category</button>
                    <button id="submitButton" onclick="window.location.href='display_category_page.php'">Display Category</button>
                </div>
            </section>
        
    </div>
     
</body>
</html>
