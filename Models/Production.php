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

    //getters
    public function getTitle()
    {
        return  $this->title;
    }
    public function getLenguage()
    {
        return  $this->lenguage;
    }
    public function getVote()
    {
        return  $this->vote;
    }

    //setters
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setLenguage($lenguage)
    {
        $this->lenguage = $lenguage;
    }
    public function setVote($vote)
    {
        $this->vote = $vote;
    }
}
