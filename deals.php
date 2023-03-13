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
            <h1>Deals</h1>
            <p>Sunday-Friday, 12pm-8pm</p>
        </div>
    </div>
</section>

<!-- <section class="deals">
    <div class="container-side">
        <div class="gallery">
            <div class="gallery-photo-1">
                <div class="cols-1">
                    <img src="../04_resturant_page/assets/image/grill.php" alt="">
                </div>
                <div class="cols-2">
                    <img src="../04_resturant_page/assets/image/order_online.php" alt="">
                    <img src="../04_resturant_page/assets/image/order_online.php" alt="">
                </div>
            </div>

            <div class="gallery-photo-2">
                <div class="cols-1">
                    <div class="rows-1">
                        <div class="rows-1-1">
                            <img src="../04_resturant_page/assets/image/fried.php" alt="">
                        </div>
                        <div class="rows-1-1">
                        <img src="../04_resturant_page/assets/image/ice-coffee.php" alt="">
                        </div>
                    </div>
                    <div class="rows-2">
                        <img src="../04_resturant_page/assets/image/order_online.php" alt="">
                    </div>
                </div>
                <div class="cols-2">
                <img src="../04_resturant_page/assets/image/grill.php" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="deals">
    <div class="container">
        <div class="slider">
            <div class="slide">
                <div class="child-element">
                    <img src="assets/image/photo-1.jpg" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="child-element">
                    <img src="assets/image/photo-2.jpg" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="child-element">
                    <img src="assets/image/orange.jpg" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="child-element">
                    <img src="assets/image/photo-1.jpg" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="child-element">
                    <img src="assets/image/photo-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<?php include 'common/footer.php'; ?>