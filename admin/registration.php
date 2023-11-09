<?php
        include("../classes/register.php");
        $re = new Register();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $addUser = $re->AddUser($_POST);
        }
?>

    


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Registration From</title>
  </head>
  <body>
    

    
  <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class='card-header'>Registration From</h5>
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="form-group d-flex">
                                <label class="col-md-4">Name</label>
                                <div class='col-md-8'>
                                <input type="text" name="name" class="from-control">
                                </div>
                        </div>
                            <div class="form-group d-flex">
                                <label class="col-md-4">Phone</label>
                                <div class='col-md-8'>
                                <input type="test" name="phone" class="from-control">
                                </div>
                                </div>
                            <div class="form-group d-flex">
                                <label class="col-md-4">Email address</label>
                                <div class='col-md-8'>
                                <input type="email" name="email" class="from-control">

                                </div>                                        
                                        
                                    </div>
                                        <div class="form-group d-flex">
                                        <label class='col-md-4'>Password</label>
                                           <div class='col-md-8'>
                                           <input type="password" name="password" class="from-control " >
                                           </div>
                                        
                                        
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Sign Up</button>
                                    
                            </form>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>