<?php
require __DIR__ . '../Models/Production.php';
require __DIR__ . '../Models/Genre.php';
// require __DIR__ . '../Models/Movie.php';
//require __DIR__ . '../Models/TVserie.php';



$productions = [
    new Production('Dune', 'EN', 7, new Genre('action', 'an action production')),
    new Production('Fury', 'EN', 9, new Genre('action', 'an action production')),
    new Production('Avatar', 'EN', 6, new Genre('action', 'an action production')),
    new Production('Black Hawck Down', 'EN', 10, new Genre('action', 'an action production')),
    new Production('Idiocracy', 'EN', 8, new Genre('commedy', 'an commedy production')),
    new Production('Ali G Indahouse', 'EN', 9, new Genre('commedy', 'an commedy production')),
    new Production('The Walking Dead', 'EN', 7, new Genre('action', 'an action production')),
    new Production('Breaking Bad', 'EN', 8, new Genre('drama', 'an drama production'))
];
