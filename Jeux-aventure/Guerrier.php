<?php
class Guerrier extends Personnage {
    public function afficher(): void {
        echo "Guerrier: $this->nom\n";
    }
}