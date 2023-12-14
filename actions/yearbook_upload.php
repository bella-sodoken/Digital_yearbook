<?php
// require_once("../controllers/year_book_ctr.php");

// $book_name = $_POST['book_name'];
// $book_desc = $_POST['desc'];
// $book_amount = $_POST['amount'];


// echo isset($_FILES['yearbook_file']);

// if (isset($_FILES['yearbook_file'])) {
//     $root_dir = "../Documents/";
//     $upload_root_dir = "Documents/";
//     $file = $_FILES['yearbook_file'];
//     $file_type = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

//     // Generate a unique filename based on the current datetime
//     $datetime = date("YmdHis");
//     $filename = $datetime . "_" . $file["name"];

//     $file_dest = $root_dir . $filename;
//     $upload_file_dest = $upload_root_dir . $filename;

//     $move = move_uploaded_file($file["tmp_name"], $file_dest);
//    echo "hello";
//     if ($move) {
//         $create_new_book = createyearbook_ctr($book_name, $book_amount, $book_desc, $file_dest, 0, 0, 0);
//         header("Location: ../index.php");
//     } else {
//         echo "not hello";
// //        echo "<script>alert('upload not completed'); history.back();
// // </script>";

//         }
// } else {
//    echo "<script>alert('upload not completed'); history.back();
// </script>";

// }

?>

<?php
require_once("../controllers/year_book_ctr.php");

$book_name = $_POST['book_name'];
$book_desc = $_POST['desc'];
$book_amount = $_POST['amount'];
$file_dest = "Documents/20231207172227_2023-05-07.png";
$create_new_book = createyearbook_ctr($book_name, $book_amount, $book_desc, $file_dest, 0, 0, 0);
// echo "hello";
// if($create_new_book){
//     header("Location: ../index.php");
//     exit();
// }else{
//     echo "<script>alert('upload not completed'); history.back()</script>";
// }

if (isset($_FILES['yearbook_file'])) {
    $root_dir = "./../Documents/";
    $upload_root_dir = "./../Documents/";
    $file = $_FILES['yearbook_file'];
    $file_type = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    // Generate a unique filename based on the current datetime
    $datetime = date("YmdHis");
    $filename = $datetime . "_" . $file["name"];

    $file_dest = $root_dir . $filename;
    $upload_file_dest = $upload_root_dir . $filename;
   
    $move = move_uploaded_file($file["tmp_name"], $file_dest);
    
    if ($move) {
        $create_new_book = createyearbook_ctr($book_name, $book_amount, $book_desc, $file_dest, 0, 0, 0);
        header("Location: ../index.php");
        exit; // Ensure that no code is executed after the redirect
    } else {
        // Provide an error message if the upload fails
        echo "File upload failed. Please try again.";
    }
} else {
    // Provide an error message if the file is not set
    echo "File not set. Please select a file.";
}
?>
