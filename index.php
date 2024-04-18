<?php
class Production
{
    public $title;
    public $lenguage;
    public $vote;
}

$dune = new Production();
$fury = new Production();
$avatar = new Production();

$dune->title = 'Dune';
$dune->lenguage = 'EN';
$dune->vote = 7;

$fury->title = 'Fury';
$fury->lenguage = 'EN';
$fury->vote = 7;

$avatar->title = 'Avatar';
$avatar->lenguage = 'EN';
$avatar->vote = 7;

var_dump($dune, $fury, $avatar);
