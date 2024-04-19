<?php

/**
 * Genre Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class Movie
{
    public $profit;
    public $time;

    public function __construct(string $profit, string $time)
    {
        $this->profit = $profit;
        $this->time = $time;
    }
}