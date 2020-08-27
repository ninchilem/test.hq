<?php
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// $username = 'a';
// $password = '111';
$conn = mysqli_connect("localhost","root","root","user");
$sql = "SELECT * FROM  `info` WHERE `user_name`='$username' AND `password`='$password'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
echo json_encode($row);
?>