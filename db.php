<?php
require __DIR__ . '../Models/Production.php';
require __DIR__ . '../Models/Genre.php';
require __DIR__ . '../Models/Movie.php';
require __DIR__ . '../Models/TVserie.php';

/* $productions = [
    new Production('Dune', 'EN', 7, new Genre('action', 'an action production')),
    new Production('Fury', 'EN', 9, new Genre('action', 'an action production')),
    new Production('Avatar', 'EN', 6, new Genre('action', 'an action production')),
    new Production('Black Hawck Down', 'EN', 10, new Genre('action', 'an action production')),
    new Production('Idiocracy', 'EN', 8, new Genre('commedy', 'an commedy production')),
    new Production('Ali G Indahouse', 'EN', 9, new Genre('commedy', 'an commedy production')),
    new Production('The Walking Dead', 'EN', 7, new Genre('action', 'an action production')),
    new Production('Breaking Bad', 'EN', 8, new Genre('drama', 'an drama production'))
]; */

$movies =
    [
        new Movie('Dune', 'EN', 7, new Genre('science', 'adventure', 'an science and adventure production'), '$433,758,183.00', '2h 35m'),
        new Movie('Fury', 'EN', 9, new Genre('war', 'drama', 'an war and drama production'), '$211,817,906.00', '2h 15m'),
        new Movie('Avatar', 'EN', 6, new Genre('action', 'adventure', 'an action and adventure  production'), '$2,923,706,026.00', '2h 42m'),
        new Movie('Black Hawck Down', 'EN', 10, new Genre('action', 'war', 'an action and war production'), '$172,989,651.00', '2h 25m')
    ];

$tvShows =
    [
        new TVserie('Breaking Bad', 'EN', 7, new Genre('drama', 'crime', 'an drama and crime production'), 5),
        new TVserie('Altered Carbon', 'EN', 9, new Genre('sci-fi', 'fantasy', 'an sci-fi and fantasy production'), 2),
        new TVserie('Sense8', 'EN', 6, new Genre('sci-fi', 'fantasy', 'an sci-fi and fantasy production'), 2),
        new TVserie('Formula 1, Drive to Survive', 'EN', 8, new Genre('documentary', 'sport', 'an documentary production'), 6)
    ];
