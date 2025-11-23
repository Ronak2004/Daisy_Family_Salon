<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Daisy Family Salon</title>
  <meta name="title" content="Barber - Barbers & Hair Cutting">
  <meta name="description" content="This is a barber html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap"
    rel="stylesheet">

  <!-- 
    - flaticon
  -->
  <link rel="stylesheet" href="assets/css/flaticon.min.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner3.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px; /* increased width */
  margin: 8% auto; /* center the card */
  text-align: center;
  font-family: arial;
  background-color: rgb(201, 153, 89);
  border-style: solid;
  border-color: black;
}

.title {
color: grey;
font-size: 18px;
}

button {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
font-size: 18px;
}

a {
text-decoration: none;
font-size: 22px;
color: black;
}

button:hover, a:hover {
opacity: 0.7;
}
.card{

  margin-top: 6%;
  margin-bottom: 1%;
}
.header-bottom{
  background-color: #000;
}

.social-icons a {
  margin: 0 10px;
  display: inline-block;
}
</style>

</head>

<body id="top" >

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
              <a href="contact.php" class="navbar-link" data-nav-link>Contact Us</a>
            </li>

            <li class="navbar-item">
              <a href="register.php" class="navbar-link" data-nav-link>Register </a>
            </li>

            <li class="navbar-item">
              <a href="index.php" class="navbar-link" data-nav-link> Login </a>
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



<div class="footer has-bg-image" style="background-color:white;">
<br><br><br>
  <div class="card">
    <img src="assets/images/profile.jpg" alt="John" style="width:100%">

    <div style="margin: 24px 0;" class="social-icons">
      <a href="#"><i class="fa fa-dribbble"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 
    </div>
    <p><button onclick="window.location.href='tel:+91 7021283591'">Call Now</button></p>
  </div>
</div>




  <!-- - #FOOTER-->
  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            Daisy
            <span class="span">Family Salon</span>
          </a>

          <form action="" class="input-wrapper">

            <input type="email" name="email_address" placeholder="Enter Your Email" required class="email-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe Now</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>

          </form>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Quick Links</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Services</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Meet Our Team</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Our Portfolio</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Need A Career?</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">News & Blog</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Cutting</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Shaving & Design</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Hair Colors</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Beauty & Spa</a>
            </li>

            <li>
              <a href="#" class="footer-link has-before">Body Massages</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title" style="text-align: center;"> 📍LOCATION 📍</p>
            </li>
          <li>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.045922194277!2d72.8536591!3d19.236830299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0d8c31e88d7%3A0x79726093fd7b4025!2sDaisy%20Family%20Salon!5e0!3m2!1sen!2sin!4v1719991051781!5m2!1sen!2sin" width="350" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </li>
            </ul>
          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li class="footer-list-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="contact-link">
                Bldg.no.6, Shop no.18, Near, Vijaya Bank Rd, Prem Nagar,
                Borivali West, Mumbai, Maharashtra 400092
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+0123456789" class="contact-link">+91 7021283591</a>
            </li>

            <li class="footer-list-item">
              <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

              <span class="contact-link">Sunday - Monday, 09 am - 10 pm</span>
            </li>

            <li class="footer-list-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:support@gmail.com" class="contact-link">daisyfamilysalon27@gmail.com</a>
            </li>

          </ul>

        </div>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link"></a>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>
<!-- - #BACK TO TOP -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>

<!-- - custom js link -->
  <script src="./assets/js/script.js" defer></script>

  <!-- - ionicon link -->
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>