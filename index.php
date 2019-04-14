<?php

session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';

$link = mysqli_connect($host, $user, $password, $db);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SUPER TECH</title>
        <link rel="shortcut icon" href="image/logo.png">
        <!-- Link -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="style.css"> </head>

    <body>
        <!-- header-area -->
        <?php include 'nav.php'?>
            <div class="header-bottom">
                <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                $sql = "SELECT img_dir FROM slidertable";
                $result = mysqli_query($link, $sql);
                $count = mysqli_num_rows($result);
                if($count>0)
                    echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>";

                for($i=1; $i<$count; $i = $i+1) {
                    echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
                }
                ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php

                $row = mysqli_fetch_assoc($result);
                echo '<div class="carousel-item active"> <img src="' . ($row['img_dir']) . '" class="d-block w-100" alt="0"> </div>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="carousel-item"> <img src="' . ($row['img_dir']) . '" class="d-block w-100" alt="1"> </div>';
                }
                ?> </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                    </div>
                </div>
            </div>
            <!-- policy-area -->
            <div class="policy-area">
                <div class="container">
                    <div class="policy-tag">
                        <h2>Our Policy</h2></div>
                    <div class="row">
                        <?php
            $sql = "SELECT * FROM policy";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                            <div class="col-md-4">
                                <div class="service">
                                    <div class="policy-icon"><img src="<?php echo $row['image']?>" class="img-fluid" alt="pic"></div>
                                    <div class="policy-text">
                                        <h6><?php echo $row['name']?></h6>
                                        <p>
                                            <?php echo $row['detail']?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <!--hot product-area -->
            <div class="hot-product">
                <div class="container">
                    <div class="section-title">
                        <h2>Our Product</h2> </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="hot-item-top"> <img src="image/laptop3.jpg" class="img-fluid" alt="pic">
                                <div class="hot-overlay">
                                    <button type="button" title="Add to Cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
                                    <button type="button" title="Details"><a href="#"><i class="fas fa-eye"></i></a></button>
                                </div>
                            </div>
                            <div class="hot-item-bottom">
                                <h5>Product Name</h5>
                                <h6>Product Price</h6> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-item-top"> <img src="image/others%203.jpg" class="img-fluid" alt="pic">
                                <div class="hot-overlay">
                                    <button type="button" title="Add to Cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
                                    <button type="button" title="Details"><a href="#"><i class="fas fa-eye"></i></a></button>
                                </div>
                            </div>
                            <div class="hot-item-bottom">
                                <h5>Product Name</h5>
                                <h6>Product Price</h6> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-item-top"> <img src="image/others%205.jpg" class="img-fluid" alt="pic">
                                <div class="hot-overlay">
                                    <button type="button" title="Add to Cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
                                    <button type="button" title="Details"><a href="#"><i class="fas fa-eye"></i></a></button>
                                </div>
                            </div>
                            <div class="hot-item-bottom">
                                <h5>Product Name</h5>
                                <h6>Product Price</h6> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-item-top"> <img src="image/others%206.jpg" class="img-fluid" alt="pic">
                                <div class="hot-overlay">
                                    <button type="button" title="Add to Cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
                                    <button type="button" title="Details"><a href="#"><i class="fas fa-eye"></i></a></button>
                                </div>
                            </div>
                            <div class="hot-item-bottom">
                                <h5>Product Name</h5>
                                <h6>Product Price</h6> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-item-top"> <img src="image/mobile6.jpg" class="img-fluid" alt="pic">
                                <div class="hot-overlay">
                                    <button type="button" title="Add to Cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
                                    <button type="button" title="Details"><a href="#"><i class="fas fa-eye"></i></a></button>
                                </div>
                            </div>
                            <div class="hot-item-bottom">
                                <h5>Product Name</h5>
                                <h6>Product Price</h6> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-item-top"> <img src="image/tv4.jpg" class="img-fluid" alt="pic">
                                <div class="hot-overlay">
                                    <button type="button" title="Add to Cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></button>
                                    <button type="button" title="Details"><a href="#"><i class="fas fa-eye"></i></a></button>
                                </div>
                            </div>
                            <div class="hot-item-bottom">
                                <h5>Product Name</h5>
                                <h6>Product Price</h6> </div>
                        </div>
                    </div>
                    <div class="more-btn">
                        <a href="shop.php">See More>>></a>
                    </div>
                </div>
            </div>
            <!-- slider-area -->
            <section class="slider">
                <div class="container">
                   <div class="section-title">
                        <h2>Hot Product</h2> </div>
                    <div class="owl-carousel owl-theme">
                        <div id="item"> <img src="image/laptop1.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                        <div id="item"> <img src="image/watch1.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                        <div id="item"> <img src="image/laptop6.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                        <div id="item"> <img src="image/headphone1.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                        <div id="item"> <img src="image/mobile4.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                        <div id="item"> <img src="image/tv1.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                        <div id="item"> <img src="image/others%202.jpg" alt="slide" class="img-fluid">
                            <button><a href="#">Add to cart</a></button>&nbsp;&nbsp;&nbsp;
                            <button><a href="#">Details</a></button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- review-area -->
            <div class="review-area">
                <div class="container">
                    <div class="review-title">
                        <h2>Review</h2></div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="review-video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/-VZNaMyMINw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- promo-area -->
            <section class="promo sp-120">
                <div class="promo-overlay">
                    <div class="container">
                        <div class="promo-content wow zoomIn">
                            <h2>Lets get starts now. <span><b>It's easy!</b></span></h2>
                            <p>Hassle free online shoping site in Bangladesh.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer-area -->
            <?php include 'footer.php';?>
                <!-- arrow-top -->
                <div class="arrow-top"><img src="image/icon/top.png" alt=""></div>
                <!-- Link -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
                <script src="js/jquery-3.3.1.min.js"></script>
                <script src="js/isotope.pkgd.min.js"></script>
                <script src="js/owl.carousel.min.js"></script>
                <script src="js/wow.min.js"></script>
                <script src="js/main.js"></script>
                <script>
                    new WOW().init();
                </script>
    </body>

    </html>