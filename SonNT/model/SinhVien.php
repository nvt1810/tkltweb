<?php
class SinhVien {
	private $maSinhVien;
	private $tenSinhVien;
	private $diemPhanNganh;
	private $chiTietPhanNganh;
	private $kyHocPhanNganh;
	
	function SinhVien($maSinhVien, $tenSinhVien, $diemPhanNganh, $chiTietPhanNganh, $kyHocPhanNganh) {
		$this->maSinhVien = $maSinhVien;
		$this->tenSinhVien = $tenSinhVien;
		$this->diemPhanNganh = $diemPhanNganh;
		$this->chiTietPhanNganh = $chiTietPhanNganh;
		$this->kyHocPhanNganh = $kyHocPhanNganh;
	}
	function getMaSinhVien() {
		return $this->MaSinhVien;
	}
	function setMaSinhVien($maSinhVien) {
		$this->maSinhVien = $maSinhVien;
	}
	function getTenSinhVien() {
		return $this->TenSinhVien;
	}
	function setTenSinhVien($tenSinhVien) {
		$this->tenSinhVien = $tenSinhVien;
	}
	function getDiemPhanNganh() {
		return $this->DiemPhanNganh;
	}
	function setDiemPhanNganh($diemPhanNganh) {
		$this->diemPhanNganh = $diemPhanNganh;
	}
	function getChiTietPhanNganh($chiTietPhanNganh) {
		return $this->chiTietPhanNganh;
	} 
	function setChiTietPhanNganh($chiTietPhanNganh) {
		$this->chiTietPhanNganh = $chiTietPhanNganh;
	}
	function getKyHocPhanNganh() {
		return $this->kyHocPhanNganh;
	}
	function setKyHocPhanNganh($kyHocPhanNganh) {
		$this->kyHocPhanNganh = $kyHocPhanNganh;
	}
}
?>