<?php
abstract class AbstractModel {
    //ATTRIBUT
    private interfaceBDD $bdd;
    //GETTER & SETTER
    public function getBdd(): InterfaceBDD {
        return $this->bdd;
    }
    public function setBdd (interfaceBDD $bdd): self {
        $this->bdd = $bdd;
        return $this;
    }
    //METHODES
    abstract public function add(): void;
    abstract public function update(): void;
    abstract public function delete(): void;
    abstract public function getAll():array|null;
    abstract public function getById():array|null;
}