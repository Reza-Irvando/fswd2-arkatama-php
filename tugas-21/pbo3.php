<?php
class Animal {
    public $nama;
    public $jenis;

    function __construct($nama, $jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    function getInfo(){
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis;
    }
}

class Dog extends Animal {
    public $jenis = "anjing";
    public $infounik = "Anjing adalah hewan yang setia dan cerdas.";

    function __construct($nama){
        $this->nama = $nama;
    }

    function getInfo(){
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . $this->infounik;
    }
}

$dog = new Dog("Buddy");
echo $dog->getInfo();
?>