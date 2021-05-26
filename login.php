<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "links.php";
    ?>
</head>
<body>
    <div class="main-content d-flex">
        <div class="container">
            <h2 class="head">Log In Your Account</h2>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="email_lg form-control ">
                <p class="c_email_error"></p>
            </div>
            
            <div class="col-12">
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" class="password_lg form-control user-select-none">
                    <p class="c_pass_error"></p>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="show" id="show">
                <label class="form-check-label" for="show">
                    Show Password
                </label>
            </div>

            <div class="row">
                <div class="col-6 sign-in-box">
                    <a href="register.php"><span class="sign-in">Register Yourself</span></a>
                </div>
                <div class="col-6 sign-in-box d-flex">
                    <input type="submit" id="login-btn" class="btn-primary ms-auto" name="submit" value="Log In">
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>