<?php
const NAMES = [
    'Alina', 'Dima', 'Egor', 'Pavel', 'Sveta'
];

function createUsers()
{
    return [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
}
