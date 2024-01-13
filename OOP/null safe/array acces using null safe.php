<?php


$data = [
    'user' => [
        'profile' => [
            'name' => 'Alice',
            'age' => 30,
        ],
    ],
];

// Without null safe operator
$name = $data['user']['profile']['name'] ?? null; // this is ?? nullish coalescing operator work with array access directly but ?-> null safe operator not work

echo $name;