<?php

/**
 * Genre Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class Genre
{
    public $first;
    public $second;
    public $description;

    public function __construct(string $first, string $second, string $description)
    {
        $this->first = $first;
        $this->second = $second;
        $this->description = $description;
    }
}
