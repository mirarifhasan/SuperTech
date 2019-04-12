<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';

$link = mysqli_connect($host, $user, $password, $db);

$sql = 'select * from cart where userID="'.$_SESSION['userID'].'"';
$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result)){
    $date = date('Y-m-d H:i:s');

    $sql = 'insert into ordertable (userID, productID, productQuantity, datetime) values ("'.$_SESSION['userID'].'", "'.$row['productID'].'", 
    "'.$row['productQuantity'].'", "'.$date.'")';
    $resultInsert = mysqli_query($link, $sql);
}

$sql = 'delete from cart where userID="'.$_SESSION['userID'].'"';
$result = mysqli_query($link, $sql);



header('Location: my_profile.php');
?>