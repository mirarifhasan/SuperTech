<div id="myModal<?php echo $row['productID']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="login-area">
                <div class="loginbox"> <img src="image/icon/001.jpg" alt="pic">
                    <h1>Login Here</h1>
                    <form action="log_in.php" method="post">
                        <p>Email</p>
                        <input type="text" name="email" placeholder="Enter Email" value="">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Enter Password" value="">

                        <input type="submit" name="login" value="Login">
                        <a href="sign_up.php">Don't have an account?</a> </form>
                </div>
            </div>
        </div>
    </div>
</div>