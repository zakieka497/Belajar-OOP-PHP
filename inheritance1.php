<?php 
 
 class Produk {
    public  $typemotor, 
            $jumlahroda, 
            $jenismotor,
            $motorkeluaran,
            $jumlahunit,
            $usia,
            $type;

            public function __construct( $typemotor = "typemotor", $jumlahroda = "jumlahroda", $jenismotor = "jenismotor", $motorkeluaran = "motorkeluaran" , $jumlahunit = 0, $usia = 0 , $type = "type") {
                $this->typemotor = $typemotor;
                $this->jumlahroda = $jumlahroda;
                $this->jenismotor = $jenismotor;
                $this->motorkeluaran = $motorkeluaran;
                $this->jumlahunit = $jumlahunit;
                $this->usia = $usia;
                $this->type = $type; 
            }

            public function getLabel() {
                return "$this->typemotor, $this->jumlahroda, $this->jenismotor, $this->motorkeluaran";
            }  
            
            public function getInfoLengkap () {
                $str = "{$this->type} : | {$this->getLabel()}"; 

                if ($this->type == "motor") {
                    $str .= " - {$this->jumlahunit} Unit.";
                }
                else if ( $this->type == "manusia") {
                    $str .= " - {$this->usia} Tahun.";
                }
                return $str;
            }
        }
        class motor extends produk {
          // public function getInfoLengkap(){

            //}
        }

        class cetakInfoProduk {
                public function cetak ( Produk $produk) {
                    $str = "{$produk->typemotor} | {$produk->getLabel()} {$produk->motorkeluaran}";
                    return $str;
                }
            }
    

  
        $produk1 = new motor("vario", "2", "matic", "2015", 1000, 0, "motor");
        //$produk2 = new Produk("mio", "2", "matic", "2000");
        $produk3 = new Produk("zaky", "1", "laki-laki", "2005", 0, 21, "manusia");
        


       // echo "Otomotif : " . $produk1->getLabel();
       // echo "<br>";
        //echo "Otomotif : " . $produk2->getLabel();
       // echo "<br>";
       // echo "namaorang : " . $produk3->getLabel();
        //var_dump($produk1, $produk2, $produk3);

       //$infoProduk = new cetakInfoProduk();
       //echo $infoProduk->cetak($produk1 );
       echo $produk1->getInfoLengkap();
       echo "<br>";
       echo $produk3->getInfoLengkap();