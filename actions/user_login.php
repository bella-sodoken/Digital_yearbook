<?php
require_once "../controllers/user_controller.php";
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$user_info = select_one_users_email_ctr($email);
print_r($user_info);
if ($user_info) {


    $db_email = $user_info['email'];
    if ($db_email === $email) {
        $admin_password = "12345678";

        if ($password === $user_info['password']) {
           echo "<script>alert('login successful');window.location.href='../index.php'</script>";
            $_SESSION['user_email'] = $email;
            $_SESSION['user_id'] = $user_info['user_id'];
        } else {
            echo "<script>alert('email or password is not correct'); history.back();</script>";
        }
    } else {
        echo "<script>alert('email or password is not correct'); history . back();</script>";
    }
}else{
    echo "<script>alert('user does not exist'); history . back();</script>";
   
}
