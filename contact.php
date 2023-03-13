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

<div class="contact" id="contact">
    <div class="container-side">
        <div class="even-columns">
            <div class="cols-1">
                <div class="forms">
                    <h1>Send us a message</h1>
                    <form action="#">
                        <label for="name">Name</label>
                        <input type="text"  id="name">
                        <label for="Email">Email</label>
                        <input type="email"  id="email">
                        <label for="number">Phone Number</label>
                        <input type="text"  id="phonenumber" maxlength="10">
                        <label for="message">Message</label>
                        <textarea name="" id="" cols="5" rows="5"></textarea>
                    </form>
                    <a href="#">Send Message</a>
                </div>
            </div>
            <div class="col-2">
                <div class="text-head">
                    <h1>Contact Us</h1>
                    <p>We're open for any suggestion or just to have a chat</p>
                </div>
                <div class="address">
                    <div class="logo-address">
                  <a href="#"> <i class="fa-solid fa-location-dot"></i></a> 
                       <a href="#"><p>Balku, Kathmandu, Nepal</p></a> 
                    </div>
                    <div class="logo-address">
                   <a href="#"><i class="fa-solid fa-envelope"></i></a> 
                    <a href="#"><p>info@starsamplefood.com</p></a>  
                    </div>
                    <div class="logo-address">
                   <a href="#"><i class="fa-solid fa-phone"></i></a> 
                    <a href="#"><p>+977- 9867886300</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'common/footer.php'; ?>