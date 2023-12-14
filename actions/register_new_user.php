<?php

require("../controllers/user_controller.php");

$first_name = $_POST["fname"];
$last_name = $_POST["lname"];
$middle_name = $_POST["middle_name"];
$email = $_POST["email"];
$nationality = $_POST["nationality"];
$password = $_POST["password"];

if (!empty($_FILES['user_picture']['name'])) {
    $root_dir = "../Documents/";
    $upload_root_dir = "Documents/";
    $file = $_FILES['user_picture'];
    $file_type = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    // Generate a unique filename based on the current datetime
    $datetime = date("YmdHis");
    $filename = $datetime . "_" . $file["name"];

    $file_dest = $root_dir . $filename;
    $upload_file_dest = $upload_root_dir . $filename;

    $move = move_uploaded_file($file["tmp_name"], $file_dest);
    if ($move) {
        createusers_ctr($first_name, $last_name, $middle_name, $email, $nationality, $password, $filename);
        echo "<script>alert('registration completed');window.location.href='../index.php'</script>";
        // header("Location: ../index.php");
    } else {
        echo "<script>alert('registration not completed'); history.back();
</script>";
    }
} else {
    echo "<script>alert('registration not completed'); history.back();
</script>";

}








?>