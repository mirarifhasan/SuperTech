<?php
session_start();

//$_SESSION['Cart'][] = $_GET['id'];
//$_SESSION['Cart'][0];

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';
$link = mysqli_connect($host, $user, $password, $db);


$sql = 'select productQuantity from cart where userID="'.$_SESSION["userID"].'" and productID="'.$_GET['id'].'"';
echo $sql;
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);

if($count==0){
    $sql = 'insert into cart(productID, productQuantity, userID) values ("'.$_GET['id'].'", "1", "'.$_SESSION["userID"].'")';
    echo $sql;
    $resultInsert = mysqli_query($link, $sql);
}
else{
    $sql = 'select productQuantity from cart where userID="'.$_SESSION['userID'].'" and productID="'.$_GET['id'].'"';
    echo $sql;
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $row['productQuantity'] = $row['productQuantity']+1;
    $sql = 'update cart set productQuantity="'.$row['productQuantity'].'" where userID="'.$_SESSION['userID'].'" and productID="'.$_GET['id'].'"';
    echo $sql;
    $resultInsert = mysqli_query($link, $sql);
}


header('Location: cart.php');

?>