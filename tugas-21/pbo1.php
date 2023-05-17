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

$animal1 = new Animal("Harimau", "karnivora");

echo $animal1->getInfo();
?>