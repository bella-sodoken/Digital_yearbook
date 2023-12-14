<?php
require_once "../controllers/user_controller.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


if($email === "admin@yearbook.com"){
    $user_info = select_one_users_email_ctr($email);
    $admin_password = "12345678";

    if ($password === $admin_password) {
        header("Location: ../view/Ashesi E-Yearbook/Admin_upload_page.php");
        $_SESSION['user_email'] = $email;
        $_SESSION['user_id'] = $user_info['user_id'];
    }else{
        
     echo "<script>alert('email or password is not correct'); history . back();
</script>";

    }
}else{
        
echo "<script>alert('email or password is not correct'); history . back();
</script>";

    }


?>