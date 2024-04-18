<?php

/**
 * Proction class
 */
class Production
{
    public $title;
    public $lenguage;
    public $vote;

    //constructor method
    public function __construct(string $title, string $lenguage, int $vote)
    {
        $this->title = $title;
        $this->lenguage = $lenguage;
        $this->vote = $vote;
    }
}

$dune = new Production('Dune', 'EN', 7);

//$dune->title = 'Dune';
//$dune->lenguage = 'EN';
//$dune->vote = 7;

$fury = new Production('Fury', 'EN', 9);

//$fury->title = 'Fury';
//$fury->lenguage = 'EN';
//$fury->vote = 9;

$avatar = new Production('Avatar', 'EN', 6);

//$avatar->title = 'Avatar';
//$avatar->lenguage = 'EN';
//$avatar->vote = 6;

//var_dump($dune->title, $dune->lenguage, $dune->vote);
//var_dump($fury->title, $fury->lenguage, $fury->vote);
//var_dump($avatar->title, $avatar->lenguage, $avatar->vote);

//print all the results
echo ('Movie name: ' . $dune->title . ' | Lenguage: ' . $dune->lenguage . ' | Vote: ' . $dune->vote . '<hr>');
echo ('Movie name: ' . $fury->title . ' | Lenguage: ' . $fury->lenguage . ' | Vote: ' . $fury->vote . '<hr>');
echo ('Movie name: ' . $avatar->title . ' | Lenguage: ' . $avatar->lenguage . ' | Vote: ' . $avatar->vote . '<hr>');
