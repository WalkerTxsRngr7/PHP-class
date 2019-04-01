<!DOCTYPE html>
<html lang="en">
<!-- 
    Walker Gross
    CIS 239
    2/11/19
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sally Shades</title>
</head>
<body>
    <h1>Sally Shady of Shady Shades Sunglass Shack</h1>
    <?php
    if (empty($_GET['name'])) {
        include "newsletter.php"; //load form if info is empty
    }
    else {
        include "display.php"; //load thank you page is info is filled
    }
    ?>
</body>
</html>