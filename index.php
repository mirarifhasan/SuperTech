<?php

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
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo animation wow zoomIn"> <img src="image/logo.png" class="img-fluid" alt=""> </div>
                    </div>
                    <div class="col-md-8">
                        <div class="menu-area">
                            <div class="menu">
                                <ul class="nav justify-content-end">
                                    <li><a href="index.php"><b>Home</b></a></li>
                                    <li><a href="about_us.php"><b>About Us</b></a></li>
                                    <li><a href="product.php"><b>Product</b></a></li>
                                    <li><a href="#"><b>My Profile</b></a></li>
                                    <li><a href="contact.php"><b>Contact</b></a></li>
                                    <li><a href="sign_up.php"><button><b>Sign Up</b></button></a></li>
                                    <li><a href="log_in.php"><button><b>Login</b></button></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img src="image/slider1.jpeg" class="d-block w-100" alt="0"> </div>
                        <div class="carousel-item"> <img src="image/slider2.jpeg" class="d-block w-100" alt="1"> </div>
                        <div class="carousel-item"> <img src="image/slider4.jpeg" class="d-block w-100" alt="2"> </div>
                        <div class="carousel-item"> <img src="image/slider5.jpeg" class="d-block w-100" alt="3"> </div>
                        <div class="carousel-item"> <img src="image/slider6.jpeg" class="d-block w-100" alt="4"> </div>
                        <div class="carousel-item"> <img src="image/slider7.jpg" class="d-block w-100" alt="5"> </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
    </header>
    <div class="policy-area">
        <div class="container">
            <div class="policy-tag">
                <h2>Our Policy</h2> </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service">
                        <div class="policy-icon"> <img src="image/shipped.png" class="img-fluid" alt="pic"> </div>
                        <div class="policy-text">
                            <h6>Free Shipping</h6>
                            <p>Free shipping on all us order</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <div class="policy-icon"> <img src="image/support.png" class="img-fluid" alt="pic"> </div>
                        <div class="policy-text">
                            <h6>Support 24/7</h6>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <div class="policy-icon"> <img src="image/transfer.png" class="img-fluid" alt="pic"> </div>
                        <div class="policy-text">
                            <h6>100% Money Back</h6>
                            <p>You have 30 days to return</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <div class="policy-icon"> <img src="image/return.png" class="img-fluid" alt="pic"> </div>
                        <div class="policy-text">
                            <h6>90 Days Return</h6>
                            <p>If goods have problems</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service">
                        <div class="policy-icon"> <img src="image/credit-card.png" class="img-fluid" alt="pic"> </div>
                        <div class="policy-text">
                            <h6>Payment Secure</h6>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-area -->
    <section class="product-area">
      <div class="container">
            <h2>Our Product</h2>
        <div class="button-group filter-button-group">
            <button data-filter="*" class="active">All</button>
            <button data-filter=".laptop">Laptop</button>
            <button data-filter=".androidmobile">Android Mobile</button>
            <button data-filter=".watch">Watch</button>
            <button data-filter=".smarttelevision">Smart Television</button>
            <button data-filter=".headphone">Headphone</button>
            <button data-filter=".others">Others</button>
        </div>
      </div>
        <div class="row grid no-gutters">
            <div class="col-md-3 grid-item laptop animation wow zoomIn">
                <div class="works-img"> <img src="image/laptop%201.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item laptop animation wow zoomIn">
                <div class="works-img"> <img src="image/laptop%202.png" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item laptop animation wow zoomIn">
                <div class="works-img"> <img src="image/laptop%203.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                      <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item laptop animation wow zoomIn">
                <div class="works-img"> <img src="image/laptop%204.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item laptop animation wow zoomIn">
                <div class="works-img"> <img src="image/laptop%205.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                        <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item laptop animation wow zoomIn">
                <div class="works-img"> <img src="image/laptop%206.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%201.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%202.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%203.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%204.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%205.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                      <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%206.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%207.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item androidmobile animation wow zoomIn">
                <div class="works-img"> <img src="image/mobile%208.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item smarttelevision animation wow zoomIn">
                <div class="works-img"> <img src="image/tv%201.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                      <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item smarttelevision animation wow zoomIn">
                <div class="works-img"> <img src="image/tv%202.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                      <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item smarttelevision animation wow zoomIn">
                <div class="works-img"> <img src="image/tv%203.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item smarttelevision animation wow zoomIn">
                <div class="works-img"> <img src="image/tv%204.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%201.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%202.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%203.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%204.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%205.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%206.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%207.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item watch animation wow zoomIn">
                <div class="works-img"> <img src="image/watch%208.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item headphone animation wow zoomIn">
                <div class="works-img"> <img src="image/headphone%201.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item headphone animation wow zoomIn">
                <div class="works-img"> <img src="image/headphone%202.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item headphone animation wow zoomIn">
                <div class="works-img"> <img src="image/headphone%203.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item headphone animation wow zoomIn">
                <div class="works-img"> <img src="image/headphone%204.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item headphone animation wow zoomIn">
                <div class="works-img"> <img src="image/headphone%205.jpeg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                        <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item headphone animation wow zoomIn">
                <div class="works-img"> <img src="image/headphone%206.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item others animation wow zoomIn">
                <div class="works-img"> <img src="image/others%201.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item others animation wow zoomIn">
                <div class="works-img"> <img src="image/others%202.JPG" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                      <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item others animation wow zoomIn">
                <div class="works-img"> <img src="image/others%203.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item others animation wow zoomIn">
                <div class="works-img"> <img src="image/others%204.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                      <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item others animation wow zoomIn">
                <div class="works-img"> <img src="image/others%205.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-item others animation wow zoomIn">
                <div class="works-img"> <img src="image/others%206.jpg" class="img-fluid" alt="pic">
                    <div class="product-overlay">
                        <h5>Product Name</h5>
                        <h6>Price: Amount</h6>
                       <div class="add"> <button>Add to chart</button></div>
                       <div class="details"> <button>Details</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- review-area -->
    <div class="review-area">
        <div class="container">
            <div class="review-title">
                <h2>Review</h2> </div>
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
    <section class="footer-area">
        <div class="container">
            <div class="icon-area">
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-linkedin-in"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="arrow-top"> <img src="image/top.png" alt=""> </div>
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