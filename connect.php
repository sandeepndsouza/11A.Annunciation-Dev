<?php
include 'config.php';
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$donation = $_POST['donation'];
$amount = $_POST['amount'];

//Database Connection
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = "insert into registration(firstName, lastName, email, mobile, donation, amount)
     VALUES('$firstName','$lastName','$email','$mobile','$donation','$amount')";
    mysqli_query($conn,$stmt);
    $id = $conn->insert_id;
    // echo $stmt;
    //echo "registration successfull! and your id: " .$id;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
          <li><a href="team.php">TEAM</a></li>
        </ul>
    </div>
  </section>
  <section class="banner"></section>
  <!--          main section -->
<section > 
    <div class="container register">
    <div class="row">
        <div class="col-md-6">
            <h3>Details of your registration</h3>
            <hr>
            <table class="table">
                <thead>
                    <tr> 
                    <th scope="col">Header</th>
                    <th scope="col">Details</th>
                    </tr> 
                </thead>
                <tbody>
                    <tr>
                        <td>Full Name</td>
                        <td><?php echo $firstName .' '. $lastName ?></td>
                    </tr>
                    <tr>
                        <td>Donation Id</td>
                        <td><?php echo $id ?></td>
                    </tr>
                    <tr>
                        <td>Donated for</td>
                        <td><?php switch($donation){
                                case "c":
                                  echo  "Community Hall";
                                  break;
                                  case "d":
                                    echo "Mass Intensions";
                                    break;
                                    case "s":
                                      echo  "Yearly Subscription";
                                      break;
                                    } 
                        ?></td>
                    </tr>
                    <tr>
                        <td>Donation Amount</td>
                        <td><?php echo $amount ?></td>
                    </tr>   
                </tbody>
            </table>
            <p style="color:blue";>Online payments are processed by SanAsh Technologies</p>
            <a class="btn btn-primary paynow" href="javascript:void(0)" 
            data-productid="<?php echo $id?>" 
            data-amount="<?php echo $amount;?>" 
            data-donation="<?php echo $donation?>">Pay Now</a>
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
<!-- <button id="rzp-button1">Pay</button> -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
 
$(".paynow").click(function()
{ 
    var amount=$(this).attr('data-amount');	
    var productid=$(this).attr('data-productid');	
    var donation=$(this).attr('data-donation');	
var options = {
    "key": "rzp_test_Z9nXxnN4UcxE2V", // Enter the Key ID generated from the Dashboard
    "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "SanAsh Technologies Pvt Ltd",
    "description": "donation",
    "image": "https://example.com/your_logo",
    // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
		
		$.ajax({
			url:"payment-process.php",
			type:"POST",
			data:{product_id:productid,payment_id:paymentid},
			success:function(finalresponse)
			{
				if(finalresponse=='done')
				{
					window.location.href="http://localhost/annunciation/success.php";
				}
				else 
				{
					alert('Please check console.log to find error');
					console.log(finalresponse);
				}
			}
		})
    },
    // "prefill": {
    //     "name": "Gaurav Kumar",
    //     "email": "gaurav.kumar@example.com",
    //     "contact": "9000090000"
    // },
    // "notes": {
    //     "address": "Razorpay Corporate Office"
    // },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
// rzp1.on('payment.failed', function (response){
//         alert(response.error.code);
//         alert(response.error.description);
//         alert(response.error.source);
//         alert(response.error.step);
//         alert(response.error.reason);
//         alert(response.error.metadata.order_id);
//         alert(response.error.metadata.payment_id);
// });
// document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();


});
</script>
</body>
</html>