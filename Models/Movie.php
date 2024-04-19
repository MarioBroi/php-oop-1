<?php
require __DIR__ . '/Production.php';

/**
 * Genre Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class Movie extends Production
{
    public $profit;
    public $time;

    public function __construct(string $title, string $lenguage, int $vote, Genre $genre, int $profit, string $time)
    {
        parent::__construct($title,  $lenguage,  $vote, $genre);
        $this->profit = $profit;
        $this->time = $time;
    }
}
