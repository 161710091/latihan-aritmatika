<?php

	class angka {
		public $bil1, $bil2;

		function set_nilai ($bilangan1, $bilangan2){
			$this->bil1 = $bilangan1;
			$this->bil2 = $bilangan2;
		}

		function get_nilaitambah(){
			return $this->bil1 + $this->bil2;
		}

		function get_nilaikurang(){
			return $this->bil1 - $this->bil2;
		}

		function get_nilaikali(){
			return $this->bil1 * $this->bil2;
		}

		function get_nilaibagi(){
			return $this->bil1 / $this->bil2;
		}
	}

	$penjumlahan1 = new angka;
	$penjumlahan1->set_nilai(21,3);
	echo "Hasil Penjumlahan : ".$penjumlahan1->get_nilaitambah().'<br>';

	$pengurangan1 = new angka;
	$pengurangan1->set_nilai(21,3);
	echo "Hasil Pengurangan : ".$pengurangan1->get_nilaikurang().'<br>';

	$perkalian1 = new angka;
	$perkalian1->set_nilai(21,3);
	echo "Hasil Perkalian : ".$perkalian1->get_nilaikali().'<br>';

	$pembagian1 = new angka;
	$pembagian1->set_nilai(21,3);
	echo "Hasil Pembagian : ".$pembagian1->get_nilaibagi();

?>