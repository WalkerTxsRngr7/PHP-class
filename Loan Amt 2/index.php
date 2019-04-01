<?php    
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<h4>
		<?php
            todaysDate();
        ?>
	</h4>
	<h1>Do you Qualify?</h1>

	<?php
        include "qualify.php";
        if (isset($_GET['score'])) {
            $score = $_GET['score'];
            $age = $_GET['age'];

            if ($score > 680 && $age >= 18) {
                echo ("You qualify");
            } else {
                if ($age < 18) {
                    yearsToGo($age);
                }
                if ($score < 680) {
                    echo (diffInScore($score) . " more points to go");
                }
                echo("</br>You don't qualify");
            }
        }
        
    ?>
</body>

</html>