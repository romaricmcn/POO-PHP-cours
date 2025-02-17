<?php

class InterfaceArme{
    //ATTRIBUTS
    private ?string $name;
    private ?string $type;

    //CONSTRUCTEUR
    private function __construct(?string $name, ?string $type){
        $this->name = $name;
        $this->type = $type;
    }

    private function getName (): ?string{
        return $this->name;
    }
    private function getType (): ?string{
        return $this->type;
    }
    public function setName (string $name): InterfaceArme{
        $this->name = $name;
        return $this;
    }
    public function setType (string $type): InterfaceArme{
        $this->type = $type;
        return $this;
    }
}