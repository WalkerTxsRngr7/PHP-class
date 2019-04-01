<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="loanamt" id="" placeholder="Loan Amt">
        <select name = "years">
            <?php
                // use a for loop to allow for 1 - 30 years in the drop down
                for ($i=1; $i <31; $i++){
                    echo ("<option value='$i'>$i years </option>");
                }


            ?>

        </select>
        <input type="submit" value="Get Loan">
    
    </form>

    <?php
   
        if (isset ($_GET['loanamt'])) {  // if the form as been submitted
            $loan_amt = $_GET['loanamt']; //get the values submitted
            $years = $_GET['years'];

            if ($loan_amt > 300000) { //set the rate of the loan based on the amt
                $rate = .02;
            } else {
                $rate = .05;
            }

            //display the calculated interest amount
            echo ("Interest will be a total of " . ($loan_amt * $rate * $years));
        }

?>
</body>
</html>