<?php
class Epee implements InterfaceArme {
    private int $durabilite;
    private string $type;

    public function __construct(int $durabilite, string $type) {
        $this->durabilite = $durabilite;
        $this->type = $type;
    }
}