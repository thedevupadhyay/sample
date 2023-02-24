<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = $_POST['email'];
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "kf";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `info` (`email`,`dt`) VALUES ('$email', current_timestamp())";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>





<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="styles/bootstrap.min.css" />
<link rel="stylesheet" href="styles/styles.css?ver=1.3" />
<link rel="stylesheet" href="styles/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/owl.carousel.css">
<link rel="stylesheet" href="styles/jquery.fancybox.css" /></head>
<body>
<nav class="navbar navbar-expand-lg navbar-light p-0">
<div class="container">
<a class="navbar-brand d-sm-flex align-items-end" href="cs.php" target="_blank"><img src="images/Karnavati_University_logo.png" width="160" /><br class="d-sm-none d-block" /><span class="logo-text">United World of<br class="d-none d-sm-block" />Computational Intelligence</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto topnav">
<li class="nav-item active">
<a class="nav-link" href="sapl_copy.php">Home</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="cs.php" id="navbardrop" data-toggle="dropdown">
DropDown_1
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="cs.php" target="_blank">Option 1</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 2</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 3</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 4</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="cs.php" id="navbardrop" data-toggle="dropdown">
    DropDown_2
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="cs.php" target="_blank">Option 1</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 2</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 3</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 4</a>

</div>
</li>
<li class="nav-item">
<a class="nav-link" href="cs.php" target="_blank">Option_1</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="cs.php" id="navbardrop" data-toggle="dropdown">
    DropDown_3
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="cs.php" target="_blank">Option 1</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="cs.php" id="navbardrop" data-toggle="dropdown">
    DropDown_4
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="cs.php" target="_blank">Option 1</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 2</a>

</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="cs.php" id="navbardrop" data-toggle="dropdown">
    DropDown_4
</a>
<div class="dropdown-menu">
 <a class="dropdown-item" href="cs.php" target="_blank">Option 1</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 2</a>
<a class="dropdown-item" href="cs.php" target="_blank">Option 3</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="cs.php" target="_blank">Option2</a>
</li>
</ul>
</div>
</div>
</nav> <section class="position-relative">
<div id="demo" class="carousel slide" data-ride="carousel">

<div class="carousel-inner text-capitalize">
<div class="carousel-item active">
<img src="images/banner/slider13.png" alt="" class="w-100">
<div class="banner-content d-flex align-items-center justify-content-center text-center position-absolute h-100 w-100">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-white mb-4">Together is better<br /><span class="font-weight-bold px-2 d-inline-block mt-3">Quote Please</span></h1>

</div>
</div>
</div>
</div>
</div>
<div class="carousel-item">
<img src="images/banner/slider15.png" alt="" class="w-100">
<div class="banner-content d-flex align-items-center justify-content-center text-center position-absolute h-100 w-100">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-white mb-4">Exchange the world<br /><span class="font-weight-bold px-2 d-inline-block mt-3">Exchange Portal</span></h1>

</div>
</div>
</div>
</div>
</div>
<div class="carousel-item">
<img src="images/banner/slider16.jpg" alt="" class="w-100">
<div class="banner-content d-flex align-items-center justify-content-center text-center position-absolute h-100 w-100">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-white mb-4">Partner With<br /><span class="font-weight-bold px-2 d-inline-block mt-3">KIIF</span></h1>

</div>
</div>
</div>
</div>
</div>
</div>

<a class="carousel-control-prev" href="#demo" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>
<div class="social-icon d-none d-sm-flex">
<ul>
<li><a href="https://www.facebook.com/Karnavati.Uni/" target="_blank"><img src="images/Facbook.svg" /></a></li>

<li><a href="https://www.instagram.com/karnavati.uni/" target="_blank"><img src="images/Insta.svg" /></a>
</li>
</ul>
</div>

</section>
<section class="banner-footer-box-section">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="banner-footer-box text-center card mb-3 mb-md-0">
<a href="#page1" target="_blank">
<div class="card-body py-4">

<p class="mb-0 mt-0 font-weight-bold">PAGE 1</p>

</div>
</a>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="banner-footer-box text-center card mb-3 mb-md-0">
<a href="#page2" target="_blank">
<div class="card-body py-4">

<p class="mb-0 mt-0 font-weight-bold">PAGE 2</p>

