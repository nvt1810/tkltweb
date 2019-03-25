<?php
class TimeTable {
	private $thoiGian;
	private $tuanHoc;
	private $phongHoc;
	private $maLop;
	private $loaiLop;
	private $nhom;
	private $maHP;
	private $tenLop;
	private $ghiChu;
	
	function TimeTable($thoiGian, $tuanHoc, $phongHoc, $maLop, $loaiLop, $nhom, $maHP, $tenLop, $ghiChu) {
		$this->thoiGian = $thoiGian;
		$this->tuanHoc = $tuanHoc;
		$this->phongHoc = $phongHoc;
	}
	function getThoiGian() {
		return $this->thoiGian;
	}
	function setThoiGian($thoiGian) {
		$this->thoiGian = $thoiGian;
	}
	function getTuanHoc() {
		return $this->tuanHoc;
	}
	function setTuanHoc($tuanHoc) {
		$this->tuanHoc = $tuanHoc;
	}
}
?>