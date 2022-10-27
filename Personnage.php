<?php

class Personnage{

// Ceci est une propriété
private int $vie = 80;
private int $atk = 20;
private string $nom;

public function __construct(string $nom){
    $this->nom = $nom;
}


// Ceci est un méthode, une "action" que l'objet pourra effectuer
public function regenerate(int $vie = null){
    if($vie == null){
        $this->vie = 100;
    }
    else{
        $this->vie += $vie;
    }
    
}

public function setName($nom){
    $this->nom = $nom;
}

public function getName($nom){
    $this->nom = $nom;
}

public function shout(){
    echo $this->nom.": AHHHHHHH";
    echo "<br>";
    
}


public function Hit(){    
    $this->vie -= 10;
    $this->shout();
}


public function isdead(){
    return $this->vie <= 0;
}

public function isDead2(){
    if($this->vie == 0)
    {
        return false;
    }
    else {
        return true;
    }
}

/**
 * la fonction attaque 
 */
public function attack($cible){
    var_dump($cible);
    echo "<br>";
    // attaqué.vie - attaquant.atk;  
    $cible->vie -= $this->atk;
    var_dump($cible);
}
}

?>