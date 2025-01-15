<?php

abstract class Categoria{
    abstract public function getMyCategory();
}

class Attualita extends Categoria{
    public $nomeCategoria;
    public function __construct(){
        $this -> nomeCategoria =  "Attualità";
    }
    public function getMyCategory()
    {
        echo "Categoria selezionata: {$this->nomeCategoria}. \n";
    }
}
class Sport extends Categoria{
    public $nomeCategoria;
    public function __construct(){
        $this -> nomeCategoria =  "Sport";
    }
    public function getMyCategory()
    {
        echo "Categoria selezionata: {$this->nomeCategoria}.\n";
    }
}
class Gossip extends Categoria{
    public $nomeCategoria;
    public function __construct(){
        $this -> nomeCategoria = "Gossip"; 
    }
    public function getMyCategory()
    {
        echo "Categoria selezionata: {$this->nomeCategoria}. \n";
    }
}
class Storia extends Categoria{
    public $nomeCategoria;
    public function __construct(){
        $this -> nomeCategoria =  "Storia";
    }
    public function getMyCategory()
    {
        echo "Categoria selezionata: {$this->nomeCategoria}. \n";
    }
}

// $catA = new Attualita;
// $catA->getMyCategory();

// $catSp = new Sport;
// $catSp->getMyCategory();

// $catG = new Gossip;
// $catG->getMyCategory();

// $catSt = new Storia;
// $catSt->getMyCategory();