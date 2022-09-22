<?php 

    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $con = mysqli_connect("127.0.0.1", "root","", "hostal_management");
    $query = "SELECT Password FROM sign_up where Email = '$email'";

    $data = mysqli_query($con, $query);

    $r = mysqli_fetch_array($data);

    $pswd = $r['Password'];

    
    if($password == $pswd) {
        header("Location:https://localhost/login/home.html");
        exit();
    }
    else {
        echo "Incorrect Credentials";
    }


?>