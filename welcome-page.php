<?php 
    include "links.php";
    session_start();

    if(!isset($_SESSION['email']))
    {
        echo "<h2 style='margin-left:400px'>Please Login First</h2>";
        ?>
        <button style='color:white;margin-left:500px;' class="btn-primary">
            <a style='color:white;' href="http://localhost/reg-login-form/login.php">Log in</a>
        </button>
        <?php 
    }
    else
    {
        echo "<h2 style='margin-left:300px'>Welcome To This Page " . $_SESSION['email']."</h2>";
        ?>
        <button style='color:white;margin-left:500px;' class="btn-primary">
            <a style='color:white;' href="http://localhost/reg-login-form/logout.php">Logout</a>
        </button>
        <?php 
    }
?>