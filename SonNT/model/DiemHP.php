<?php
class DiemHP {
	private $id;
	private $maSinhVien;
	private $maLop;
	private $diemQT;
	private $diemKT;
	private $hocKy;
	
	function DiemHP($id, $maSinhVien, $maLop, $diemQT, $diemKT, $hocKy) {
		$this->id = id;
		$this->maSinhVien = maSinhVien;
		$this->maLop = maLop;
		$this->diemQT = diemQT;
		$this->diemKT = diemKT;
		$this->hocKy = hocKy;
	}
	function getID() {
		return $this->id;
	}
	function setID($id) {
		$this->id = id;
	}
	function getMaSinhVien() {
		return $this->maSinhVien;
	}
	function setMaSinhVien($maSinhVien) {
		$this->maSinhVien = $maSinhVien;
	}
	function getMaLop() {
		return $this->maLop;
	}
	function setMaLop($maLop) {
		$this->maLop = $maLop;
	}
	function getDiemQT() {
		return $this->diemQT;
	}
	function setDiemQT($diemQT) {
		$this->diemQT = $diemQT;
	}
	function getDiemKT() {
		return $this->diemKT;
	}
	function setDiemKT($diemKT) {
		$this->diemKT = $diemKT;
	}
	function getHocKy() {
		return $this->hocKy;
	}
	function etHocKy($hocKy) {
		$this->hocKy = $hocKy;
	}
}
?>