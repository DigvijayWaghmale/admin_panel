<!DOCTYPE html>
<html lang="en">


<!--  /login   25   -->
<head>
    <?php include('header_links.php')?>

</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form>
                <img src="images/logo.png" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate">
                        <label for="first_name1">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate">
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn-large btn-log-in" href="index.php">Login</a>
                    </div>
                </div>
                <a href="forgot.php" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <?php include('footer_links.php')?>
</body>


<!--  /login   26   -->
</html>