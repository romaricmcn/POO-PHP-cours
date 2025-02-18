<?php
include "/InterfaceArme.php";
abstract class Personnage{
    //ATTRIBUT
    protected string $nom;
    protected InterfaceArme $arme;
    protected string $classe;

    //CONSTRUCTEUR
    public function __construct(string $name, ?InterfaceArme $arme, ?string $classe) {
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
    public function setArme(InterfaceArme $arme): Personnage{
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
    public function attaquer(): void {
        if ($this->arme instanceof ProjectileMagique) {
            if ($this instanceof Magicien) {
                $this->arme->attaquer();
            } else {
                echo "$this->nom ne peut pas utiliser un Projectile Magique !\n";
            }
        } else {
            echo "$this->nom attaque avec " . get_class($this->arme) . " et inflige " . $this->arme->attaquer() . " points de dégâts !\n";
        }
    }
}