</div>
</a>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="banner-footer-box text-center card mb-3 mb-md-0">
<a href="#page4" target="_blank">
<div class="card-body py-4">

<p class="mb-0 mt-0 font-weight-bold">PAGE 3</p>

</div>
</a>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="banner-footer-box text-center card mb-3 mb-md-0">
<a href="#page5" target="_blank">
<div class="card-body py-4">

<p class="mb-0 mt-0 font-weight-bold">PAGE 4</p>

</div>
</a>
</div>
</div>
</div>
</div>
</section>
<section class="pt-3 pb-md-5 my-md-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="IADS-INDIA">
<img src="images/front1.jpg" alt="" class="img-fluid w-100">
</div>
</div>
<div class="col-md-6 pl-sm-5">
<h3 class="title-1 pt-sm-5 pt-md-0 mb-4 mt-5 mt-md-0 font-weight-bold">Karnavati University - Unitedworld School of Computational Intelligence</h3>
<p>Data Science is the core part and heart of Data Analytics, Artificial Intelligence and Machine Learning, Robotics Design and Automation, Blockchain.  These emerging technology buzzwords has started transforming and reshaping the world digital business.  The demand for Data Scientists, Data Analysts, AI and ML Engineer, Robotics Engineer and Blockchain Developers, etc. is consistently growing from 5% in 2017 to 40% in 2025, across all sectors.</p>
<a href="cs.php" target="_blank" class="btn btn-outline-primary btn-style-1 px-4 py-1">Read More</a>
</div>
<div class="clearfix"></div>
</div>
</div>
</section>
<section class="py-sm-5">
<div class="container">
<div class="row">
<div class="col-12">
<div class="text-center">
<h3 class="title-2 mb-4 mt-md-0 text-center">Join Us <span class="font-weight-bold">Now</span></h3>
 </div>
</div>
<div class="row mt-sm-4 w-100 m-0">
<div class="col-md-4 col-sm-4 d-flex">
<div class="box-membership mb-md-5 mb-3 mx-auto">
<div class="overflow-hidden position-relative">
<img src="images/membership/part1.png" class="img-fluid">
<ul class="social px-4 mb-0 py-2 text-center d-flex align-items-center justify-content-center">
<li><a href="#" class="text-white"><i class="fa fa-industry"></i></a></li>
</ul>
</div>
<div class="box-content py-4 text-center">
<h5>Option 1</h5>
<ul class="list-inline d-flex justify-content-center mb-0 my-3">
<li class="list-inline-item">
<a href="cs.php" target="_blank" class="btn btn-outline-primary btn-style-1 py-0">Join <span class="font-weight-bold">Now</span></a>
</li>

</ul>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 d-flex">
<div class="box-membership mb-md-5 mb-3 mx-auto">
<div class="overflow-hidden position-relative">
<img src="images/membership/part22.png" class="img-fluid">
<ul class="social px-4 mb-0 py-2 text-center d-flex align-items-center justify-content-center">
<li><a href="cs.php" target="_blank" class="text-white"><i class="fa fa-industry"></i></a></li>
</ul>
</div>
<div class="box-content py-4 text-center">
<h5>Option 2</h5>
<ul class="list-inline d-flex justify-content-center mb-0 my-3">
<li class="list-inline-item">
<a href="cs.php" target="_blank" class="btn btn-outline-primary btn-style-1 py-0">Join <span class="font-weight-bold">Now</span></a>
</li>

</ul>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 d-flex">
<div class="box-membership mb-md-5 mb-3 mx-auto">
<div class="overflow-hidden position-relative">
<img src="images/membership/part3.jpg" class="img-fluid">
<ul class="social px-4 mb-0 py-2 text-center d-flex align-items-center justify-content-center">
<li><a href="cs.php" target="_blank" class="text-white"><i class="fa fa-industry"></i></a></li>
</ul>
</div>
<div class="box-content py-4 text-center">
<h5>Option 3</h5>
<ul class="list-inline d-flex justify-content-center mb-0 my-3">
<li class="list-inline-item">
<a href="#" class="btn btn-outline-primary btn-style-1 py-0">Join <span class="font-weight-bold">Now</span></a>
</li>

</ul>
 </div>
</div>
</div>
</div>

