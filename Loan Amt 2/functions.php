<?php
    function todaysDate() {
        echo("Todays new date is " . date('m/d/y'));
    }

    function yearsToGo($age) {
        $remainingYears = 18 - $age;
        echo("You have $remainingYears years to go");
    }

    function diffInScore($score) {
        $minScore = 680;
        return $minScore - $score;
    }
?>