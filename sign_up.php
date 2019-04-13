<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shoptech';
$link = mysqli_connect($host, $user, $password, $db);

$name = '';
$email = '';
$phone = '';
$password = '';
$error = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if(isset($_POST["signup"])){

    $name = clean_text($_POST["name"]);
    $email = clean_text($_POST["email"]);
    $phone = clean_text($_POST["phone"]);
    $password = clean_text($_POST["password"]);

    if($name=='' || $email=='' || $phone==''|| $password==''){
        $error = '<h2><label class="text-danger">Fill all the fields</label></h2>';
    }
    else{
        $sql = 'INSERT INTO user (name, email, phone, password, type) VALUES("'.$name.'", "'.$email.'", "'.$phone.'", "'.$password.'", "client")';
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $resultInsert = mysqli_query($link, $sql);

        $sql = 'select userID from user where email="'.$email.'"';
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userID'] = $row['userID'];

        header('Location: index.php');
    }
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

<!-- sign up-area -->
<div class="signup-area">
    <div class="signupbox"> <img src="image/icon/001.jpg" alt="pic">
        <h1>Sign Up Here</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name; ?>">
            <br>
            <br>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
            <br>
            <br>
            <input type="text" name="phone" placeholder="Enter Phone Number" value="<?php echo $phone; ?>">
            <br>
            <br>
            <input type="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>">
            <br>
            <br>
            <input type="submit" name="signup" value="Sign Up">
            <?php echo $error; ?>
        </form>
    </div>
</div>

<!--    footer area-->
<?php include 'footer.php';?>
<div class="arrow-top"> <img src="image/icon/top.png" alt=""> </div>
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