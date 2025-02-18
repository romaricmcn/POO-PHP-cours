<?php
class Magicien extends Personnage {
    private int $mana;
    
    //METHODE
    public function attaquer(): void {
        if ($this->arme instanceof ProjectileMagique) {
            if ($this->mana > 0) {
                $this->mana -= 1;
                echo "$this->nom lance un projectile magique ! Mana restant : $this->mana\n";
                if ($this->mana <= 0) {
                    echo "$this->nom n'as plus de jus !\n";
                }
            } else {
                echo "$this->nom n'a plus de mana !\n";
            }
        } else {
            parent::attaquer();
        }
    }
}