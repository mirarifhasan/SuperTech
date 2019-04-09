<?php
session_start();


$_SESSION['Cart'][] = $_GET['id'];
//$_SESSION['Cart'][0];

foreach($_SESSION['Cart'] as $key){
}



?>


