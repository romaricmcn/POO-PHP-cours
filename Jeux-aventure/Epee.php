<?php
class Epee implements InterfaceArme {
    private int $durabilite;
    private string $type;

    public function __construct(int $durabilite, string $type) {
        $this->durabilite = $durabilite;
        $this->type = $type;
    }

    public function attaquer(): int {
        return rand(5,25);
    }
    public function afficher(): void {
        
    }
}