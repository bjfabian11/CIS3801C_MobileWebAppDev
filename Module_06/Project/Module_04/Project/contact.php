<!DOCTYPE html>
<html>
<title>contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="scripts2.js"></script>
<link href="style2.css" rel="stylesheet">

<body class="w3-black">

  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="car.jpg" style="width:100%">
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="photos.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="index.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="about.php" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="photos.html" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
      <a href="contact.php" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">

    <!-- Contact Section -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
      <h2 class="w3-text-light-grey">Contact Me</h2>
      <hr style="width:200px" class="w3-opacity">

      <div class="w3-section">
        <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Cleveland, Ohio, US</p>
        <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 555-5555</p>
        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: brandonfabian@smail.rasmussen.edu</p>
      </div><br>
      <p>Lets get in touch. Send me a message:</p>

      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-light-grey w3-padding-large" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
      <!-- End Contact Section -->
    </div>

    <!-- Footer -->
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
      <a href="contact.php" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
      <a href="http://www.facebook.com" class="fa fa-facebook-official w3-hover-opacity"></a>
      <a href="http://www.instagram.com" class="fa fa-instagram w3-hover-opacity"></a>
      <a href="http://www.snapchat.com" class="fa fa-snapchat w3-hover-opacity"></a>
      <a href="http://www.pinterest.com" class="fa fa-pinterest-p w3-hover-opacity"></a>
      <a href="http://www.twitter.com" class="fa fa-twitter w3-hover-opacity"></a>
      <a href="http://www.linkedin.com" class="fa fa-linkedin w3-hover-opacity"></a>
      <!-- End footer -->
    </footer>

    <!-- END PAGE CONTENT -->
  </div>

</body>

</html>
