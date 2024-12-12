<?php
namespace PHP;
use PHP\System\Animal as Cachorro;
use PHP\System\Animal as Gato;
use DateTime;

$dog = new Cachorro(['id' => 1, 'nome' => 'Hercules', 'nascimento' => new DateTime()]);

echo $dog->getAnimal();

echo '<br>';
echo '<br>';

$dog->setAnimalBacth(['id' => 2, 'nome' => 'Zoiudo', 'nascimento' => null]);

echo $dog->getAnimal();

echo '<br>';
echo '<br>';