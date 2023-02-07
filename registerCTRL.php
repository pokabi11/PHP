<?php
session_start();
/* get method
$usr = $_GET ['username'];
$email = $_GET ['email'];
*/
/* post method
*/
$usr = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$cfpwd = $_POST['cfpwd'];

//echo "username: $usr email: $email";
//xử lý data nhận được

if($pwd != $cfpwd){
    $msg = "Password is not correct, please re-enter your password again.";
    $_SESSION['error'] = $msg;
    $_SESSION['username'] = $usr;
    $_SESSION['email'] = $email;

    //quay tro ve trang register
    header("Location:register.php");
    die(); // làm cho luồng web chết tại đây và k đi tiếp
}

header("Location: index.php");