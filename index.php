<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sports Hub</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>

    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.php">SportsHub</a></h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="signin.html">SignIn</a></li>
                        <li><a href="admin/index.php">ADMIN</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-info">
            <p>Trending of the week</p>
            <h3 class="mb-4">Casual Shoes for Men</h3>
            <div class="ban-buttons">
                <a href="shop.php" class="btn">Shop Now</a>
              
            </div>
        </div>
        <!--// banner-inner -->

    </div>
    <!--//main-content-->
    <!--/ab -->
 
    <!-- //ab -->
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <!-- <h3 class="tittle text-center">New Arrivals</h3> -->
            <div class="row">


                                                        
                                    <?php
                                    include 'config.php';
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                    }

                                    $sql = "SELECT * FROM products";
                                    $result = $conn->query($sql);

                                    if ($result) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                    echo  '

                                    <div class="col-md-4 product-men">
                                    <div class="product-shoe-info shoe text-center">
                                        <div class="men-thumb-item">
                                            <img src="images/' . $row['product_image'] . '" class="img-fluid" alt="">
                                            <span class="product-new-top">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h4>
                                                <a href="shop-single.html">' . $row['product_title'] . ' </a>
                                            </h4>
                
                                            <div class="product_price">
                                                <div class="grid-price">
                                                    <span class="money">$' . $row['product_price'] . '</span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                    ';
                                    }
                                    } else {
                                    echo "0 results";
                                    }
                                    $conn->close();
                                    ?>


               
               
            </div>

        </div>
    </section>
    <!-- //ab -->
    <!--/testimonials-->
    
    <!--//testimonials-->
    <!--/ab -->
   
    <!-- //ab -->
    <!-- brands -->
    <section class="brands py-5" id="brands">
        <div class="container py-lg-0">
            <div class="row text-center brand-items">
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-connectdevelop" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-empire" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-ioxhost" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3">
                    <a href="#"><span class="fa fa-first-order" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-joomla" aria-hidden="true"></span></a>
                </div>
                <div class="col-sm-2 col-3 mt-sm-0 mt-4">
                    <a href="#"><span class="fa fa-dropbox" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- brands -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="index.html">SportsHub</a>
                    </h2>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <h4 class="sub-con-fo ad-info my-4">Catch on Social</h4>
                    <ul class="w3layouts_social_list list-unstyled">
                        <li>
                            <a href="https://www.facebook.com/" class="w3pvt_facebook">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="https://twitter.com/LOGIN" class="w3pvt_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-lg-8 footer-right">
                    <div class="w3layouts-news-letter">
                        <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Newsletter</h3>

                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post" class="w3layouts-newsletter">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn1"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>

                        </form>
                    </div>
                
                    <div class="cpy-right text-left row">
                        <p class="col-md-10">© 2020 SportsHub. All rights reserved | Design by
                            <a href="#"> SportsHub.</a>
                        </p>
                        <!-- move top icon -->
                        <a href="#home" class="move-top text-right col-md-2"><span class="fa fa-long-arrow-up" aria-hidden="true"></span></a>
                        <!-- //move top icon -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</body>

</html>
