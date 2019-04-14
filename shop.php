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
    <!-- Link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css"> </head>

<body>
<!-- header-area -->
<?php include 'nav.php'?>
<!-- product-area -->
<section class="product-area">
    <div class="container">
        <h2>Our Product</h2>
        <div class="button-group filter-button-group">

            <button><a href="/SuperTech">All</a></button>
            <button><a href="/SuperTech/shop.php?category=laptop">Laptop</a></button>
            <button><a href="/SuperTech/shop.php?category=androidmobile">Android Mobile</a></button>
            <button><a href="/SuperTech/shop.php?category=watch">Watch</a></button>
            <button><a href="/SuperTech/shop.php?category=smarttelevision">Smart Television</a></button>
            <button><a href="/SuperTech/shop.php?category=headphone">Headphone</a></button>
            <button><a href="/SuperTech/shop.php?category=others">Others</a></button>

            <?php
            //var_dump($_GET);die();
            ?>
        </div>
    </div>

    <div class="row grid no-gutters">
        <?php
        $sql = '';
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            $sql = "select * from product where category = '{$category}'";
        }else{
            $sql = "select * from product";}

        $run = mysqli_query($link, $sql);
        $count = mysqli_num_rows($run);
        if ($count > 0) {
            while ($row = mysqli_fetch_assoc($run)) {
                ?>
                <div class="col-md-3 grid-item <?php echo $row['category']; ?> animation wow zoomIn">
                    <div class="works-img">
                        <img src="<?php echo $row['image'] ?>" class="img-fluid" alt="pic">
                        <div class="product-overlay">
                            <h5><?php echo $row['name'] ?></h5>
                            <h6>Price: <?php echo $row['price']; ?></h6>
                            <div class="add">
                                <?php if(isset($_SESSION['userID'])){?>
                                    <button><a href="cartintermediate.php?id=<?php echo $row['productID']; ?>&target=add">Add to cart</a></button>
                                <?php }?>
                            </div>
                            <div class="details">
                                <button><a href="product.php?id=<?php echo $row['productID']; ?>">Details</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else{ ?>
            <div class="container"><div class="indexerror"><h3>There is no product to show</h3></div></div>
        <?php } ?>

    </div>
</section>

<!--footer-area-->
<?php include 'footer.php';?>
<!--Link-->
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