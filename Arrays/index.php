<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>A World of Arrays</h1>
    <?php
        //$frogs = array("Jumpy", "Charles", "Spike");
        //print_r($frogs); //prints all items in array, and positions
        //var_dump($frogs); //prints all items in array, positions, length of characters, and file type

        //echo($frogs[1]);

        //create a blank array
        //$frogClub = array();
        //print_r($frogClub);

        // $frogClub[] = "Fred"; //add item to the end of array
        // print_r($frogClub);
        // echo("<br>");
        // $frogClub[] = "Tom";
        // print_r($frogClub);
        // echo("<br>");
        // $frogClub[1] = "Godzilla";
        // print_r($frogClub);

        // for ($i = 0; $i<101; $i++) {
        //     $arry[] = random_int(0,100);
        // }
        //print_r($arry);

        // for ($j = 0; $j<101; $j++) {
        //     echo("<br>$arry[$j]");
        // }
        // foreach($arry as $value){
        //     echo "Value: $value <br>";
        // }

        $tax_rates = array("Hawaii" => 4.25, "Ca" => 8.25, "Mo" => 8.1);
        // print_r($tax_rates);
        // echo($tax_rates['Hawaii']);

        // foreach($tax_rates as $key=>$value){
        //     echo("$key: $value");
        // }

        $aryLetters = array("a", "b", "c", "d", "e");
        // foreach($aryLetters as $letters) {
        //     echo($letters);
        // }

        // unset($aryLetters[1]); //obliterate the 1 position and value
        // print_r($aryLetters);
        // $aryLettersb = array_values($aryLetters); //repositions the items in array
        // print_r($aryLetters);
        // echo("<br>");
        // print_r($aryLettersb);

        unset($tax_rates[1]);
        print_r($tax_rates);
        $tax_ratesb = array_values($tax_rates);
        echo("<br>");
        print_r($tax_ratesb);


    ?>
</body>
</html>