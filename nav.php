
<div class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo animation wow zoomIn"> <img src="image/icon/logo.png" class="img-fluid" alt=""> </div>
                </div>
                <div class="col-md-8">
                    <div class="menu-area">
                        <div class="menu">
                            <ul class="nav justify-content-end">
                                <li><a href="index.php"><b>Home</b></a></li>
                                <li><a href="about_us.php"><b>About Us</b></a></li>
                                <li><a href="shop.php"><b>Shop</b></a></li>

                                <?php
                                if(isset($_SESSION['email'])){
                                    echo '<li><a href="my_profile.php"><b>My Profile</b></a></li>';
                                }
                                if(isset($_SESSION['type'])){
                                    if($_SESSION['type']=='admin'){
                                        echo '<li><a href="admin.php"><b>Admin</b></a></li>';
                                    }
                                }

                                ?>

                                <li><a href="contact.php"><b>Contact</b></a></li>

                                <?php
                                if (isset($_SESSION['userID'])) {
                                    echo '<li><a href="log_out.php"><button><b>Logout</b></button></a></li>';
                                    echo '<li><a href="cart.php"><i class="fas fa-cart-plus"></i></a></li>';
                                } else {
                                    echo '<li><a href="log_in.php"><button><b>Login</b></button></a></li>';
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 