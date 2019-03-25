<?php
class DiemToeic {
	private $id;
	private $maSinhVien;
	private $diemDoc;
	private $diemNghe;
	private $ngayThi;
	
	function DiemToeic($id, $maSinhVien, $diemDoc, $diemNghe, $ngayThi) {
		$this->id = id;
		$this->maSinhVien = $maSinhVien;
		$this->diemDoc = $diemDoc;
		$this->diemNghe = $diemNghe;
		$this->ngayThi = $ngayThi;
	}
	function getID() {
		return $this->id;
	}
	function setID($id) {
	 	$this->id = id;
	}
	function getMaSinhVien() {
		return $this->maSinhVien = maSinhVien;
	}
	function setMaSinhVien($maSinhVien) {
		$this->maSinhVien = $maSinhVien;
	}
	function getDiemDoc() {
		return $this->diemDoc;
	}
	function setDiemDoc($diemDoc) {
		$this->diemDoc = $diemDoc;
	}
	function getDiemNghe() {
		return $this->diemNghe;
	}
	function setDiemNghe($diemNghe) {
		$this->diemNghe;
	}
	function getNgayThi() {
		return $this->ngayThi;
	}
	function setNgayThi($ngayThi) {
		$this->ngayThi = $ngayThi;
	}
}
?>