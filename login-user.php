<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
 <style>
    body{
		
        background-image: url('https://c4.wallpaperflare.com/wallpaper/532/676/918/surface-network-light-background-wallpaper-preview.jpg');
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php"><h5>Forgot password?</h5></a></div>
                    
					 <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
					
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php"><h5>Signup now</h5></a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>