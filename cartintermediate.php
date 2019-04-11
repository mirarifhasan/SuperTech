<?php
session_start();

$_SESSION['Cart'][] = $_GET['id'];
//$_SESSION['Cart'][0];

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';
$link = mysqli_connect($host, $user, $password, $db);


$sql = 'select productQuantity from cart where usrID="'.$_SESSION["userID"].'", prodictID="'.$_GET['id'].'"';
$result = mysqli_query($link, $sql);
$count = mysqli_num_rows($result);

if($count=0)
    $sql = 'insert into cart(productID, productQuantity, userID) values ("'.$_GET['id'].'", "1", "'.$_SESSION["userID"].'")';
else{
    $sql = 'update';
}

die();




header('Location: cart.php');

?>