<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "$cars[0]";
    echo "$cars[1]";

    <break>
    $colleges = array("UMBC" => "University Of Maryland, Baltimore County", "TU" => "Towson University", "UMD" => "University Of Maryland, College Park");
    echo "$colleges['UMBC']";
    echo "$colleges['TU']";

    $numbers = array(2, 4, 6, 8);
    unset($numbers[2]);
    echo $numbers[2];
    echo count($numbers);

    $highs = array("Mon" => 74, "Tue" => 70, "Wed" => 85, "Thu" => 90, "Fri" => 95);
    $days = array_keys($highs);
    $temps = array_values($highs);
    echo count($highs);
    echo sizeof($highs);
    echo array_sum($highs);
    echo temp_max($highs);
    echo temp_min($highs);
    echo array_search(90, $highs);

    $related = array("University","of","Maryland","Baltimore","County");
    $str2 = implode(" ", $related);
    echo $str2;

    $str = "University of Maryland Baltimore County and Towson University";
    $words = explode(" ", $str);
    echo $words[0];
    echo $words[1];
?>