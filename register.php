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
        <form action="savedata.php" id="form" method="post">
            <div class="row">
                <h2 class="head">Create Your Account</h2>
                <div class="col-6">
                    <div class="form-group">
                        <label for="First Name">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="Last Name">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="email form-control" required>
                <p class="error_msg"></p>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="password form-control" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="Confirm Password">Confirm Password</label>
                        <input type="password" name="c_password" class="c_password form-control" required>
                        <p class="c_pass_error"></p>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="show" id="show">
                <label class="form-check-label user-select-none" for="show">
                    Show Password
                </label>
            </div>

            <div class="row">
                <div class="col-6 sign-in-box">
                    <a href="login.php"><span class="sign-in">Sign In Instead</span></a>
                </div>
                <div class="col-6 sign-in-box d-flex">
                    <input type="submit" id="submit-btn" class="btn-primary ms-auto" name="submit" value="Submit">
                </div>
            </div>
        </form>
        </div>
    </div>
    
</body>
</html>