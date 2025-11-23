<?php 
include "header.php";
?>

<style>

.filter-btn{
  color:white;
}

</style>


<main>
  <section class="section pricing has-bg-image has-before" id="pricing" aria-label="pricing"
        style="background-image: url('./assets/images/pricing-bg.jpg')">
        <div class="container">
          <br>

          <h2 class="h2 section-title text-center">Daisy Family Salon - Pricing Plans</h2>

          <p class="text-center">Discover our wide range of services tailored for your needs.</p>

          <br><br>

          <!-- Sidebar for Filters -->
          <div class="sidebar">
            <h3 class="h3">Filter by Category</h3>
            <ul class="filter-list">
              <li><button class="filter-btn" data-filter="all">All</button></li>
              <li><button class="filter-btn" data-filter="hair-services">Hair Services</button></li>
              <li><button class="filter-btn" data-filter="beard-facial">Beard & Facial Services</button></li>
              <li><button class="filter-btn" data-filter="relaxation">Relaxation Services</button></li>
            </ul>
          </div>

          <!-- Pricing Content -->
          <div class="pricing-content">

            <!-- Hair Services -->
            <div class="pricing-category" data-category="hair-services">
              <h3 class="h3 category-title" style="color: white;">Hair Services</h3>
              <ul class="grid-list">
                <li>
                  <div class="pricing-card" style="background-color: white;">
                    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                      <img src="./assets/images/pricing-1.jpg" width="90" height="90" alt="Hair Color"
                        class="img-cover">
                    </figure>
                    <div class="wrapper">
                      <h3 class="h3 card-title">Hair Color</h3>
                      <p class="card-text">Clean & simple 30-40 minutes</p>
                    </div>
                    <data class="card-price" value="200">₹200</data>
                  </div>
                </li>
                <li>
                  <div class="pricing-card" style="background-color: white;">
                    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                      <img src="./assets/images/pricing-4.jpg" width="90" height="90" alt="Hair Straightening"
                        class="img-cover">
                    </figure>
                    <div class="wrapper">
                      <h3 class="h3 card-title">Hair Straightening</h3>
                      <p class="card-text">Sleek & smooth finish</p>
                    </div>
                    <data class="card-price" value="300">₹300</data>
                  </div>
                </li>
                <li>
                  <div class="pricing-card" style="background-color: white;">
                    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                      <img src="./assets/images/pricing-5.jpg" width="90" height="90" alt="Hair Cut"
                        class="img-cover">
                    </figure>
                    <div class="wrapper">
                      <h3 class="h3 card-title">Hair Cut</h3>
                      <p class="card-text">Precision styling</p>
                    </div>
                    <data class="card-price" value="150">₹150</data>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Beard & Facial Services -->
            <div class="pricing-category" data-category="beard-facial">
              <h3 class="h3 category-title" style="color: white;">Beard & Facial Services</h3>
              <ul class="grid-list">
                <li>
                  <div class="pricing-card" style="background-color: white;">
                    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                      <img src="./assets/images/pricing-2.jpg" width="90" height="90" alt="Shaving"
                        class="img-cover">
                    </figure>
                    <div class="wrapper">
                      <h3 class="h3 card-title">Shaving</h3>
                      <p class="card-text">Clean & sharp look</p>
                    </div>
                    <data class="card-price" value="300">₹300</data>
                  </div>
                </li>
                <li>
                  <div class="pricing-card" style="background-color: white;">
                    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                      <img src="./assets/images/pricing-3.jpg" width="90" height="90" alt="Beard Facial"
                        class="img-cover">
                    </figure>
                    <div class="wrapper">
                      <h3 class="h3 card-title">Beard Facial</h3>
                      <p class="card-text">Rejuvenate & refresh</p>
                    </div>
                    <data class="card-price" value="600">₹600</data>
                  </div>
                </li>
                
                <li>
                  <div class="pricing-card" style="background-color: white;">
                    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
                      <img src="./assets/images/pricing-8.jpg" width="90" height="90" alt="Facial Cleanup"
                        class="img-cover">
                    </figure>
                    <div class="wrapper">
                      <h3 class="h3 card-title">Facial Cleanup</h3>
                      <p class="card-text">Deep cleansing therapy</p>
                    </div>
                    <data class="card-price" value="700">₹700</data>
                  </div>
                </li>
              </ul>
            </div>

 
            <!-- Relaxation Services -->
            <div class="pricing-category" data-category="relaxation">
              <h3 class="h3 category-title" style="color: white;">Relaxation Services</h3>
              <ul class="grid-list">
              <li>
  <div class="pricing-card" style="background-color: white;">
    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
      <img src="./assets/images/pricing-7.jpg" width="90" height="90" alt="Head Massage" class="img-cover">
    </figure>
    <div class="wrapper">
      <h3 class="h3 card-title" style="color: black;">Head Massage</h3>
      <p class="card-text">Relax & rejuvenate your mind</p>
    </div>
    <data class="card-price" value="150">₹150</data>
  </div>
</li>
<li>
  <div class="pricing-card" style="background-color: white;">
    <figure class="card-banner img-holder" style="--width: 90; --height: 90;">
      <img src="./assets/images/pricing-6.jpg" width="90" height="90" alt="Body Massage" class="img-cover">
    </figure>
    <div class="wrapper">
      <h3 class="h3 card-title" style="color: black;">Body Massage</h3>
      <p class="card-text">Full body relaxation therapy</p>
    </div>
    <data class="card-price" value="600">₹600</data>
  </div>
</li>
<li>
                <!-- Add 3 more cards for Relaxation Services -->
              </ul>
            </div>

          </div>
        </div>
      </section>
</main>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const categories = document.querySelectorAll('.pricing-category');

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const filter = button.getAttribute('data-filter');
        
        categories.forEach(category => {
          if (filter === 'all' || category.getAttribute('data-category') === filter) {
            category.style.display = 'block';
          } else {
            category.style.display = 'none';
          }
        });
      });
    });
  });
</script>

<?php  
include "footer.php"; 
?>
