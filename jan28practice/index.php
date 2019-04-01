<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {color:red;}
    </style>
</head>
<body>
    <form method="get">
        <!-- <input type="text" name="age" placeholder="Age:"> -->
        <select name="age">
            <option value="15">15</option>
        <?php
            for ($i=1; $i < 101; $i++) {
                echo("<option value='$i'>$i years</option>");
            }
        ?>    

        </select>
        <input type="score" name="score" placeholder="Score">
        <input type="submit" value="Apply">

    </form>

    <?php
        if (isset($_GET['score'])) {
            $age = $_GET['age'];
            $score = $_GET['score'];

            if ($age < 18 || $score < 680)
            {
                echo("<p class='red'>You are not eligible to get a loan</p>");
            // } else if ($score < 680){
            //     echo("Your score is too low");
            } else {
                echo("<p>Yay! You can go into debt!</p>");
            }
        }
    ?>

    <?php
        // for($i = 0; $i < 31; $i++) {
        //     echo("<p>$i</p>");
        // }

    ?>
</body>
</html>