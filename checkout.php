<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';

$link = mysqli_connect($host, $user, $password, $db);

foreach($_SESSION['Cart'] as $key){
    //$sql = "insert into order (userID, productID) values ('".$_SESSION['userID']."', '".$key."')";
    $sql = 'insert into ordertable (userID, productID) values ("'.$_SESSION['userID'].'", "'.$key.'")';
    echo $sql;
    $resultInsert = mysqli_query($link, $sql);
echo ' hi ';
}

header('Location: my_profile.php');
?>