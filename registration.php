<?php

session_start();
header('location:index.php');

$conn = mysqli_connect('db5000936651.hosting-data.io', 'dbu450584', 'Fall2020!@#');
mysqli_select_db($conn, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name='$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1) {
    echo "This username is already taken";
} else {
    $reg = "insert into usertable(name , password) values ('$name' , '$pass')";
    mysqli_query($conn, $reg);
    echo "Signup Successful!";
}

?>