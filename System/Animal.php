<?php
namespace PHP\System;

use DateTime;
class Animal
{
    private int $id;
    private string $name;
    private ?float $idadeMes;

    private ?DateTime $nascimento;

    public function __construct(?array $animal = null)
    {
        if (!is_null($animal)) {
            $this->setAnimalBacth($animal);
        }
    }
    protected function getAnimal(): string
    {
        return "Nome: {$this->name} Idade: {$this->idadeMes}";
    }

    protected function setAnimal(int $id, string $nome, DateTime $nascimento): void
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idadeMes = (float) $nascimento->format("m");
        $this->nascimento = $nascimento;
    }

    public function setAnimalBacth(array $animalBacth): void
    {
        $this->id = (int) $animalBacth['id'];
        $this->nome = (string) $animalBacth['nome'];
        $this->nascimento = $animalBacth['nascimento'];
        $this->idadeMes = ($animalBacth['nascimento'] instanceof DateTime) ? (float) $animalBacth['nascimento']->format('m') : null;
    }
}