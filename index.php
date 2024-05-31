<?php
// importo la classe genere
require_once "genre.php";
// importo la classe movie
require_once "movie.php";

// creo le istanze della classe genre
$genre1 = new Genre("Commedia");
$genre2 = new Genre("Thriller");
$genre3 = new Genre("Animazione");
$genre4 = new Genre("Azione");

// creo le istanze della classe movie
$movie1 = new Movie("Interstellar", 2014, $genre4);
$movie2 = new Movie("Una notte al museo", 2006, $genre1);
$movie3 = new Movie("I guardiano del destino", 2011, $genre2);
$movie4 = new Movie("Mulan", 1998, $genre3);

// stampa dei film
echo "Film 1:" . "<br>";
echo "Titolo : " . $movie1 -> getTitle() . "<br>";
echo "Anno di uscita: " . $movie1 -> getYear() . "<br>";
echo "Genere: " . $movie1 -> getGenre()-> getName() . "<br>";

echo "Film 2:" . "<br>";
echo "Titolo : " . $movie2 -> getTitle() . "<br>";
echo "Anno di uscita: " . $movie2 -> getYear() . "<br>";
echo "Genere: " . $movie2 -> getGenre()-> getName() . "<br>";

echo "Film 3:" . "<br>";
echo "Titolo : " . $movie3 -> getTitle() . "<br>";
echo "Anno di uscita: " . $movie3 -> getYear() . "<br>";
echo "Genere: " . $movie3 -> getGenre()-> getName() . "<br>";

echo "Film 4:" . "<br>";
echo "Titolo : " . $movie4 -> getTitle() . "<br>";
echo "Anno di uscita: " . $movie4 -> getYear() . "<br>";
echo "Genere: " . $movie4 -> getGenre()-> getName() . "<br>";
?>