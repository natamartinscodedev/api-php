<?php
namespace PHP\System;

class Cachorro extends Animal {
    public function __construct(?array $animal = null) {
        parent::__construct($animal);
    }

    public function getAnimal(): string {
        $nome = parent::getAnimal();
        return "{$nome} - é um cachorro";
    }
}