<?php
class Movie
{
    public $original_title;
    public $genre;
    public $direction;

    function __construct($titolo_originale, $genere, $regia)
    {
        $this->original_title = $titolo_originale;
        $this->genre = $genere;
        $this->direction = $regia;
    }

    public function description()
    {
        return $this->original_title . " è un film di genere " . $this->genre . " diretto da " . $this->direction;
    }
}
