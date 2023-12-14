<?php

    require ("../controllers/payment_controller.php");

  session_start();
  $ref = $_GET['reference'];
  $amount = $_GET['amount'];
  $user_id = $_SESSION['user_id'];
  $payment_type = "";
  $currentDateTime = new DateTime();
  $date = $currentDateTime->format('Y-m-d');
  $time = $currentDateTime->format('H:i:s');
  $payment_status = "";
  $yearbook_id = $_GET['yearbook_id'];

  

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_e98c5ea9a67794e8a2175b48f2a7d41adecbdffe",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
    $payment_status = "Success";
    $payment_type = "card";

    $created = createpayment_ctr($amount,$user_id, $payment_type, $date, $time, $payment_status, $yearbook_id);

    if($created){
    echo "<script>alert('payment for year book is completed. Delivery would be made to you soon.'); window.location.href='../index.php'</script>";
    }else{
      echo "<script>alert('payment for year book is completed. Delivery would be made to you soon.'); history.back()</script>";
    }

  }
?>