<?php

class Genre {
    private string $genre;

    // costruttore
    public function __construct(string $genre) {
        $this->genre = $genre;
    }
    
    // set
    public function setGenre(string $genre) {
        $this->genre = $genre;
    }

    // get controlla il dato in uscira
    public function getGenre() {

        return $this-> $genre;
    }

}

?>