<?php 
 
 class Produk {
    private $typemotor, 
            $jumlahroda, 
            $jenismotor,
            $motorkeluaran,
            $jumlahunit,
            $type;

    protected $usia;

            public function __construct( $typemotor = "typemotor", $jumlahroda = "jumlahroda", $jenismotor = "jenismotor", $motorkeluaran = "motorkeluaran" , $jumlahunit = 0, $usia = 0 , $type = "type") {
                $this->typemotor = $typemotor;
                $this->jumlahroda = $jumlahroda; 
                $this->jenismotor = $jenismotor;
                $this->motorkeluaran = $motorkeluaran;
                $this->jumlahunit = $jumlahunit;
                $this->usia = $usia;
                $this->type = $type; 
                
            }

            public function settypemotor($typemotor) {
                if ( !is_string ($typemotor)) {
                    throw new Exception("harus huruf, tidak boleh angka!");
                }
                    $this->typemotor = $typemotor;
            }
            public function gettypemotor() {
                return $this->typemotor;
            }


            public function setjumlahroda($jumlahroda) {
                $this->jumahroda = $jumlahroda;
            }
            public function getjumlahroda() {
                return $this->jumlahroda;
            }


            public function setjenismotor($jenismotor) {
                $this->jenismotor = $jenismotor;
            }
            public function getjenismotor() {
                return $this->jenismotor;
            }


            public function setmotorkeluaran($motorkeluaran) {
                $this->motorkeluaran = $motorkeluaran;
            }
            public function getmotorkeluaran() {
                return $this->motorkeluaran;
            }


            public function setjumlahunit($jumlaunit) {
                $this->jumlahunit = $jumlahunit;
            }
            public function getjumlahunit() {
                return $this->jumlahunit;
            }


            public function settype($type) {
                $this->type = $type;
            }
            public function gettype() {
                return $this->type;
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
            public $jumlahunit; 

            public function __construct( $typemotor = "typemotor", $jumlahroda = "jumlahroda", $jenismotor = "jenismotor", $motorkeluaran = "motorkeluaran" , $jumlahunit = 0, $usia = 0 , $type = "type") {

                parent::__construct ( $typemotor, $jumlahroda, $jenismotor, $motorkeluaran, $jumlahunit, $usia, $type); 

                   $this ->jumlahunit = $jumlahunit; 
                }

            public function getInfoLengkap(){
                $str = "Otomotif : " .parent::getInfolengkap() . "";
                return $str;
            }
            //public function gettype() {
               // return $this->type;
            //}
        }
         


        class manusia extends produk {
             //public $type; 

            public function __construct( $typemotor = "typemotor", $jumlahroda = "jumlahroda", $jenismotor = "jenismotor", $motorkeluaran = "motorkeluaran" , $jumlahunit = 0, $usia = 0 , $type = "type") {

                parent::__construct ( $typemotor, $jumlahroda, $jenismotor, $motorkeluaran, $jumlahunit, $usia, $type); 

                   //$this ->saya= $saya; 
                }
            public function getInfoLengkap() {
                $str = "Makhluk hidup : " .parent::getInfoLengkap() . " - {$this -> usia}";
                return $str;
            }
        }


        class cetakInfoProduk {
            public $daftarProduk = array ();

            public function tambahProduk ( Produk $produk) {
                $this->daftarProduk [] = $produk;
            }


        public function cetak() {
         $str = "DAFTAR PRODUK : <br>";
            foreach ( $this->daftarProduk as $p) {
                $str .= "- {$p->getInfoLengkap()} <br>";
         }
            return $str;
             }
                }
    

  
        $produk1 = new motor("vario", "2", "matic", "2015", 1000, 0, "motor");
        $produk2 = new Produk("mio", "4", "matic", "2000", 1000, 0 ,"motor");
        $produk3 = new Produk("zaky", "1", "laki-laki", "2005", 0, 21, "manusia");
         
        $CetakProduk = new cetakInfoProduk();
        $CetakProduk->tambahProduk ( $produk1 );
        $CetakProduk->tambahProduk ( $produk2 );
        $CetakProduk->tambahProduk ( $produk3 );
        echo $CetakProduk->cetak();


       // echo "Otomotif : " . $produk1->getLabel();
       // echo "<br>";
        //echo "Otomotif : " . $produk2->getLabel();
       // echo "<br>";    
       // echo "namaorang : " . $produk3->getLabel();
        //var_dump($produk1, $produk2, $produk3);

       //$infoProduk = new cetakInfoProduk();
       //echo $infoProduk->cetak($produk1 );
    //    echo $produk1->getInfoLengkap();
    //    echo "<br>";
    //    echo $produk2->getInfoLengkap();
    //    echo "<br>";
    //    echo $produk3->getInfoLengkap();
    //    echo"<hr>";

    //    //echo $produk1->gettype();
    //    //echo $produk1->gettypemotor();
    //    $produk1->settypemotor("beat");
    //    echo $produk1->gettypemotor();
    //    echo "<br>";
    //    $produk1->setjenismotor("motor");
    //    echo $produk1->getjenismotor();

       