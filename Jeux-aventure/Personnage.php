<?php
include "/InterfaceArme.php";
class Personnage{
    //ATTRIBUT
    public ?string $name;
    public ?InterfaceArme $arme;
    public ?string $classe;

    //CONSTRUCTEUR
    public function __construct(string $name, ?string $arme, ?string $classe) {
        $this->name = $name;
        $this->arme = $arme;
        $this->classe = $classe;
    }
    public function getName(): ?string{
        return $this->name;
    }
    public function setName(string $name): Personnage{
        $this->name = $name;
        return $this;
    }
    public function getArme(): ?string{
        return $this->arme;
    }    
    public function setArme(string $arme): Personnage{
        $this->arme = $arme;
        return $this;
    }
    public function getClasse(): ?string{
        return $this->classe;
    }
    public function setClasse(string $classe): Personnage{
        $this->classe = $classe;
        return $this;
    }
    //METHODE
    public function attaquer(){

    }
}