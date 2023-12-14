<!doctype html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Admin Page</title>
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
      background-color: rgba(42, 44, 57, 0.9);
    
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
      align-items: center;
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

<body>
<a href="yearbook_orders.php" class="btn btn-primary" style="position: absolute; top: 10px; left: 10px;">View Yearbook Orders</a>

<div class="container">
    <div class="form-container" id="login-form">
      <h1>Upload Yearbook Here</h1>
      <form method="post" action="../../actions/yearbook_upload.php" enctype="multipart/form-data">
        <label for="username">Yearbook name</label>
        <input type="text" name = "book_name"id="text" required>
        <label for="">Description</label>
        <input type="long-text" name = "desc" id="long-text" required>
        <label for="amount"> Amount</label>
        <!-- <input type="number" id="amount" data-type="currency"required> -->
        <input type="number" name="amount" id="currency-field"  value="" data-type="currency" placeholder="GHS 1,000.00">
        <label for="">Upload Yearbook file</label>
			
				<input type="file" id="file" class="form-control" name="yearbook_file" >
		
        <button type="submit" style="text-align:center;">Upload</button>
      </form>
    
    </div>
  </div>
<!-- pattern="^\GHS\d{1,3}(,\d{3})*(\.\d+)?$" -->

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

</body>
</html>



<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->