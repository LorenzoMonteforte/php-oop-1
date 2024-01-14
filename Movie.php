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
        return $this->original_title . " è un film di genere " . $this->show_genre() . " diretto da " . $this->direction;
    }

    public function show_genre(){
        $genre = "";
        for($i=0; $i<sizeof($this->genre); $i++){
            if($i == (sizeof($this->genre)-1)){
                $genre = $genre . $this->genre[$i];
            }else{
                $genre = $genre . $this->genre[$i] . ", ";
            }
        }
        return $genre;
    }
}
