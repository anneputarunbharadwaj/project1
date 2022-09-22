<?php 
    $con = mysqli_connect("127.0.0.1","root","","hostal_management");

    $email=$_POST['email']; 
    $phone=$_POST['phno'];
    $pswd=$_POST['pswd'];

    $query = "INSERT INTO sign_up VALUES ('$email','$phone','$pswd')";
//echo $query;
    $data = mysqli_query($con, $query);

    if($data===TRUE){
        header("Location:https://localhost/login/home.html");
        exit();
}
?>