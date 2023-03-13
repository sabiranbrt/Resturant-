<?php include 'common/header.php'; ?>
<section class="navbar-about">
  <div class="container-side">
    <div class="primary-header">
      <div class="logo">
        <img src="assets/image/logo.png" alt="">
      </div>
      <input type="checkbox" id="nav-toggle" class="nav-toggle">
      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <div class="flex-items">
        <ul role="list" class="text-uppercase text-nav">
          <li><a href="index.php">home</a></li>
          <li><a href="about.php">about us</a></li>
          <li class="dropdown">
            <a class="dropbtn" href="#">Menu</a>
            <ul role="list" class="dropdown-content">
              <li><a href="food.php">Food</a></li>
              <li><a href="drinks.php">Drinks</a></li>
            </ul>
          </li>
          <li><a href="deals.php">deals</a></li>
          <li>
            <a href="gallery.php">gallery</a>
          </li>
          <li><a href="contact.php">contact</a></li>
        </ul>
        <div class="socio">
          <a href="#"><img src="assets/image/fb.png" alt=""></a>
          <a href="#"><img src="assets/image/twitter.png" alt=""></a>
          <a href="#"><img src="assets/image/ig.png" alt=""></a>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="about-header-img">
  <div class="about-img">
    <div class="about-time">
      <h1>Gallery Showcase</h1>

    </div>
  </div>
</section>
<section class="gallery-food">
  <div class="container">
    <!-- Images used to open the lightbox -->
    <div class="rows">
      <div class="columns">
      <a href="#"><img src="assets/image/orange.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery2.png" onclick="openModal();currentSlide(2)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery3.png" onclick="openModal();currentSlide(3)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery4.png" onclick="openModal();currentSlide(4)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery5.png" onclick="openModal();currentSlide(5)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery6.png" onclick="openModal();currentSlide(6)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery7.png" onclick="openModal();currentSlide(7)" class="hover-shadow"></a>
      </div>
      <div class="columns">
      <a href="#"><img src="assets/image/gallery8.png" onclick="openModal();currentSlide(8)" class="hover-shadow"></a>
      </div>
    </div>

    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="mySlides">

          <img src="assets/image/orange.jpg" style="width:100%">
        </div>

        <div class="mySlides">

          <img src="assets/image/gallery2.png" style="width:100%">
        </div>

        <div class="mySlides">

          <img src="assets/image/gallery3.png" style="width:100%">
        </div>

        <div class="mySlides">

          <img src="assets/image/gallery4.png" style="width:100%">
        </div>
        <div class="mySlides">

          <img src="assets/image/gallery5.png" style="width:100%">
        </div>
        <div class="mySlides">

          <img src="assets/image/gallery6.png" style="width:100%">
        </div>
        <div class="mySlides">

          <img src="assets/image/gallery7.png" style="width:100%">
        </div>
        <div class="mySlides">

          <img src="assets/image/gallery8.png" style="width:100%">
        </div>
        

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>


      </div>
    </div>
  </div>
</section>


<?php include 'common/footer.php'; ?>