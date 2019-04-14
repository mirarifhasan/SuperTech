<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUPER TECH</title>
    <!-- Link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css"> </head>

<body>
<!-- header-area -->
<?php include 'nav.php'?>

<!-- about-area -->
<div class="about-area">
    <section class="sec1">
        <section class="overlay1">
            <div class="container">
                <div class="about-title wow zoomIn">
                    <h1>SUPER TECH</h1></div>
                <h3><b>Largest online</b> shopping company in Bangladesh.</h3> </div>
        </section>
    </section>
    <section class="sec2">
        <h1>ABOUT US</h1>
        <p>Hello and welcome to Super Tech, the place to find the best tech goods for every taste and occasion. We thoroughly check the quality of our goods, working only with reliable suppliers so that you only receive the best quality product.
            <br>
            <br>We at Super Tech believe in high quality and exceptional customer service. But most importantly, we believe shopping is a right, not a luxury, so we strive to deliver the best products at the most affordable prices, and ship them to you regardless of where you are located.  </p>
    </section>
    <section class="sec3">
        <section class="overlay2">
            <div class="row">
                <div class="col-md-7">
                    <div class="text">
                        <h3>We look forward to doing great things with you  anywhere in the country.</h3></div>
                </div>
                <div class="col-md-5">
                    <div class="btn2">
                        <a href="contact.php">
                            <button>CONTACT US <i class="fas fa-angle-right"></i> </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
<!--    footer area-->
<?php include 'footer.php';?>

<!--    arrow-top-->
<div class="arrow-top"> <img src="image/icon/top.png" alt=""> </div>
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