<?php

/**
 * Genre Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class Genre
{
    public $name;
    public $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
}
