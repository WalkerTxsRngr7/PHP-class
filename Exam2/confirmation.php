<?php
  //Load GET data and calculate discount amount
  if(isset($_GET["salePrice"])) {
    $saleprice = $_GET["salePrice"];
    $discountpercent = $_GET["discountPercent"];
    $discountamount = $saleprice * $discountpercent / 100;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Quote Confirmation</title>
  <style>
    #wrapper {
      margin: 20px;
    }
  </style>
</head>
<body>
  <div id="wrapper">
    <h1>Sales Total</h1>
    <label for="salePrice">Sales Price: $<?php echo(number_format($saleprice, 2)) ?></label><br><br>
    <label for="salePrice">Discount Amount: $<?php echo(number_format($discountamount, 2)) ?></label><br><br>
    <label for="salePrice">Total Price: $<?php echo(number_format($saleprice - $discountamount, 2)) ?></label><br><br>
    <!--Reload first page-->
    <p><a href="./index.php">Get a New Quote</a></p>
  </div>
</body>
</html>
