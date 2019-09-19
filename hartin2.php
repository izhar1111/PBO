<?php

	class elektronik {
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = "Merek Hp", $pnrbt = "Type Hp", $nmpnls = "Nama Perusahaan", $hal = "Tahun Rilis"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Merek Hp : {$this->jdl}, <br>Type Hp : {$this->pnrbt}, <br>Nama Perusahaan : {$this->nmpnls}, <br>Tahun Rilis : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends elektronik {

		public function getinfoBook(){
			$bku = "HANDPHONE 1 : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends elektronik{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = "HANDPHONE 2 : ".parent::getinfoBook()."<br>Harga : {$this->rwyt}";
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("OPPO", "Oppo A7", "Pt. World Innovative Telecomunication", "2018");
	$bku2 = new BukuDua("Apple", "iPhone X", "Foxconn", "2017", "Rp. 11.000.000");

	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>