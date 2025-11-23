<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page
    exit();
}
?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- - primary meta tags-->
  
  <title>Daisy Family Salon</title>
  <meta name="title" content="Barber - Barbers & Hair Cutting">
  <meta name="description" content="This is a barber html template made by codewithsadee">

  <!--  favicon-->

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- - custom css link-->
  
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- - google font link-->
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap"
    rel="stylesheet">

  <!--  flaticon-->

  <link rel="stylesheet" href="assets/css/flaticon.min.css">
  
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">
  <style>

@media only screen and (max-width: 768px) {

  iframe {
    width:"220px";
    height:"220px";
    
    border-radius: 3%;
  }
  .footer-list{
    align-items: center;
  }
        
}
</style>

  <script>
    document.getElementById("appointmentForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the form from submitting
      
      // Collect form data
      let formData = new FormData(this);
      
      // Construct email message
      let subject = "New Appointment";
      let body = "Name: " + formData.get("name") + "\n";
      body += "Email: " + formData.get("email") + "\n";
      body += "Appointment Date: " + formData.get("appointmentDate") + "\n";
      body += "Message: " + formData.get("message") + "\n";
      
      // Simulate sending email (replace with actual code to send email)
      sendEmail(subject, body);
      
      // Optional: Display confirmation to user
      alert("Appointment request submitted successfully!");
      
      // Optional: Clear form fields
      this.reset();
    });
    
    function sendEmail(subject, body) {
      // In a real application, this would be an AJAX request to a server-side script
      // For demonstration, we'll just log the email content to console
      console.log("Subject: " + subject);
      console.log("Body:\n" + body);
    }
    </script>
  
</head>

<body id="top" onload="loading()">
  <div id="load"> </div>

  <!-- - #HEADER-->
  
    <header class="header">

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Call Us :-</p>

            <a href="tel:01234567895" class="item-link">+91 7021283591</a>
          </li>

          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Opening Hour :-</p>

            <p class="item-text">Sunday - Monday, 09 am - 10 pm</p>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">

        <a href="#" class="logo">
          Daisy
          <span class="span">Famiy Salon</span>
        </a>

        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href= "index.php" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="index.php#services" class="navbar-link" data-nav-link>Services</a>
            </li>

            <li class="navbar-item">
              <a href="priceing.php" class="navbar-link" data-nav-link>Pricing</a>
            </li>

            <li class="navbar-item">
              <a href="index.php#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>

            <li class="navbar-item">
              <a href="index.php#appointment" class="navbar-link" data-nav-link>Appointment</a>
            </li>

            <li class="navbar-item">
              <a href="FeedbackForm.php" class="navbar-link" data-nav-link> Feedback </a>
            </li>
<!-- 
            <li class="navbar-item">
              <a href="register.php" class="navbar-link" data-nav-link>Register </a>
            </li> -->

            <li class="navbar-item">
  <?php 

    if (isset($_SESSION['user_id'])) { 
      // User is logged in, show Logout button
      echo '<a href="logout.php" class="navbar-link" data-nav-link> Logout </a>';
    } else { 
      // User is not logged in, show Login button
      echo '<a href="login.php" class="navbar-link" data-nav-link> Login </a>';
    } 
  ?>
</li>
        
          </ul>
        </nav>

        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        

          
        </a>

      </div>
    </div>

</header>

