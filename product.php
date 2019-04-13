<?php
session_start();

$id = $_GET['id'];
$quantity = 1;
$_SESSION['quantity'] = $quantity;

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

if(isset($_POST["addCart"])){
    if(isset($_SESSION["userID"])){
        if(!empty($_POST["quan"])){
            $quantity = $_POST["quan"];
            $_SESSION['quantity'] = $quantity;

            header('Location: cartintermediate.php?id='.$id.'&target=add');
        }else{
            echo "<script type='text/javascript'>alert('Insert the quantity please!')</script>";
        }
    }else{
        echo "<script type='text/javascript'>alert('Login First!')</script>";
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

<!-- our product-area -->

<div class="our-products">
    <?php if($count>0){ ?>
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

                        <form method="post">
                            <label for="Q"><b>Quantity:</b></label>
                            <input type="number" id="Q" name="quan" min="1" max="50" value="<?php echo $quantity?>">
                            <input type="submit" name="addCart" value="Add to cart">
                        </form>

                        <div class="product-desc">
                            <p><?php echo $row['description']; ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php } else{ ?>
        <h3>No product found</h3>
    <?php }?>

</div>



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