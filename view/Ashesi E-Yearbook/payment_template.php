<?php 
  session_start();

  if(!isset($_SESSION["user_email"])){
    echo "<script>alert('kindly login to make payment'); window.location.href='User_Login.html'</script>";
  }
?>

<!doctype html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Durabyte Studio | Payment Page</title>
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
        * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #222;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      width: 600px;
      margin: 0 auto;
      padding: 50px;
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      color: #fff;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 36px;
      color: #b38bff;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
      font-size: 18px;
    }

    input {
      padding: 12px;
      border: none;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #fff;
      background-color: #555;
    }

    button {
      padding: 10px;
      background-color: #b38bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.2s ease-in-out;
    }

    button:hover {
      background-color: #8c5fb2;
    }

    a {
      text-decoration: none;
      color: #b38bff;
      font-size: 18px;
      transition: color 0.2s ease-in-out;
    }

    a:hover {
      color: #8c5fb2;
    }

    p {
      text-align: center;
      margin: 8px;
    }
      </style>
</head>

<div class="container">
    <div class="form-container" id="login-form">
      <h1>Payment</h1>
      <form id="paymentForm">
        <label for="username">Email</label>
        <input type="email" id="email-address" value="<?php echo $_SESSION['user_email'] ?>" readonly required>
        <label for="">Amount</label>
        <input type="number" id="amount" value=<?php echo $_GET['amount'] ?> readonly required>
        <button type="submit" onclick="payWithPaystack()">Pay</button>
      </form>
    
    </div>
  </div>


<!-- 
<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" value=<?php // echo $_GET['amount'] ?> required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form> -->

<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
  const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_97e2630b785dda169438cf41030a32c0d0a261d6', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    currency: 'GHS', 
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location.href = '../../actions/payment_action.php?reference='+ response.reference+'&amount=<?php echo $_GET['amount']?>&yearbook_id=<?php echo $_GET['id']?>';
          // window.location = "../actions/payment_action/process_payment.php?reference=" + response.reference;   
          // $.ajax({
          //   url: '../actions/payment_action.php?reference='+ response.reference,
          //   method: 'get',
          //   success: function (response) {
          //     alert("payment was made");
          //     window.location = '../actions/payment_action.php?reference='+ response.reference;
          //   }
          // });
    }
  });

  handler.openIframe();
}

</script>