
<?php include('header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="category1">Category Name</label>
                            <input type="text" name="CategoryName" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="category2">Status</label>
                            <input type="text" placeholder="Active/Inactive" name="status" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">  
                        <div class="col-md-12">
                        <button type="submit" name="add_cat_btn" class="btn btn-primary">Updade</button>
                             <a href="categorydis.php" class="btn btn-primary">Back</a>
                        </div>

                      
                        
                    </div>
                    </form>
                </div>
            </div>
            
             
        </div>
    </div>
</div>

 


<?php include('footer.php'); ?>