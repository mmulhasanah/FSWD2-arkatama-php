<?php
class Animal
{
    private $nama;
    private $jenis;

    public function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo()
    {
        return "Hewan ini adalah {$this->nama} dengan jenis {$this->jenis}.";
    }
}

class Cat extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "kucing");
    }

    public function getInfo()
    {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Kucing ini suka memanjat pohon dan bermain dengan bola mainan.";
    }
}

class Dog extends Animal
{
    public function __construct($nama)
    {
        parent::__construct($nama, "anjing");
    }

    public function getInfo()
    {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Anjing ini setia dan pintar menjaga rumah tuannya.";
    }
}

// Membuat objek dari class Animal
$animal = new Animal("Singa", "Karnivora");
echo $animal->getInfo() . "<br><br>";

// Membuat objek dari class Cat
$cat = new Cat("mey");
echo $cat->getInfo() . "<br><br>";

// Membuat objek dari class Dog
$dog = new Dog("hely");
echo $dog->getInfo() . "<br><br>";