<?php

session_start();

$conn = mysqli_connect('db5000936651.hosting-data.io', 'dbu450584', 'Fall2020!@#');
mysqli_select_db($conn, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name='$name' && password = '$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {
    header('location:index.php');
}

?>