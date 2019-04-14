<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';

$link = mysqli_connect($host, $user, $password, $db);

$name = '';
$price = '';
$category = '';
$image = '';
$description = '';

if(isset($_POST['add'])){
    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['category']) && isset($_POST['image']) && isset($_POST['description'])) {

        $sql = 'insert into product (name, price, description, category, image) values ("' . $_POST['name'] . '", "' . $_POST['price'] . '", "' . $_POST['description'] . '", "' . $_POST['category'] . '", "' . $_POST['image'] . '")';
        mysqli_query($link, $sql);
        header('Location: admin.php');
    }
    else echo "<script type='text/javascript'>alert('Fill all the fields')</script>";
}

if(isset($_POST['remove'])){
    if(isset($_POST['id'])){
        $sql = 'delete from product where productID="'.$_POST['id'].'"';
        mysqli_query($link, $sql);
    }
    else echo "<script type='text/javascript'>alert('Enter the Product ID')</script>";
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
<!--admin panell-->
<section class="admin-area">
    <div class="container">
        <?php if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){ ?>
        <div class="section-title">
            <h2>Hello Mr. Admin :D</h2> </div>
        <div class="button-group filter-button-group">
            <button data-filter="*" class="active">All</button>
            <button data-filter=".table">Product Table</button>
            <button data-filter=".addform">Add new product</button>
            <button data-filter=".removeform">Remove product</button>
        </div>
        <div class="row grid">
            <div class="col-md-12 grid-item table">
                <div class="admin-table">
                    <div class="adminComponentHeading">
                        <h3>Product Table</h3> </div>
                    <table cellpadding="8">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Price/Unit</th>
                        </tr>
                        <?php
                        $sql = 'select * from product';
                        $result = mysqli_query($link, $sql);
                        $sl = 1;

                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'.$sl.'</td>';
                            echo '<td>'.$row['productID'].'</td>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['category'].'</td>';
                            echo '<td>'.$row['price'].'</td>';
                            echo '</tr>';
                            $sl = $sl + 1;
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-12 grid-item addform">
                <div class="admin-form2">
                    <div class="adminComponentHeading">
                        <h3>Product Form</h3> </div>
                    <form method="post">
                        <input class="form-control" type="text" name="name" placeholder="Product Name">
                        <input class="form-control" type="number" name="price" placeholder="Price">
                        <select name="category">
                            <option value="" disabled selected>Select category</option>
                            <option value="laptop">Laptop</option>
                            <option value="androidmobile">Android Mobile</option>
                            <option value="watch">Watch</option>
                            <option value="smarttelevision">Smart Television</option>
                            <option value="headphone">Headphone</option>
                            <option value="others">Others</option>
                        </select>
                        <input class="form-control" type="text" name="image" placeholder="Image Path">
                        <textarea class="form-control" name="description" id="" cols="10" rows="5" placeholder="Desceiption"></textarea>
                        <input class="mb-0" type="submit" name="add" value="Add Item"> </form>
                </div>
            </div>
            <div class="col-md-12 grid-item removeform">
                <div class="admin-form2">
                    <div class="adminComponentHeading">
                        <h3>Remove Product Form</h3> </div>
                    <form method="post">
                        <input class="form-control" type="number" name="id" placeholder="Product ID">
                        <input class="mb-0" type="submit" name="remove" value="Remove"> </form>
                </div>
            </div>
        </div>
    </div>
    <?php } else {?>
        <div class="fault">
            <h2>Haha! Nice try XD</h2> </div>
    <?php } ?>
</section>
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