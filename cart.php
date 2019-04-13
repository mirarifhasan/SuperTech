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

<!--cart area-->
<div class="cart-area">
    <div class="container">
        <div class="section-title">
            <h2>Cart</h2>
        </div>

        <?php
        $sql = 'select * from cart where userID="'.$_SESSION['userID'].'"';
        $result = mysqli_query($link, $sql);
        $count = mysqli_num_rows($result);

        if($count>0){
            ?>
            <div class="table-bx">
                <table cellpadding="8">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price/Unit</th>
                        <th></th>
                    </tr>

                    <?php
                    $sl = 1;
                    $sql = 'select * from cart where userID="'.$_SESSION['userID'].'"';
                    $result = mysqli_query($link, $sql);
                    $total=0;

                    while($row = mysqli_fetch_assoc($result)){
                        $sql = 'select * from product where productID="'.$row['productID'].'"';
                        $run = mysqli_query($link, $sql);
                        $row2 = mysqli_fetch_assoc($run);
                        echo "<tr><td>$sl</td>";
                        echo "<td>".$row2['name']."</td>";
                        echo "<td>".$row['productQuantity']."</td>";
                        echo "<td>".$row2['price']."</td>";

                        $total = $total + ($row['productQuantity'] * $row2['price']);
                        echo "<td><button>Remove</button></td></tr>";
                        
                        $sl = $sl + 1;
                    }
                    ?>

                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>Total</b></td>
                        <td><?php echo $total?></td>
                    </tr>
                    
                </table>
            </div>
           <div class="chk-btn"> <button><a href="checkout.php">Check Out</a></button></div>


        <?php }
        else{ ?>
            <h3>You haven't add any product</h3>
        <?php }?>

    </div>
</div>

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
