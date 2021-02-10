<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carrental';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    echo "Connection Successful, Payment Gateway";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$days = $_POST['days'];
$rent = 100;
$bill = $rent * $days ;
// $comments = $_POST['comments'];


$query = "insert into orders (name, email, mobile, days, bill) values('$name', '$email', '$mobile', '$days', '$bill')" ;

mysqli_query($con, $query);

// header('location:index.php');



?>