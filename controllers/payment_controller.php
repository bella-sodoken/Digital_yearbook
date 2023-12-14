<?php 
   require_once __DIR__ ."./../classes/paymet_class.php";



      function createpayment_ctr($amount,$user_id, $payment_type, $date, $time, $payment_status, $yearbook_id){
        $payment = new payment_class;

        return $payment->createpayment_cls($amount,$user_id, $payment_type,$date,$time,$payment_status,$yearbook_id);   
      }

      function delete_payment_ctr($payment_id){
        $payment = new payment_class;
        return $payment->delete_payment($payment_id);
      }

function select_one_payment_ctr($payment_id)
{
    $payment = new payment_class;

    return $payment->select_one_payment($payment_id);
}


function select_all_payment(){
    $payment = new payment_class;
    return $payment->select_all_payment();
}

$created = createpayment_ctr('1000', '1', 'Momo', '2022-12-08', '07:32:22', 'Success', '3');

echo $created;
?>