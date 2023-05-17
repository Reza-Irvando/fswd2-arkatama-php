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

class Cat extends Animal {
    public $jenis = "kucing";
    public $infounik = "Kucing adalah hewan yang suka bermain dan bersih.";

    function __construct($nama){
        $this->nama = $nama;
    }

    function getInfo(){
        return "Hewan ini adalah " . $this->nama . " jenis " . $this->jenis . ". " . $this->infounik;
    }
}

$cat = new Cat("Kitty");
echo $cat->getInfo();
?>