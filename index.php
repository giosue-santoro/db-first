<?php

$cars = [

    "car1" => [   
        "name" => "Jeep",
        "price" => 25000,
        "type" => "compact",
        "km" => 34000,
        "years" => 2,
        "colour" => "black",
        "fuel" => "gasoline",
        "seats" => 4,
        "plate" => "H1234",
        "cruiseControl" => false
    ],

    "car2" => [   
        "name" => "Porsche",
        "price" => 70000,
        "type" => "luxury",
        "km" => 12000,
        "years" => 1,
        "colour" => "red",
        "fuel" => "gasoline",
        "seats" => 2,
        "plate" => "A123B",
        "cruiseControl" => true
    ]

];

foreach ($cars as $car) {
        print_r($car);
        echo "<br>";
}

// print_r($car);
// echo "<br>";
?>