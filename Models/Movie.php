<?php
/* require __DIR__ . '/Production.php'; */

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

    public function __construct(string $title, string $lenguage, int $vote, Genre $genre, string $profit, string $time)
    {
        parent::__construct($title,  $lenguage,  $vote, $genre);
        $this->profit = $profit;
        $this->time = $time;
    }

    public function getProfit()
    {
        return  $this->profit;
    }

    public function getTime()
    {
        return  $this->time;
    }

    public function setProfit($profit)
    {
        $this->profit = $profit;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }
}
