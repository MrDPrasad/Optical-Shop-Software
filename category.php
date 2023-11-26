 


<section class="main">
          <section class="main-course">
            <h1>Add Category</h1>

            <div class="course-box">

            <div class="container">
                        <form method="post" action="process_form.php">
                            <label>cat Name</label>
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
                            <input type="submit2" value="Display categories">
                            
                        </form>
                    </div>
            
            </div>

          </section>
</section>

 