</div>
</div>
</section>
<section class="president-msg pt-5 text-white">
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="title-1 mb-sm-5 mb-4">Dean <span class="font-weight-bold">Message</span></h3>
</div>
</div>
<div class="row">
<div class="col-md-4 pr-md-5 pt-5 pt-md-0 mt-5 mt-md-0">
<img src="images/icon-quotes-single.png" alt="" class="w-100 d-none d-md-block">
<div class="president-img position-absolute">
<img src="images/testimonial/dean.jpg" alt="" width="110" class="mr-3">
</div>
</div>
<div class="col-md-7 pl-sm-5 pt-sm-5 pt-2">
<article class="mt-sm-3">
<p>Ph.D. in Computer Science and Engineering
    <br>
    M.E. Computer Science and Engineering
    <br>
    Dr Raju Shanmugam is a Post-Graduate in Mathematics, Post-Graduate in Computer Applications from University of Madras and Post-Graduate in Computer Science and Engineering with PhD in Faculty of Information and Communication Engineering (I & CE) with Specialization in Computer Engineering from College of Engineering Guindy from Anna University Chennai. He has cleared UGC NET for Lectureship in June 2012. He has more than 25 years of Experience in Teaching, Research and Academic Administration as Professor, Dean, Director and Controller of Examinations. He had worked with reputed institutions in India and abroad. He has published quality research papers and patents in the National and International journals and Conferences indexed in Scopus/ESCI/SCI etc,. and was instrumental in signing various MoUs between University and private and Government organizations. His research interests includes Software Reliability Engineering (SRE) – Software Quality Assurance (SQA), Software Testing and AI, Machine Learning, Data Science and Analytics.</p>
<hr class="w-75 float-left" />
<div class="clearfix"></div>
<h6>Dr. Raju Shanmugam</h6>
<p>Dean</p>
</article>
</div>
</div>
</div>
</section>

<section class="py-4 py-md-5 mb-sm-5 partner">
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="title-1 mb-sm-5 mb-4 font-weight-bold">Academic Collaborations</h3>
</div>
</div>
<div class="row">
<div class="col-12">

<div class="item">
<img src="images/client/client1.png" alt="" class="img-fluid" />
</div>


</div>
</div>
</div>
</div>
</div>
</section>
<footer class="main-footer py-5">
<div class="container">
<div class="row">
<div class="col-12">
<img src="images/logo-light.png" alt="" class="mb-sm-4 pb-3">
</div>
</div>
<div class="row">
<div class="col-sm-3 col-md-3">
<ul class="list-unstyled mb-0">
<li class="mb-4">
<span class="font-weight-bold">Have A Questions? Call Us</span><br />
+91 7574811135 <br />+91 8980004436
</li>

<li>
<span class="font-weight-bold">We Are Working Between</span><br />09.00am To 4.00pm
</li>
</ul>
</div>
<div class="col-sm-3 col-md-3">
<p class="font-weight-bold">Quick Connect</p>
<ul class="list-unstyled">
<li class="mb-2"><a href="cs.php" target="_blank">Example 1 -> Home</a></li>
<li class="mb-2"><a href="cs.php" target="_blank">Example 2 -> Association</a></li>
<li class="mb-2"><a href="cs.php" target="_blank">Example 3 -> Constitution</a></li>
<li class="mb-2"><a href="cs.php" target="_blank">Example 4 -> Membership Form</a></li>
<li class="mb-2"><a href="cs.php" target="_blank">Example 5 -> Exchange Portal</a></li>
<li class="mb-2"><a href="cs.php" target="_blank">Example 6 -> Contact Us</a></li>
</ul>
</div>
<div class="col-sm-6 col-md-4 subscribe-us">
<p class="font-weight-bold">Send Us your profile</p>
<!--<p>Sign up today for hints, tips and the latest product news - plus exclusive special offers.</p> -->
<form action="/sample/sapl_copy.php" method="post">
<div class="input-group mb-3">
<input type="email" class="form-control" name='email' placeholder="Enter Mail Id">
<div class="input-group-append">
<button class="btn btn-success" type="submit"><img src="images/sent.svg" /></button>
</form>
</div>
</div>

<p>We don’t do spam and Your mail id is very confidential.</p>
</div>
<div class="clearfix"></div>
</div>
</div>
</footer>
<script src="scripts/jquery.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>


</script>
</html>