<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SriTravels</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="booking.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="index.php" class="logo"><span>SRI</span>Travel</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="booking_page.php">booking</a>
        <a href="index.php">Destinations</a>
        <a href="index.php">services</a>
        <a href="index.php">gallery</a>
        <a href="index.php">review</a>
        <a href="index.php">contact</a>
    </nav>

    <div class="icons">
    <a href="login.php"><i class="fas fa-user" id="login-btn"></i></a>
    </div>

</header>

<!-- header section ends -->

<!-- booking section  -->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="booking.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Booking Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="R P H S Silva" required>

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="silva@example.com" required>

            <label for="pno"><i class="fa fa-address-card-o"></i>Phone No</label>
            <input type="text" id="pno" name="pno" placeholder="+94 xx xxx xxxx" required>

            <label for="quantity"><i class="fa fa-users"></i>Number of peoples</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10" placeholder="1" required>

            <label for="chkin"><i class="fa fa-check-square-o"></i>Check In</label>
            <input type="date" id="chkin" name="chkin" required>

            <label for="chkout"><i class="fa fa-check-square"></i>Check Out</label>
            <input type="date" id="chkout" name="chkout" required>

            <label for="destination"><i class="fa fa-plane"></i>Destination</label>
            <select name="destination" id="destination" required>
                    <option value="Sigiriya and Polonnaruwa">Sigiriya and Polonnaruwa</option>
                    <option value="The Dambulla Cave Temple">The Dambulla Cave Temple</option>
                    <option value="Yala National Park">Yala National Park</option>
                    <option value="Arugam Bay">Arugam Bay</option>
                    <option value="Galle">Galle</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Temple Of Tooth At Kandy">Temple Of Tooth At Kandy</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Polonnaruwa Sacred City">Polonnaruwa Sacred City</option>
            </select>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="R P H S Silva" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">
            <div class="row">
              <div class="col-25">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2023" required>
              </div>
              <div class="col-25">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
              </div>
              <div class="col-25">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="333" required>
              </div>
              <div class="col-25">
                <label for="branch">branch</label>
                <input type="text" id="branch" name="branch" placeholder="Colombo" required>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Continue to checkout" class="btn" name="submit">
      </form>
    </div>
  </div>
</div>

<!-- booking section  -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>We are the leading travel provider in Sri lanka with the great experiance and Qualy sevice always to the coustomes becouse coustermer is the number one in our agency always</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">home</a>
            <a href="booking_page.php">book</a>
            <a href="index.php">packages</a>
            <a href="index.php">services</a>
            <a href="index.php">gallery</a>
            <a href="index.php">review</a>
            <a href="index.php">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="http://www.facebook.com">facebook</a>
            <a href="https://www.instagram.com">instagram</a>
            <a href="https://twitter.com/?lang=en">twitter</a>
            <a href="http://www.linkedin.com">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> IT2020013 </span> | all rights reserved! </h1>

</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>