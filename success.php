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
  <!--Header-->
  <section>
    <div class="container-fluid text-center header">
      <!-- Content here -->
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
  </section>
  <!--Nav-->
  
  <section class="nav">
    <div class="navbars">
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="event.html">EVENT</a></li>
          <li><a href="gallery.html">GALLERY</a></li>
          <li><a href="donations.html">DONATIONS</a></li>
          <li><a href="register.php">REGISTER</a></li>
          <li><a href="team.html">TEAM</a></li>
        </ul>
    </div>
  </section>
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
        <div class="col">
          <h3>Mass Timings</h3>
          <p>Sunday 7.30AM Englist <br>
             Sunday 9.30AM Kannada
          </p>
        </div>
        <div class="col">
          <h3>Mass Booking</h3>
          <p>Contact: 96634-88122</p>
        </div>
        <div class="col">
          <h3>Contact Information</h3>
          <p>Contact: 96634-88122</p>
        </div>
      </div>
      
    </div>
  </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
