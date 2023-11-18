<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Header-->
<div class="top-header bg-secondary  bg-gradient  py-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-sm-12">
              <p><i class="fa fa-location-dot"></i> Benson Town, Bengaluru, Karnataka 560046 </p>
            </div>
            <div class="col-lg-6 col-sm-12">
              <h1>Annunciation Church</h1>
            </div>
            <div class="col-lg-3 col-sm-12">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-whatsapp"></i>
            </div>
          </div>
        </div>
      </div>
 
      <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark bg-gradient">
        <div class="container">
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbarsExample03" style="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.html" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
              <a href="event.html" class="nav-link">EVENT</a>
            </li>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">GALLERY</a>
            </li>
            <li class="nav-item">
              <a href="donations.html" class="nav-link">DONATIONS</a>
            </li>
            <li class="nav-item">
              <a href="register.php" class="nav-link active ">REGISTER</a>
            </li>
            <li class="nav-item">
              <a href="team.php" class="nav-link">TEAM</a>
            </li>
          </ul>
        </div>
        </div>

      </nav>
      <section class="banner"></section>
  <!--          main section -->
<section>
  <div class="container register">
    <div class="row">
      <div class="col-md-6">
      <h2>Payment has been successful</h2>
      <div class="alert alert-success">
    <strong>Please note your payment id!</strong><?php echo $_SESSION['paymentid'];?> 
    </div>
      </div>
    </div>
  </div>


</section>


<!--Footer Section-->
<section>
  <div class="container-fluid footer">
    <div class="row">
      <div class="col-lg-3 col-md-12">
        <h4>Mass Timings</h4>
        <p>Sunday 7.15AM English <br>
           Sunday 9.30AM Kannada
        </p>
      </div>
      <div class="col-lg-3 col-md-12">
        <h4>Mass Booking</h4>
        <p>Contact: 98868-69004</p>
      </div>
      <div class="col-lg-3 col-md-12">
        <h4>Site Contact Information</h4>
        <p>Contact: 96634-88122</p>
      </div>
    </div>
    
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
