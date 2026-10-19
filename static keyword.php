<?php

class ContohStatic {
    public static $angka = 2;

    public static function hallo() {
        return "hallo" . self::$angka++ . " kali.";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::hallo();
echo "<br>";
echo ContohStatic::hallo();

echo "<hr>";

class Contoh {
    public static $angka = 1 ;
    
    public function halo() {
        return "Hallo" . self::$angka++ . " Kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
