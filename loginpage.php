 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="assets/registration.css">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

    <?php
    session_start();
    ?>

    <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

            <?php
            if (isset($_SESSION['message'])) 
            {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       <strong>Hey!</strong> <?=$_SESSION['message']; ?>
                       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['message']);
                
            }

            ?>

 


                <div class="card">
                       <div class="card-header">
                        <h4>Login Form</h4>
                       </div>
                     <div class="card-body">

                      <form action="authcode.php" method="POST">

                          


                           <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Email address</label>
                             <input type="email" name="ContactEmail" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                              
                            </div>


                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" id="exampleInputPassword1">
                             </div>

                             


                                 <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>


                      </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
    </div>
    
</div>
</body>
</html>