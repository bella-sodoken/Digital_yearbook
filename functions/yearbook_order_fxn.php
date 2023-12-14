<?php 
require_once __DIR__ ."./../controllers/year_book_ctr.php";
require_once __DIR__ ."./../controllers/user_controller.php";
require_once __DIR__ ."./../controllers/payment_controller.php";
function order_row($no, $Date, $User_name, $User_email, $Year_Book, $Amount,$Payment_Status, $Payment_reference){
    return "<tr><td>$no</td>
    <td>$Date</td>
    <td>$User_name</td>
    <td>$User_email</td>
    <td>$Year_Book</td>
    <td>$Amount</td>
    <td>$Payment_Status</td>
    <td>$Payment_reference </td></tr>";
}


function display_all_yearbook_orders(){
    $payments = select_all_payment();
    $counter = 0;
    // print_r($payments);
    foreach($payments as $data){
        $user = select_one_users_ctr($data['user_id']);
        // print_r($data['user_id']);
        $Year_Book = select_one_year_book($data['yearbook_id']);
        // print_r($data['payment_status']);
        $counter += 1;
        echo order_row($counter, $data['date'], $user['first_name'], $user['last_name'], $user['email'], $Year_Book['yearbook_name'], $Year_Book['amount'], $data['payment_status']);

    }
}


?>