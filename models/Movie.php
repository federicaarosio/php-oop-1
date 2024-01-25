<?php

class Movie {
    // Variabili
    public $title;
    public $listOfGenres;
    public $director;
    public $synopsis;

    // Costruttore
    /**
     * Construct a new movie
     *
     * @param string $_title Movie's name
     * @param string $_genre Movie's genre
     * @param string $_director Movie's director
     * @param string|null $_synopsis Movie's short synopsis
     */
    function __construct(string $_title, array $_listOfGenres = null, string $_director, string $_synopsis = null) {
        $this -> title = $_title;
        $this -> listOfGenres = $_listOfGenres;
        $this -> director = $_director;
        $this -> synopsis = $_synopsis;
    }

    
    //Metodi
    public function getMovie() {
        echo "Titolo: " . this->title . " directed by: " . this->director;
    }
    
}