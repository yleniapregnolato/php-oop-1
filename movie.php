<?php
class Movie {
    private string $title;
    private int $year;
    private Genre $genre;

    // costruttore
    public function __construct(string $title, int $year, Genre $genre) {
        $this -> Titolo = $title;
        $this -> Anno = $year;
        $this -> Genere = $genre;
    }

    
}


?>