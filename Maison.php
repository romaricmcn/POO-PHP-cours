<?php
class Maison{
    //Attribut
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;

    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nom,?int $longueur, ?int $largeur){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    //GETTER ET SETTER
    public function getNom(): ?string{
        return $this->nom;
    }
    public function setNom(?string $nom): Maison{
        $this->nom = $nom;
        return $this;
    }
    public function getLongeur():?int{
        return $this->longueur;
    }

    public function setLongeur(?int $longueur): Maison{
        $this->longueur = $longueur;
        return $this;
    }
    public function getLargeur():?int{
        return $this->largeur;
    }

    public function setLargeur(?int $largeur): Maison{
        $this->largeur = $largeur;
        return $this;
    }

    //METHODE
    public function surface(): int{
        return $this->largeur*$this->longueur;
    }
}