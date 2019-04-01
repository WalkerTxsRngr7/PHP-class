<h1>Quote Confirmation</h1>
<form action="confirmation.php" method="get">
  <label for="salePrice">Sales Price: </label>
  <input type="text" name="salePrice" value="<?php echo($saleprice); ?>"><br><br>
  <label for="discountPercent">Discount %: </label>
  <input type="text" name="discountPercent" value="<?php echo($discountpercent); ?>"><br><br>
  <label for="discountAmount">Discount Amount: $<?php echo(number_format($saleprice * $discountpercent / 100, 2)); ?></label><br><br>
  <label for="totalAmount">Total Price: $<?php echo(number_format($saleprice - ($saleprice * $discountpercent / 100), 2)); ?></label><br><br>
  <label for="submit">Are you sure? </label>
  <input type="submit" name="submit" value="Yes">
</form>
