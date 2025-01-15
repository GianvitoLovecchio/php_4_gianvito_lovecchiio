<?php

require_once 'class.php';

class Post {
    public $dettaglioTitolo, $categoria, $identificativoTag;

    public function __construct($titolo, Categoria $categoria, $tag)
    {
         $this -> dettaglioTitolo = $titolo;
         $this -> categoria = $categoria;
         $this -> identificativoTag = $tag;
    }
    public function printElement(){
        echo "Questo post $this->dettaglioTitolo appartiene alla categoria: ".$this->categoria->nomeCategoria." ed il suo tag è $this->identificativoTag";
    }
}
$cat = new Attualita;
$elemento = new Post("La crisi finanziaria", $cat, "italia");

$elemento->printElement();