<?php
/* require __DIR__ . '/Production.php'; */

/**
 * Genre Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class TVserie extends Production
{
    public $seasons;

    public function __construct(string $title, string $lenguage, int $vote, Genre $genre, int $seasons)
    {
        parent::__construct($title,  $lenguage,  $vote, $genre);
        $this->seasons = $seasons;
    }

    public function getSeasons()
    {
        return  $this->seasons;
    }

    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;
    }
}
