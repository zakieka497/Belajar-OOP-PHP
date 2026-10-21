<?php
    // Define tidak bisa di gunakan untuk class (termasukOOP)
   // DEFINE('NAMA', 'eka zaky');
    //echo NAMA;
    
    //const bisa di gunakan dalam class (termasuk dalam OOP)
    class Coba {
        const Nama = 'Eka zaky';
    }

    echo Coba::Nama;

?>