<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="summary.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="address" placeholder="Address">
        
        <p>Item:</p>

        <select name="products">
        <?php 
            include "database.php";
            $sql = "SELECT * FROM `products`";
            $qry = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($qry)){
                extract ($row);
                
                echo "<option value=$productID>$productName</option>";
            }
        ?>   
        </select>
        
        <p>Quantity:</p>

        <select name="quantity">
            <?php 
                for ($i=1; $i<=10; $i++){
                    echo "<option value=$i>$i</option>";
                }
            ?>
        </select>
        
        <input type="submit" value="submit">
    </form>
</body>
</html>
