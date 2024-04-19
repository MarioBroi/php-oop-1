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

    public function getTitle()
    {
        return $this->title;
    }
    public function getLenguage()
    {
        return $this->lenguage;
    }
    public function getVote()
    {
        return $this->vote;
    }
}
