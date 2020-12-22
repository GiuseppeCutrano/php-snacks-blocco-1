<?php

$matches = [

    [
        "home" => "Olimpia Milano",
        "visitors" => "Cantù",
        "score_home" => 102,
        "score_visitors" => 86
    ],

    [
        "home" => "Olimpiakos",
        "visitors" => "Real Madrid",
        "score_home" => 76,
        "score_visitors" => 56
    ],

    [
        "home" => "Boston Celtics",
        "visitors" => "Los Angeles Lakers",
        "score_home" => 108,
        "score_visitors" => 122
    ],


    [
        "home" => "Chicago Bulls",
        "visitors" => "Toronto Raptors",
        "score_home" => 131,
        "score_visitors" => 112
    ],




];



for($i=0;$i<count($matches);$i++) {
    echo $i+1 . ")  " . $matches[$i]["home"] . " - " . $matches[$i]["visitors"] . " | " . $matches[$i]["score_home"] . " - " . $matches[$i]["score_visitors"] . " <br>";
}
?>

