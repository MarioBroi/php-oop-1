<?php
require __DIR__ . '../Models/Production.php';
require __DIR__ . '../Models/Genre.php';
require __DIR__ . '../Models/Movie.php';


$productions = [
    new Production('Dune', 'EN', 7, new Genre('action', 'an action production'), new Movie(433758183, '2h 35m')),
    new Production('Fury', 'EN', 9, new Genre('action', 'an action production'), new Movie(211817906, '2h 15m')),
    new Production('Avatar', 'EN', 6, new Genre('action', 'an action production'), new Movie(2923706026, '2h 35m')),
    new Production('Black Hawck Down', 'EN', 10, new Genre('action', 'an action production'), new Movie(172989651, '2h 25m')),
    new Production('Idiocracy', 'EN', 8, new Genre('commedy', 'an action production'), new Movie(495303, '1h 24m')),
    new Production('Ali G Indahouse', 'EN', 9, new Genre('commedy', 'an action production'), new Movie(25900000, '1h 25m')),
];
