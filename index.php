<?php

/*
create un file index.php in cui:
- è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

*/

class Movie {

    public $titolo;
    public $regista;
    public $genere;
    public $anno;
    public $paese;
    public $durata;
    public $distribuzione;

    public function __construct($titolo, $genere, $anno) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno = $anno;
    }

    public function printInfo() {
       return 
        "<h1>" . $this -> titolo . "</h1>" . 
        "<p> Regista:" . ' ' . $this -> regista . "</p>" .
        "<p> Genere:" . ' ' . $this -> genere . "</p>" .
        "<p> Anno:" . ' ' . $this -> anno . "</p>" .
        "<p> Paese:" . ' ' . $this -> paese . "</p>" .
        "<p> Durata:" . ' ' . $this -> durata . "</p>" .
        "<p> Distribuzione:" . ' ' . $this -> distribuzione . "</p>" .
        "<hr>";

    }
}

$movie1 = new Movie('Divergent', 'Avventura, Azione, Sentimentale, Fantascienza', '2014');
$movie1->regista = "Neil Burger";
$movie1->paese = "USA";
$movie1->durata = "143 min";
$movie1->distribuzione = "Eagle Pictures";

echo $movie1->printInfo();



$movie2 = new Movie('The Butterfly Effect', ' Fantascienza, Thriller', '2003');
$movie2->regista = " J. Mackye Gruber, Eric Bress";
$movie2->paese = "USA";
$movie2->durata = "113 min";
$movie2->distribuzione = "CDI (2004)";

echo $movie2->printInfo();


?>