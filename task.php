<?php

class Person {
    protected string $name;
    protected string $surname;
    protected ?string $middleName;

    public function __construct(string $name, string $surname, string $middleName = null) {
        $this->name = $name;
        $this->surname = $surname;
        $this->middleName = $middleName;
    }
    public function name(): string {
        return $this->name;
    }
    public function surname(): string {
        return $this->surname;
    }
    public function middleName(): ?string {
        return $this->middleName;
    }
}

$person = new Person("Vilis", "Bergmanis");
$person2 = new Person("Baiba", "Broka");
$person3 = new Person("Egils", "Melbardis", "Vladimirovičs");

echo "{$person->name()} {$person->middleName()} {$person->surname()}" . PHP_EOL;
echo "{$person2->name()} {$person2->middleName()} {$person2->surname()}" . PHP_EOL;
echo "{$person3->name()} {$person3->middleName()} {$person3->surname()}" . PHP_EOL;