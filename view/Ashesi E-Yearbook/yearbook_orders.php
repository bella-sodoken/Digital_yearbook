<?php 
    require_once ("../../functions/yearbook_order_fxn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <title>Bootstrap Table</title>
</head>
<body>

<div class="container mt-4">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Date</th>
        <th>User name</th>
        <th>User email</th>
        <th>Year Book</th>
        <th>Amount Paid (GHC)</th>
        <th>Payment Status</th>
        <th>Payment reference </th>
      </tr>
    </thead>
    <tbody>
      
       
<?php display_all_yearbook_orders(); ?>
     
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
