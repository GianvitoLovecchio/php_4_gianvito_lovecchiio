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

// trait operazioni
// {
//     public function sum($a, $b)
//     {
//         return $a + $b;
//     }
//     public function sub($a, $b)
//     {
//         return $a - $b;
//     }
//     public function mul($a, $b)
//     {
//         return $a * $b;
//     }
//     public function div($a, $b)
//     {
//         return $a / $b;
//     }
//     public function sqr($a)
//     {
//         return sqrt($a);
//     }
// }

// class Rettangolo
// {
//     use operazioni;

//     public $base, $altezza;

//     public function __construct(int $base, int $altezza)
//     {
//         $this->base = $base;
//         $this->altezza = $altezza;
//     }

//     public function area($base, $altezza)
//     {
//         $result = $this->mul($base, $altezza);
//         echo "il risultato del calcolo dell'area per il tuo rettangolo è: $result\n";
//     }

//     public function perimetro($base, $altezza) 
//     {
//         $result = $this->sum($this->mul($base, 2),$this->mul($altezza, 2));
//         echo "il risultato del calcolo del perimetro per il tuo rettangolo è: $result\n";
//     }

//     public function diagonale($base, $altezza)
//     {

//         $result = $this->sqr($this->sum($this->mul($base,$base),$this->mul($altezza,$altezza)));
//         echo "il risultato del calcolo della diagonale per il tuo rettangolo è: $result\n";
//     }

//     public function richiestaCalcolo(Rettangolo $rettangolo)
//     {
//         $selezione = readline("Digita 1 per calcolare l'aera,\nDigita 2 per calcolare il perimetro\nDigita 3 per calcolare la diagonale:\n");

//         switch($selezione)
//         {
//             case 1: $rettangolo->area($rettangolo->base, $rettangolo->altezza);
//             break;

//             case 2: $rettangolo->perimetro($rettangolo->base, $rettangolo->altezza);
//             break;

//             case 3: $rettangolo->diagonale($rettangolo->base, $rettangolo->altezza);
//             break;

//         }
//         $risp = readline("Vuoi effettuare un'altra operazione?\nSI, digita 1\nNO digita 0:\n");
//         return $risp;
//     }
// }

// $base = readline("Inserisci la base del rettangolo: \n");
// $altezza = readline("Inserisci l'altezza del rettangolo: \n");

// $myRett = new Rettangolo($base, $altezza);

// do{
//     $risp = $myRett->richiestaCalcolo($myRett);
// }while($risp == 1);

//ESERCIZIO 3

// abstract class CapoSuperiore
// {
//     abstract public function capoSuperioreType();
// }

// class Maglietta extends CapoSuperiore{
//     public function capoSuperioreType()
//     {
//         echo "Maglietta\n";
//     }
// }

// class Maglione extends CapoSuperiore{
//     public function capoSuperioreType()
//     {
//         echo "Maglione\n";
//     }
// }

// class Felpa extends CapoSuperiore{
//     public function capoSuperioreType()
//     {
//         echo "Felpa\n";
//     }
// }

// class Dolcevita extends CapoSuperiore{
//     public function capoSuperioreType()
//     {
//         echo "Dolcevita\n";
//     }
// }

// abstract class CapoInferiore
// {
//     abstract public function capoInferioreType();
// }

// class Jeans extends CapoInferiore{
//     public function capoInferioreType()
//     {
//         echo "Jeans\n";
//     }
// }

// class PantaloneTuta extends CapoInferiore{
//     public function capoInferioreType()
//     {
//         echo "Pantalone tuta\n";
//     }
// }

// class PantaloneElegante extends CapoInferiore{
//     public function capoInferioreType()
//     {
//         echo "Pantalone elegante\n";
//     }
// }

// class Bermuda extends CapoInferiore{
//     public function capoInferioreType()
//     {
//         echo "Bermuda\n";
//     }
// }

