<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SignnUp Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

                <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
	</head>

	<body>

		<!-- ======= Header ======= -->
		<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
			<div class="container d-flex align-items-center justify-content-between">
		
			  <div class="logo">
				<h1><a href="index.html">Ashesi E-Yearbok</a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			  </div>
		
			  <nav id="navbar" class="navbar">
				<ul>
				  <li><a href="index.html">Home</a></li>
				  <li><a href="index.html" class="nav-link scrollto" href="#about">About</a></li>
				  <li><a href="yearbooks.php">Yearbooks</a></li>
				  <li><a href="signup.php">SignUp</a></li>
				  <li><a href="User_Login.html">Login</a></li>
				  <li><a href="Admin_Login.html">Admin</a></li>
				</ul>
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

  </section><!-- End Hero -->

		<!--<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">-->
			<div class="inner">
				<form action="../../actions/register_new_user.php" method="POST" enctype="multipart/form-data">
					<h3>Sign Up Here</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" name="fname" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" name="lname" class="form-control">
						</div>
					</div>
					<div class="form-group">
					<div class="form-wrapper">
						<label for="">Middle Name</label>
						<input type="text" name="middle_name" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control" name="email">
					</div>
					</div>

					<div class="form-wrapper">
						<label for="">Nationality</label>
						<input type="text" name="nationality" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" id="password" class="form-control" name="password" >
					</div>
					<div class="form-wrapper">
						<label for="">Upload Profile image</label>
					
							<input type="file" id="file" class="form-control" name="user_picture" >
					
						<div class="checkbox">
						<label>
							<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<!-- <button type="submit"><a href=""   style="color:white" >SignUp</a></button> -->
					  <input type="submit" value="Submit">
					<div>
					 <p>Already have an account?<a href="User_Login.html"> Login</a> </p>
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>