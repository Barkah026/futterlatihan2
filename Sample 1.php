<?php

Class Nilai{
	protected $cek_nilai;
	public function setNilai($nilai){
	if ($nilai >= 60){
		$this->cek_nilai = "Anda Lulus";
	}else {
		$this->cek_nilai = "Ansa Tidak Lulus";
	}
	}

	publick function getnilai(){
		return $this->cek_nilai;
	}
}

$obj = new Nilai;
$obj->setNilai(80);
echo $obj->getNilai();
?>