<?php
  //Check if the form has been submitted
  if(isset($_GET["salePrice"])) {
    $saleprice = $_GET["salePrice"];
    $discountpercent = $_GET["discountPercent"];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Price Quote</title>
  <style>
    #wrapper {
      margin: 20px;
    }
  </style>
</head>
<body>
  <div id="wrapper">
    <?php
      //Load the first form if no GET data exists
      //Otherwise load second form
      if(isset($saleprice)) {
        include("./confirmForm.php");
      } else {
        include("./form.php");
      }
    ?>
  </div>
</body>
</html>
