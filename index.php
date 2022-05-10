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

    // definisco dei metodi cioè delle funzioni
    public function getTitolo(){
        return $this -> titolo;
    }

    public function getAnno(){
        return $this -> anno;
    }

    public function getRegista(){
        return $this -> regista;
    }

    public function getProduzione(){
        return $this -> produzione;
    }

}

// istanziamo il primo oggetto
$avatar = new Movie("Avatar", 2009, "James Cameron", "20th Century Fox");

// stampa a schermo del primo oggetto
echo "<p>Titolo: " . $avatar -> titolo . "</p>";
echo "<p>Anno: " . $avatar -> anno . "</p>";
echo "<p>Regista: " . $avatar -> regista . "</p>";
echo "<p>Casa di Produzione: " . $avatar -> produzione . "</p>";

echo $avatar -> titolo . " - " . $avatar -> anno . " - " . $avatar -> regista . " - " . $avatar -> produzione . "</p>";

// istanziamo il secondo oggetto
$avengers = new Movie("Avengers: Endgame", 2019, "Anthony e Joe Russo", "Marvel Studios");

// stampa a schermo del secondo oggetto usando i metodi, cioè le funzioni
echo "<p>-------------------------------------------------</p>";
echo "<p>Titolo: " . $avengers -> getTitolo() . "</p>";
echo "<p>Anno: " . $avengers -> getAnno() . "</p>";
echo "<p>Regista: " . $avengers -> getRegista() . "</p>";
echo "<p>Casa di Produzione: " . $avengers -> getProduzione() . "</p>";

echo $avengers -> getTitolo() . " - " . $avengers -> getAnno() . " - " . $avengers -> getRegista() . " - " . $avengers -> getProduzione() . "</p>";

?>
