<?php 
include('../user/handlers/db.php');
include("../user/handlers/data.php");
$sliders = getAll('sliders');

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
        <a class="navbar-brand" href="index.php">harbor</a>
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

    <div class="container-fluid py-5">
        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>All Sliders</h3>
                    <a href="add-sliders.php" class="btn btn-success">
                        Add new
                    </a>
                </div>
                <?php if(isset($_SESSION['Add'])){ ?>
                        <div class="aletr alert-success h-10
                         d-flex justify-content-center align-items-center mb-5">
                            <?= $_SESSION['Add']; ?>
                        </div>
                      <?php 
                        unset($_SESSION['Add']);    
                      }?>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($sliders as $index=>$slider): ?>
                      <tr>
                        <th scope="row"><?= $index +1 ?></th>
                        <td><img src="../user/<?= $slider['img'] ?> " class='w-25'></td>
                        <td><?php if($slider['status']==1){
                          echo "Active";
                        }elseif($slider['status']==0){
                            echo "Not active";
                          }
                        ?></td>
                        <td><?= date("F j Y g:i a", strtotime($slider['created_at']))  ?></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="edit-sliders.php?id=<?= $slider['id'] ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                            </a><br/><br/>
                            <a class="btn btn-sm btn-danger" href="../user/handlers/db.php?action=deleteSliders&id=<?= $slider['id'] ?>">
                            <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>