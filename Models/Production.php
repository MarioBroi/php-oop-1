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
