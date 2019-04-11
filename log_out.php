<?php

session_start();
$_SESSION['Cart']=null;
session_destroy();


header('Location: index.php');

?>