<form method="post">
    <input type="text" name="fName" placeholder="First Name">
    <input type="text" name="lName" placeholder="Last Name">
    <select name="products">
        <?php 
            // include "database.php";
            // $sql = "SELECT * FROM `products`";
            // $qry = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($qry)){
                extract ($row);
                
                echo "<option value=$productID>$productName</option>";
        }
    ?>   
    </select>

    <select name="qty">
        <?php 
            for ($i=1; $i<=10; $i++){
                echo "<option value=$i>$i</option>";
            }
        ?>
    </select>

    <input type="submit" value="submit">

</form>