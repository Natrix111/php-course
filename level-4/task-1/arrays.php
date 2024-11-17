<?php
$array = [
    'peoples' => [
        'men' => [
            'ivan' => [
                ['weight' => '60 кг'],
                ['height' => '180 см'],
            ]
        ]
    ]
];

$array['peoples']['men']['ivan'][] = ['iq' => 90];

echo $array['peoples']['men']['ivan']['weight'];

