<?php

// ESERCIZIO 1

// require_once 'class.php';

// class Post {
//     public $dettaglioTitolo, $categoria, $identificativoTag;

//     public function __construct($titolo, Categoria $categoria, $tag)
//     {
//          $this -> dettaglioTitolo = $titolo;
//          $this -> categoria = $categoria;
//          $this -> identificativoTag = $tag;
//     }
//     public function printElement(){
//         echo "Questo post $this->dettaglioTitolo appartiene alla categoria: ".$this->categoria->nomeCategoria." ed il suo tag è $this->identificativoTag";
//     }
// }
// $cat = new Attualita;
// $elemento = new Post("La crisi finanziaria", $cat, "italia");

// $elemento->printElement();

//ESERCIZIO 2
trait operazioni
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
    public function sub($a, $b)
    {
        return $a - $b;
    }
    public function mul($a, $b)
    {
        return $a * $b;
    }
    public function div($a, $b)
    {
        return $a / $b;
    }
    public function sqr($a)
    {
        return sqrt($a);
    }
}

class Rettangolo
{
    use operazioni;

    public $base, $altezza;

    public function __construct(int $base, int $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function area($base, $altezza)
    {
        $result = $this->mul($base, $altezza);
        echo "il risultato del calcolo dell'area per il tuo rettangolo è: $result\n";
    }

    public function perimetro($base, $altezza) 
    {
        $result = $this->sum($this->mul($base, 2),$this->mul($altezza, 2));
        echo "il risultato del calcolo del perimetro per il tuo rettangolo è: $result\n";
    }

    public function diagonale($base, $altezza)
    {
        
        $result = $this->sqr($this->sum($this->mul($base,$base),$this->mul($altezza,$altezza)));
        echo "il risultato del calcolo della diagonale per il tuo rettangolo è: $result\n";
    }

    public function richiestaCalcolo(Rettangolo $rettangolo)
    {
        $selezione = readline("Digita 1 per calcolare l'aera,\nDigita 2 per calcolare il perimetro\nDigita 3 per calcolare la diagonale:\n");

        switch($selezione)
        {
            case 1: $rettangolo->area($rettangolo->base, $rettangolo->altezza);
            break;
        
            case 2: $rettangolo->perimetro($rettangolo->base, $rettangolo->altezza);
            break;
        
            case 3: $rettangolo->diagonale($rettangolo->base, $rettangolo->altezza);
            break;
        
        }
        $risp = readline("Vuoi effettuare un'altra operazione?\nSI, digita 1\nNO digita 0:\n");
        return $risp;
    }
}

$base = readline("Inserisci la base del rettangolo: \n");
$altezza = readline("Inserisci l'altezza del rettangolo: \n");

$myRett = new Rettangolo($base, $altezza);

do{
    $risp = $myRett->richiestaCalcolo($myRett);
}while($risp == 1);




