<?php
require __DIR__ . '/Production.php';

/**
 * Genre Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class TVserie extends Production
{
    public $seasons;

    public function __construct(string $title, string $lenguage, int $vote, Genre $genre, string $seasons)
    {
        parent::__construct($title,  $lenguage,  $vote, $genre, $seasons);
        $this->seasons = $seasons;
    }
}
