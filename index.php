<!-- create un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo 
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valore delle relative proprietà -->

<?php
// definisco la classe 'Movie'
class Movie {
    // dichiaro delle variabili d'istanza
    public $titolo;
    public $anno;
    public $regista;
    public $produzione;

    // imposto un costruttore
    public function __construct($_titolo, $_anno, $_regista, $_produzione){
        $this -> titolo = $_titolo;
        $this -> anno = $_anno;
        $this -> regista = $_regista;
        $this -> produzione = $_produzione;
    }

}

// istanziamo il primo oggetto
$avatar = new Movie("Avatar", 2009, "James Cameron", "20th Century Fox");

// stampa a schermo del primo oggetto
echo "<p>" . $avatar -> titolo . "</p>";
echo "<p>" . $avatar -> anno . "</p>";
echo "<p>" . $avatar -> regista . "</p>";
echo "<p>" . $avatar -> produzione . "</p>";

echo $avatar -> titolo . " - " . $avatar -> anno . " - " . $avatar -> regista . " - " . $avatar -> produzione . "</p>";

// istanziamo il secondo oggetto
$avengers = new Movie("Avengers: Endgame", 2019, "Anthony e Joe Russo", "Marvel Studios");

// stampa a schermo del secondo oggetto
echo "<p>" . $avengers -> titolo . "</p>";
echo "<p>" . $avengers -> anno . "</p>";
echo "<p>" . $avengers -> regista . "</p>";
echo "<p>" . $avengers -> produzione . "</p>";

echo $avengers -> titolo . " - " . $avengers -> anno . " - " . $avengers -> regista . " - " . $avengers -> produzione . "</p>";

?>
