<?php

class Mobil
{
    public $Merek="mutsibisi";
    public $Roda="4";
    public $pintu="2";
    public $type = "Sport";
}

class MyClass
{
    public $prop1 = "I'm a class property!";

    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }
}

class Manusia
{
    public $tinggi;
    public $beratBadan;
    public $nama;

    public function setNama($namaInputan)
    {
        $this->nama=$namaInputan;
    }
    public function getNama()
    {
        return $this->nama;
    }
}
$obj = new MyClass;
echo $obj->prop1;
$mutsibisi = new Mobil;
$toyota = new Mobil;
$raisa = new Manusia;

$isyana->setNama('Isyana Saraswati');
echo "Nama Lengkap Isyana : ".$isyana->getNama();
