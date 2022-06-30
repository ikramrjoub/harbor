<?php 
include('handlers/db.php');
include('handlers/data.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Harbor &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/all.min.css"> 

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<!-- header start-->
    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="work.php" class="nav-link">Work</a></li>
                  <li><a href="what-we-do.php" class="nav-link">What We Do</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="index.php">Harbor</a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="about.html" class="nav-link">About</a></li>
                  
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                  <li><a href="../admin/login.php" class="btn btn-outline-primary px-3 py-2 ml-5  ">Login</a></li>

                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>
<!-- header end-->

<!--Carousel start-->

    <div class="owl-carousel-wrapper">

      

      <div class="box-92819 shadow-lg">
        

          <div>
            <h1 class=" mb-3 text-black"><?= $const_sliders['title']?></h1>
            <p><?= $const_sliders['description']?></p>
            <p class="mb-0 mt-4"><a href="#" class="btn btn-primary"><?= $const_sliders['link']?></a></p>
          </div>

          

        
      </div>



      <div class="owl-carousel owl-1 ">
        <?php foreach($sliders as $slider): ?>
        <div class="ftco-cover-1" style="background-image: url('<?= $slider['img'] ?>');"></div>
        
        <?php endforeach;?>
      </div>
    </div>  
<!--Carousel end-->

<!--Work start-->
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 mb-0">Our Work</h2>
          </div>
          <div class="col-md-5 text-right">
            <p class="mb-0"><a href="#" class="more-39291">View All Works</a></p>
          </div>
        </div>

        <div class="row">
          <?php  foreach($works as $work): ?>
          <div class="col-lg-6">
            <div class="media-02819">
              <a href="#" class="img-link"><img src="<?= $work['img'] ?>" alt="Image" class="img-fluid"></a>
              <h3><a href="#"><?= $work['title'] ?></a></h3>
              <span><?= $work['description'] ?></span>
            </div>
          </div>
          <?php endforeach; ?>
         
           </div>

        </div>
      </div>
    </div>
<!--Work end-->

<!--Whate We do start-->

    <div class="site-section bg-primary">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7">
            <h2 class="heading-39291 text-white mb-3">What We Do</h2>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis velit iure possimus repellendus, esse minus illum nobis deleniti?</p>
          </div>
        </div>
        <div class="row">
          <?php foreach($whatwedo as $value) :?>
          
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-29193 text-center">
              <span class="img-wrap mb-5">
                <img src="<?= $value['img']?>" alt="Image" class="img-fluid">
              </span>
              <h3 class="mb-4"><a href="#"><?= $value['title']?></a></h3>
              <p><?= $value['description']?></p>
            </div>
          </div>
       <?php endforeach; ?>


        
         
          
        </div>
      </div>
    </div>


    <!--Whate We do end-->

    <!--testimonial start-->


    <div class="site-section section-4">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="slide-one-item owl-carousel">
            <?php foreach($testimonials as $testimonial) : ?>
              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p><?= $testimonial['description1'] ?></p>
                <cite><span class="text-black"><?= $testimonial['name'] ?></span> &mdash; <span class="text-muted"><?= $testimonial['description2'] ?></span></cite>
              </blockquote>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<!--testimonial end-->
    
    <!--footer start-->
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p><?= $aboutUs['description'] ?> </p>

              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <?php foreach($features as $feature): ?>
                  <li><a href="#"><?= $feature['name'] ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post" class="footer-suscribe-form">
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0 border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
            </div>


            <h2 class="footer-heading mb-4">Follow Us</h2>
            <?php foreach($contacts as $contact): ?>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="<?= $contact['icon'] ?>"></span></a>
            
            <?php endforeach; ?>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <!--footer end-->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

     

  </body>

</html>
