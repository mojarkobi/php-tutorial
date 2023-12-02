<?php
$queue = [
    "orange",
    "banana"
];

array_unshift($queue, "apple", "raspberry");  // array unshift  array te element add kore . ati array te samner theke element add kore 
var_dump($queue);
?>


example with associative array


<?php
$foods = [
    'apples' => [
        'McIntosh' => 'red',
        'Granny Smith' => 'green',
    ],
    'oranges' => [
        'Navel' => 'orange',
        'Valencia' => 'orange',
    ],
];
$vegetables = [
    'lettuce' => [
        'Iceberg' => 'green',
        'Butterhead' => 'green',
    ],
    'carrots' => [
        'Deep Purple Hybrid' => 'purple',
        'Imperator' => 'orange',
    ],
    'cucumber' => [
        'Kirby' => 'green',
        'Gherkin' => 'green',
    ],
];


array_unshift($foods, $vegetables);
var_dump($foods);

echo $foods[0]['lettuce']['Butterhead'];    
?>