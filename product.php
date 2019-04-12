<?php
session_start();

$id = $_GET['id'];

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';

$link = mysqli_connect($host, $user, $password, $db);

$sql = 'select * from product where productID="'.$id.'"';
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
    //echo $_GET['id'];
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

    <!-- our product-area -->
    <?php if($count>0){ ?>
    <div class="our-products">
        <div class="container">
            <div class="section-title">
                <h2>Our Product</h2> </div>
            <div class="row no-gutters">
                <div class="col-md-5">
                    <div class="product-image">
                        <img src="<?php echo $row['image'];?>" class="img-fluid" alt="pic">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-details">
                        <h2>Product Name: <?php echo $row['name'];?></h2>
                        <p>Product ID: <?php echo $row['productID'];?></p>
                        <h3>TK <?php echo $row['price'];?></h3>
                        <label for="Q"><b>Quantity:</b></label>
                        <input type="number" id="Q" name="Q" min="1" max="5">
                        <button><a href="cartintermediate.php?id=<?php echo $id?>">Add to cart</a></button>
                        <div class="product-desc">
                            <p><?php echo $row['description'];?></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } else{ ?>
        <h2>No product found</h2>
    <?php }?>

<!--    footer area-->
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