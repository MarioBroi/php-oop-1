<?php

/**
 * Production Class
 * @author Mario Broi
 * @copyright 2024 Mario Broi
 * @license OFM
 */
class Production
{
    public $title;
    public $lenguage;
    public $vote;
    public $genre;
    public $movie;


    //constructor method
    public function __construct(string $title, string $lenguage, int $vote, Genre $genre, Movie $movie)
    {
        $this->title = $title;
        $this->lenguage = $lenguage;
        $this->vote = $vote;
        $this->genre = $genre;
        $this->movie = $movie;
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
