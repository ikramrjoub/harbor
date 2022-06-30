<?php 
include("../user/handlers/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techstore | Dashboard</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css">
    <link rel="stylesheet" href="../user/css/all.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">harbor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a class="nav-link" href="index.php">Category</a>
                  </li>
            <li class="nav-item active">
                    <a class="nav-link" href="sliders.php">Sliders</a>
                  </li>
                  <li class="nav-item active">
                  <a class="nav-link" href="const_sliders.php">Const_sliders</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="works.php">Works</a>
                  </li>


                <li class="nav-item active">
                    <a class="nav-link" href="whatWedo.php">Whate We Do</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="testimonials.php">Testimonials</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="features.php">Features</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                  </li>
                
                  <li class="nav-item active">
                    <a class="nav-link" href="message.php">Message</a>
                  </li>
                
            </ul>
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Your name
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="../user/index.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Add Work</h3>
                <div class="card">
                    <div class="card-body p-5">
                        <form action="../user/handlers/db.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea  name= "description" class="form-control"  rows="3"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="customFile">Choose Image</label>
                              <input type="file" name="img" class="form-control"  id="customFile"><br/>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                  <option value="1" >active</option>
                                  <option value="0" >not active</option>
                                  
                                </select>
                            </div>
                            <div class="text-center mt-5">
                                <button name="addwork" type="submit" class="btn btn-primary">Add</button>
                                <a class="btn btn-dark" href="works.php">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>