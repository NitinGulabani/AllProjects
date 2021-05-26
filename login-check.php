<?php 
    session_start();
    include "conn.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $result = runQuery($email_check);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $db_pass = $row['password'];
        if($password != $db_pass)
        {
            echo 2; // Password Doesn't Match
        }
        else
        {
            echo 1; //Password Is Correct
            $_SESSION['email'] = $email;
        }
    }
    else{
        echo 0; //Email Doesn't Exist
    }

?>