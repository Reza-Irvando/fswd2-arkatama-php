<?php
class Animal {
    public $nama;
    public $jenis;

    function __construct($nama, $jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    function getInfo(){
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . "<br>";
    }
}

class Cat extends Animal {
    public $jenis = "kucing";
    public $infounik = "Kucing adalah hewan yang suka bermain dan bersih.";

    function __construct($nama){
        $this->nama = $nama;
    }

    function getInfo(){
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . $this->infounik . "<br>";
    }
}

class Dog extends Animal {
    public $jenis = "anjing";
    public $infounik = "Anjing adalah hewan yang setia dan cerdas.";

    function __construct($nama){
        $this->nama = $nama;
    }

    function getInfo(){
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . $this->infounik . "<br>";
    }
}

$animal1 = new Animal("Harimau", "karnivora");
$cat = new Cat("Kitty");
$dog = new Dog("Buddy");

echo $animal1->getInfo();
echo $cat->getInfo();
echo $dog->getInfo();
?>