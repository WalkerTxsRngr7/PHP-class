<form action="" method="get">
	<input type="text" name="prevPrice" placeholder="Previous Price" <?php if (isset($prevPrice) && !is_numeric($prevPrice)) {
            echo ("class='error'");
        } ?> >
	<input type="text" name="currPrice" placeholder="Current Price" class="currbox" <?php if (!isset($currPrice) || !is_numeric($currPrice)) {
            echo ("class='error'");
        } ?>>
	<input type="submit" value="Calculate">

</form>