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

<!-- our product-area -->
<div class="Profile-area">
    <div class="container">
        <div class="section-title">
            <h2>My Profile</h2>
        </div>
        <div class="my-profile-area">
            <div class="my-profile">
                <?php
                $sql = 'select * from user where email="'.$_SESSION['email'].'"';
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_array($result)
                ?>
                <p><b>Name: </b><?php echo $row['name']?></p>
                <p><b>Email: </b><?php echo $row['email']?></p>
                <p><b>Phone: </b><?php echo $row['phone']?></p>
            </div>
            <div class="table-box">
                <table cellpadding="10">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Order ID</th>
                        <th>Product Name</th>
<!--                        <th>Product Quantity</th>-->
                        <th>Product Price</th>
                    </tr>

                    <?php
                    $sl=1;
                    $sql = 'select * from ordertable where userID="'.$_SESSION['userID'].'"';
                    $result = mysqli_query($link, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr><td>'.$sl.'</td>';
                        echo '<td>'.$row["orderID"].'</td>';
                        $sql2 = 'select * from product where productID="'.$row['productID'].'"';
                        $result2 = mysqli_query($link, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);

                        echo '<td>'.$row2["name"].'</td>';
                        echo '<td>TK '.$row2["price"].'</td></tr>';
                        $sl = $sl + 1;
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
</div>


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