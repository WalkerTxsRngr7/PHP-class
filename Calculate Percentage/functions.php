<?php
    function todaysDate() {
        echo(date('m/d/y'));
    }

    function calcChange($prevPrice, $currPrice) {
        $change = (($currPrice - $prevPrice)/$prevPrice)*100;
        echo("<h3>The change from $prevPrice to $currPrice is $change%</h3>");
    }