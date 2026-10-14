<?php 
 
 class Produk {
    public  $typemotor, 
            $jumlahroda, 
            $jenismotor,
            $motorkeluaran;

            public function __construct( $typemotor = "typemotor", $jumlahroda = "jumlahroda", $jenismotor = "jenismotor", $motorkeluaran = "motorkeluaran" ) {
                $this->typemotor = $typemotor;
                $this->jumlahroda = $jumlahroda;
                $this->jenismotor = $jenismotor;
                $this->motorkeluaran = $motorkeluaran;
            }

            public function getLabel() {
                return "$this->typemotor, $this->jumlahroda, $this->jenismotor, $this->motorkeluaran";
            }
 }

        $produk1 = new Produk("vario", "2", "matic", "2015");
        $produk2 = new Produk("mio", "2", "matic", "2000");
        $produk3 = new Produk("zaky", "1", "laki-laki", "2005");
        


        echo "Otomotif : " . $produk1->getLabel();
        echo "<br>";
        echo "Otomotif : " . $produk2->getLabel();
        echo "<br>";
        echo "namaorang : " . $produk3->getLabel();
       //var_dump($produk1, $produk2, $produk3);