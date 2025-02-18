<?php
class Voleur extends Personnage {
    public function afficher(): void {
        echo "Voleur: $this->nom\n";
    }
}