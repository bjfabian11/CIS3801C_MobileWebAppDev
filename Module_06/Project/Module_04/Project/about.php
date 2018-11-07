<!DOCTYPE html>
<html>
<title>about</title>
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
    <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="photos.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
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
    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
      <h2 class="w3-text-light-grey">Brandon Fabian</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

      <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
      <p class="w3-wide">Photography</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:95%"></div>
      </div>
      <p class="w3-wide">Web Design</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">Photoshop</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:80%"></div>
      </div><br>
      <button class="w3-button w3-light-grey w3-padding-large w3-section">
        <i class="fa fa-download"></i> Download Resume
      </button>
    </p>
    <h2>Influencers</h2>
       <?php
      include 'mod3_config.php';
      include 'mod3_opendb.php';

      $sql= "SELECT fname, lname, title FROM influencers LIMIT 10";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "First Name: " . $row["fname"]. "<br>";
              echo "Last Name: " . $row["lname"]. "<br>";
              echo "Title: " . $row["title"]. "<br><hr>";
          }
      } else {
          echo "0 results";
      }

      mysqli_close($conn);

      ?>
    <!-- Footer -->
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
      <a href="about.php" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
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
