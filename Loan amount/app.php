<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Loan interest calculator</h1>
    <form method="get">
        <input type="text" name="loanamt" placeholder="Loan Amount">
        <select name="years">
            <?php for ($i=1; $i <=30; $i++) {
                echo("<option value='$i'>$i years</option>");
            }
            ?>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
        if (isset($_GET['loanamt'])) {
            $loan_amt = $_GET['loanamt'];
            $years = $_GET['years'];

            if ($loan_amt > 300000) {
                $rate = 0.02;
            } else {
                $rate = 0.05;
            }
            echo ("The total interest will be " . ($loan_amt * $rate * $years));
        }
    ?>
</body>
</html>
