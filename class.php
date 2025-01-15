<?php

abstract class Categoria{
    abstract public function getMyCategory();
}

class Attualita extends Categoria{
    public function getMyCategory()
    {
        echo "Categoria selezionata: Attualità. \n";
    }
}
class Sport extends Categoria{
    public function getMyCategory()
    {
        echo "Categoria selezionata: Sport.\n";
    }
}
class Gossip extends Categoria{
    public function getMyCategory()
    {
        echo "Categoria selezionata: Gossip. \n";
    }
}
class Storia extends Categoria{
    public function getMyCategory()
    {
        echo "Categoria selezionata: Storia. \n";
    }
}

$catA = new Attualita;
$catA->getMyCategory();

$catSp = new Sport;
$catSp->getMyCategory();

$catG = new Gossip;
$catG->getMyCategory();

$catSt = new Storia;
$catSt->getMyCategory();