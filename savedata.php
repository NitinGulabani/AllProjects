<?php 
    include "conn.php";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (first_name,last_name,email,password)
            VALUES ('$first_name','$last_name','$email','$password')";
            
    $result = runQuery($query);

    header("location:http://localhost/reg-login-form/register.php");   

?>