// abstract class Scarpe{
//     abstract public function scarpeType();
// } 

// class Mocassino extends Scarpe{
//     public function scarpeType()
//     {
//         echo "Mocassino\n";
//     }
// }
// class ScarpeGinnastica extends Scarpe{
//     public function scarpeType()
//     {
//         echo "Scarpe da ginnastica\n";
//     }
// }
// class Stivaletto extends Scarpe{
//     public function scarpeType()
//     {
//         echo "Stivaletto\n";
//     }
// }
// class Sandali extends Scarpe{
//     public function scarpeType()
//     {
//         echo "Sandali\n";
//     }
// }

// abstract class Accessori{
//     abstract public function accessoriType();
// }

// class Cintura extends Accessori 
// {
//     public function accessoriType()
//     {
//         echo "Cintura\n";
//     }
// }

// class Cappello extends Accessori 
// {
//     public function accessoriType()
//     {
//         echo "Cappello\n";
//     }
// }

// class OcchialiSole extends Accessori 
// {
//     public function accessoriType()
//     {
//         echo "Occhiali da sole\n";
//     }
// }

// class Sciarpa extends Accessori 
// {
//     public function accessoriType()
//     {
//         echo "Sciarpa\n";
//     }
// }


// class Outfit{
//     public $capoSupueriore, $capoInferiore, $scarpa, $accessorio;
//     public function __construct(CapoSuperiore $capoSuperiore, CapoInferiore $capoInferiore, Scarpe $scarpa, Accessori $accessorio)
//     {
//         $this->capoSupueriore = $capoSuperiore;
//         $this->capoInferiore = $capoInferiore;
//         $this->scarpa = $scarpa;
//         $this->accessorio = $accessorio;
//     }
// }

// $abbigliamento = new Outfit(new Maglione, new Jeans, new ScarpeGinnastica, new Cappello);

// $abbigliamento->capoSupueriore->capoSuperioreType();
// $abbigliamento->capoInferiore->capoInferioreType();
// $abbigliamento->scarpa->scarpeType();
// $abbigliamento->accessorio->accessoriType();

// ESERCIZIO 4

abstract class Defense
{
    abstract public function mostraSpecialitaDifesa();
}

class ScudoRespingente extends Defense
{
    public function mostraSpecialitaDifesa()
    {
        echo "Mi difendo utilizzando lo scudo che respinge i tuoi attacchi!\n";
    }
}
class DoppiaSchivata extends Defense
{
    public function mostraSpecialitaDifesa()
    {
        echo "Mi difendo schivando 2 dei tuoi attacchi!\n";
    }
}
class Teletrasporto extends Defense
{
    public function mostraSpecialitaDifesa()
    {
        echo "Mi difendo teletrasportandomi in un altro posto!\n";
    }
}
class Volo extends Defense
{
    public function mostraSpecialitaDifesa()
    {
        echo "MI difendo spiccando il volo!\n";
    }
}

abstract class Attack
{
    abstract public function mostraSpecialitaAttacco();
}

class PugnoMortale extends Attack
{
    public function mostraSpecialitaAttacco() 
    {
        echo "Ti attacco con un pugno letale!\n";    
    }
}
class SferaInfuocata extends Attack
{
    public function mostraSpecialitaAttacco() 
    {
        echo "Ti attacco lanciandoti una palla di fuoco!\n";    
    }
}
class CalcioVolante extends Attack
{
    public function mostraSpecialitaAttacco() 
    {
        echo "Ti attacco tirandoti un calcio al volo!\n";    
    }
}


class IronMan
{
    public $attack, $defense;

    public function __construct(Attack $attack, Defense $defense)
    {
        $this->attack = $attack;
        $this->defense = $defense;
    }
}

$azione = new IronMan(new SferaInfuocata,new ScudoRespingente);

$azione->attack->mostraSpecialitaAttacco();
$azione->defense->mostraSpecialitaDifesa();