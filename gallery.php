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
                    <li><a href="gallery.php">gallery</a></li>
                    <li><a href="contact.php">contact</a></li>
                </ul>
                <div class="socio">
                    <a href="gallery-food.php"><img src="assets/image/fb.png" alt=""></a>
                    <a href="gallery-food.php"><img src="assets/image/twitter.png" alt=""></a>
                    <a href="gallery-food.php"><img src="assets/image/ig.png" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="about-header-img">
    <div class="about-img">
        <div class="about-time">
            <h1>Gallery</h1>

        </div>
    </div>
</section>

<!-- <section class="top" id="gallery">
    <div class="photo-gallery">
        <div class="container-side">
            <div class="text-head">
                <h2 class="text-seconday-heading">Our Gallery</h2>
                <p class="text-gallery-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi donec augue tincidunt hac rutrum dolor tellus diam. Porttitor aliquet pellentesque euismod tristique est. Et feugiat eleifend leo ul role="list"tricies egestas magna magna aliquam congue. Commodo dui nam suscipit viverra mauris accumsan, sit et, vitae..</p>
            </div>
        </div>

        <div class="container-side">
            <div class="grid">
                <div class="grid-rows">
                    <div class="grid-cols">
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery1.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery5.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid-cols">
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery2.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery6.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid-cols">
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery3.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery7.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid-cols">
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery4.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                        <div class="wrapper">
                            <img class="image" src="assets/image/gallery8.png" alt="">
                            <div class="overlay">
                                <p>Food</p>
                                <a href="gallery-food.php">More</a>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</section> -->

<section class="gall">
    <div class="container">
        <!-- <div class="rows">
            <div class="rows-1">
                <div class="cols-1">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>

                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <p>Food section</p>
                        </a>
                    </div>
                </div>
                <div class="cols-2">
                    <div class="wrapper">
                        <div class="items">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery2.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery3.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery4.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery5.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery6.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery7.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery7.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="rows-1">
                <div class="cols-1">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>

                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <p>Food section</p>
                        </a>
                    </div>
                </div>
                <div class="cols-2">
                    <div class="wrapper">
                        <div class="items">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery2.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery3.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery4.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery5.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery6.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery7.png" alt="">
                        </div>
                        <div class="items">
                            <img src="assets/image/gallery7.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="img-bundle">
            <div class="wrap">
                <div class="image-wrap">
                    <div class="img-1">
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <a href="#">
                            <img class="overlay" src="assets/image/gallery1.png" alt="">
                            <div class="num">
                                <a href="gallery-food.php">
                                    <p>+9</p>
                                </a>
                            </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>
                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <span>Food section</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="image-wrap">
                    <div class="img-1">
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <a href="#">
                            <img class="overlay" src="assets/image/gallery1.png" alt="">
                            <div class="num">
                                <a href="gallery-food.php">
                                    <p>+9</p>
                                </a>
                            </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>
                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <span>Food section</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="image-wrap">
                    <div class="img-1">
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <a href="#">
                            <img class="overlay" src="assets/image/gallery1.png" alt="">
                            <div class="num">
                                <a href="gallery-food.php">
                                    <p>+9</p>
                                </a>
                            </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>
                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <span>Food section</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="image-wrap">
                    <div class="img-1">
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <a href="#">
                            <img class="overlay" src="assets/image/gallery1.png" alt="">
                            <div class="num">
                                <a href="gallery-food.php">
                                    <p>+9</p>
                                </a>
                            </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>
                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <span>Food section</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="image-wrap">
                    <div class="img-1">
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <img src="assets/image/gallery1.png" alt="">
                        </div>
                        <div class="img">
                            <a href="#">
                            <img class="overlay" src="assets/image/gallery1.png" alt="">
                            <div class="num">
                                <a href="gallery-food.php">
                                    <p>+9</p>
                                </a>
                            </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="text">
                    <div class="date">
                        <a href="gallery-food.php"> <span>04</span></a>
                    </div>
                    <div class="month">
                        <a href="gallery-food.php">
                            <p>Jan, 2022</p>
                            <span>Food section</span>
                        </a>
                    </div>
                </div>
            </div>
          

        </div>
    </div>
</section>

<?php include 'common/footer.php'; ?>