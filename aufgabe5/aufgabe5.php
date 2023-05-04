<?php

abstract class Animal {
  abstract public function makeSound(): string;
  abstract public function eat(string $food): void;
}


class Hund extends Animal {
  public function makeSound(): string {
    return "Woof!";
  }

  public function eat(string $food): void {
    echo "The dog is eating " . $food;
  }
}


class Katze extends Animal {
  public function makeSound(): string {
    return "<br> Meow!";
  }

  public function eat(string $food): void {
    echo "The cat is eating " . $food;
  }
}


$hund = new Hund();
echo $hund->makeSound() . "<br>";
$hund->eat("bones") . "<br>";

$katze = new Katze();
echo $katze->makeSound() . "<br>";
$katze->eat("fish") . "<br>";
?>