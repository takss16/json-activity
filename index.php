<?php
header('Access-Control-Allow-Origin: *');
// root

$country = [
    [
        "name" => "United States",
        "population" => "331,449,281",
        "area" => "9,826,630 sq km",
        "government" => "federal presidential constitutional republic",
        "bordering" => ["Canada", "Mexico", "Bahamas", "Cuba", "Rusia"]
    ],
    [
        "name" => "Japan",
        "population" => "126,050,000",
        "area" => "377,915 sq km",
        "government" => "unitary parliamentary constitutional monarchy",
        "bordering" => ["China", "North Korea", "South Korea", "Taiwan", "Philippines"]
    ],
    [
        "name" => "Canada",
        "population" => "38,048,738",
        "area" => "9,984,670 sq km",
        "government" => "federal parliamentary constitutional monarchy",
        "bordering" => ["United States", "maritime", "Greenland", "Denmark", "Saint Pierre"]
    ],
    [
        "name" => "Brazil",
        "population" => "213,993,437",
        "area" => "8,515,767 sq km",
        "government" => "federal presidential constitutional republic",
        "bordering" => ["Argentina", "Bolivia", "Colombia", "Uruguay", "Venezuela"]
    ],
    [
        "name" => "Italy ",
        "population" => "60,403,437",
        "area" => "301,340 sq km",
        "government" => "state and a prime minister serving as the head of government",
        "bordering" => ["Austria", "France", "San Marino", "Slovenia", "Switzerland"]
    ]
];

$data = json_encode($country);
echo $data;
?>
