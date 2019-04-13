<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';
$link = mysqli_connect($host, $user, $password, $db);

$name = '';
$email = '';
$subject = '';
$message = '';

if(isset($_SESSION['userID'])){
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}

if(isset($_POST["sendMessage"])){

    if(isset($_POST["message"])){
        $message = $_POST["message"];
    }$name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    if($name=='' || $email=='' || $subject=='' || $message==''){

    }else{
        $sql = "INSERT INTO message (name, email, subject, description) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";
        $resultInsert = mysqli_query($link, $sql);
        $lastInsertID = mysqli_insert_id($link);

        header('Location: index.php');
    }
}

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

    <!-- contact-area -->
    <section class="contact sp-140" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Keep in touch</h2> </div>
            <div class="section-style"></div>
            <div class="info-content">
                <div class="col-40 col-100 wow slideInLeft">
                    <div class="contact-info">
                        <h5>Our Address</h5>
                        <p>House #1, Road #12, Bashabo, Dhaka-1214</p>
                        <h5>Call Us</h5>
                        <p>+880 199 6846517
                            <br>+880 153 4312346</p>
                        <h5>Email Us</h5>
                        <p class="m-0">help@supertech.com</p>
                    </div>
                </div>
                <div class="col-60 col-100 wow slideInRight">
                    <form method="post">
                        <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $name?>">
                        <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $email?>">
                        <input class="form-control" type="text" name="subject" placeholder="Subject" value="<?php echo $subject?>">
                        <textarea class="form-control" name="message" id="" cols="10" rows="5" placeholder="Message"></textarea>
                        <input class="mb-0" type="submit" name="sendMessage" value="send message"/> </form>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-map">
        <div class="container">
            <div class="map-title">
                <h2>Location</h2> </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="map animation wow zoomIn">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5387017332896!2d90.40469681445609!3d23.763823994181433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah+University+of+Science+and+Technology!5e0!3m2!1sen!2sbd!4v1554212981403!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-area -->
    <?php include 'footer.php';?>

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