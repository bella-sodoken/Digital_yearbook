<?php
require_once("../../functions/year_book_card.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Yearbooks</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

  <!-- Favicons -->
  <link href=" yearbook_assets/img/favicon.png" rel="icon">
  <link href=" yearbook_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" yearbook_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href=" yearbook_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href=" yearbook_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href=" yearbook_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href=" yearbook_assets/vendor/aos/aos.css" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- STYLE CSS -->
  <link rel="stylesheet" href="css/style.css">
	

  <style>
    .post-entry-1 {
        border: 1px solid rgba(127, 137, 161, 0.25);
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .post-entry-1 iframe {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        border: none;
    }

    .post-entry-1 button {
        padding: 10px 15px;
        margin: 5px;
        border: none;
        border-radius: 5px;
        background-color: #2a2c39
;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .post-entry-1 button:hover {
        background-color: #2a2c39
;
    }

    .post-entry-1 a {
        text-decoration: none;
        color: white;
    }

    .post-entry-1 span {
        display: inline-block;
        margin-left: 10px;
        padding: 5px 10px;
        background-color: #f1f1f1;
        color: #333;
        border-radius: 5px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
    }
</style>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
  
      <div class="logo">
        <h1><a href="yearbooks.php">Digital Yearbok</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
        <li><a href="#hero">Home</a></li>
        <li><a href="index.html" class="nav-link scrollto" href="#about">About</a></li>
        <li><a href="yearbooks.php">Yearbooks</a></li>
        <li><a href="signup.php">SignUp</a></li>
        <li><a href="User_Login.html">Login</a></li>
        <li><a href="Admin_Login.html">Admin</a></li>
      </ul>

      <div class="position-relative">
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
      </div>
      <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

      <!-- ======= Home page ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
    </svg>
  </div>

  </section><!-- End Home Page -->



  <main id="main">


    <!-- ======= Yearbook Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-6">
          <div class="col-lg-10">
            <div class="row g-6">
              <div class="col-lg-5 border-start custom-border">

<!-- <div class="card">
  <img src="https://via.placeholder.com/400x200" alt="Card Image" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Product Name</h5>
    <p class="card-text">Short description of the product.</p>
    
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Buy</button>
      <button type="button" class="btn btn-secondary">View</button>
    </div> -->

    <!-- <div class="mt-3">
      <span class="mr-2">Likes <i class="fas fa-thumbs-up"></i> 0</span>
      <span>Views <i class="fas fa-eye"></i> 0</span>
    </div> -->

    <!-- <div class="mt-3">
      <textarea class="form-control" placeholder="Add a comment"></textarea>
      <button type="button" class="btn btn-info mt-2">Comment</button>
    </div> -->
  <!-- </div>
</div> -->

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>

                <?php   display_all_book_card() ?> 
<!--                 
                <div class="post-entry-1">
                  <div class="col-lg-10 col-md-10 portfolio-item filter-app">
                  <a href="yearbook_assets\structured-preview.pdf">
                    <img src="yearbook_assets\yearbook_image-3.png" alt="" class="img-fluid"></img>
                  </a>
                  <button><a href ="yearbook_assets\structured-preview.pdf" style="color:white"> 2017 </a></button>
                  <button><a href ="payment_template.php" style="color:white"> Buy </a></button>
                </div>
                <div class="post-entry-2">
                  <div class="col-lg-10 col-md-10 portfolio-item filter-app">
                  <a href="yearbook_assets\structured-preview.pdf"><img src="yearbook_assets\yearbook_image-3.png" alt="" class="img-fluid"></img></a>
                  <button><a href ="yearbook_assets\structured-preview.pdf" style="color:white"> 2018 </a></button>
                  <button><a href ="payment_template.php" style="color:white"> Buy </a></button>
                </div>
              </div>
              <div class="col-lg-5 border-start custom-border">
                <div class="post-entry-2">
                 <div class="col-lg-10 col-md-10 portfolio-item filter-app">
                  <a href="yearbook_assets\structured-preview.pdf "><img src="yearbook_assets\yearbook_image-3.png" alt="" class="img-fluid"></img></a>
                  <button><a href ="yearbook_assets\structured-preview.pdf" style="color:white"> 2019 </a></button>
                  <button><a href ="payment_template.php" style="color:white"> Buy </a></button>
                </div>
                <div class="post-entry-2">
                  <a href=" "><img src="yearbook_assets\yearbook_image-3.png" alt="" class="img-fluid"></img></a>
                  <button><a href ="yearbook_assets\structured-preview.pdf" style="color:white"> 2020 </a></button>
                  <button><a href ="payment_template.php" style="color:white"> Buy </a></button>
                </div>-->
                 <!-- <div class="post-entry-2"> 
                  <a href=" "><img src="../../Documents/20231207172227_2023-05-07.png" alt="" class="img-fluid"></img></a>
                  <button><a href ="yearbook_assets\structured-preview.pdf" style="color:white"> 2021 </a></button>
                  <button><a href ="payment_template.php" style="color:white"> Buy </a></button>
              </div> -->
              
            </div>
          </div>
        </div> 
      </div>
    </section> <!-- End Yearbook Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Ashesi Digital Yearbook</h3>
      <p>Where every memory is caught</p>
      <div class="social-links">
        <a href="https://twitter.com/Ashesi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Ashesi/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/ashesi/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/school/ashesiuniversity/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Vendor JS Files -->
  <script src=" yearbook_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src=" yearbook_assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src=" yearbook_assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src=" yearbook_assets/vendor/aos/aos.js"></script>
  <script src=" yearbook_assets/vendor/php-email-form/validate.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

<script>
    function incrementLike(countId) {
        var countElement = document.getElementById(countId);
        var likeCount = parseInt(countElement.innerHTML);
        likeCount++;
        countElement.innerHTML = likeCount;
    }
</script>

  <!-- Template Main JS File -->
  <script src=" yearbook_assets/js/main.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>