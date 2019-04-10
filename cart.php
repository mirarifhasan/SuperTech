<?php
session_start();

$_SESSION['Cart'][] = $_GET['id'];
//$_SESSION['Cart'][0];

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';

$link = mysqli_connect($host, $user, $password, $db);

$sl = 1;

?>



    <table cellpadding="10">
        <tr>
            <th>Sr. No.</th>
            <th>Product Name</th>
            <!--<th>Product Quantity</th>-->
            <th>Product Price</th>
        </tr>

        <?php
            foreach($_SESSION['Cart'] as $key) {

                $sql = "select * from product where productID=$key";
                $run = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($run);

                echo "<tr><td>$sl</td>";
                echo "<td>".$row['name']."</td>";
                //echo "<td>1</td>";
                echo "<td>".$row['price']."</td></tr>";

                $sl = $sl + 1;
            }
        ?>

    </table>

    <button><a href="checkout.php">Check Out</a></button>