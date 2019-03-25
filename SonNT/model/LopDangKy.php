<?php
class LopDangKy {
	private $maSinhVien;
	private $tenSinhVien;
	private $ngaySinh;
	private $maLop;
	private $nhom;
	private $maHocPhan;
	private $tenHocPhan;
	private $loaiLop;
	private $lopThi;
	private $tinhTrang;
	
	function LopDangKy($maSinhVien, $tenSinhVien, $ngaySinh, $maLop, $nhom, $maHocPhan, $tenHocPhan,
						 $loaiLop, $lopThi, $tinhTrang) {
		$this->maSinhVien = $maSinhVien;
		$this->tenSinhVien = $tenSinhVien;
		$this->ngaySinh = $ngaySinh;
		$this->maLop = $maLop;
		$this->nhom = $nhom;
		$this->maHocPhan = $maHocPhan;
		$this->tenHocPhan = $tenHocPhan;
		$this->loaiLop = $loaiLop;
		$this->lopThi = $lopThi;
		$this->tinhTrang = $tinhTrang;
	}
	function getMaSinhVien() {
		return $this->maSinhVien;
	}
	function setMaSinhVien($maSinhVien) {
		$this->maSinhVien = $maSinhVien;
	}
	function getTenSinhVien() {
		return $this->tenSinhVien;
	}
	function setTenSinhVien($tenSinhVien) {
		$this->tenSinhVien = $tenSinhVien;
	}
	function getNgaySinh() {
		return $this->ngaySinh;
	}
	function setNgaySinh($ngaySinh) {
		$this->ngaySinh = $ngaySinh;
	}
	function getMaLop() {
		return $this->maLop;
	}
	function setMaLop($maLop) {
		$this->maLop = $maLop;
	}
	function getNhom() {
		return $this->nhom;
	}
	function setNhom($nhom) {
		return $this->nhom = $nhom;
	}
	function getMaHocPhan() {
		return $this->maHocPhan;
	}
	function setMaHocPhan($maHocPhan) {
		$this->maHocPhan = maHocPhan;
	}
	function getTenHocPhan() {
		return $this->tenHocPhan;
	}
	function setTenHocPhan($tenHocPhan) {
		$this->tenHocPhan = $tenHocPhan;
	}
	function getLoaiLop() {
		return $this->loaiLop;
	}
	function setLoaiLop($loaiLop) {
		$this->loaiLop = $loaiLop;
	}
	function getLopThi() {
		return $this->lopThi;
	}
	function setLopThi($lopThi) {
		$this->lopThi = $lopThi;
	}
	function getTinhTrang() {
		return $this->tinhTrang;
	}
	function setTinhTrang($tinhTrang) {
		$this->tinhTrang = $tinhTrang;
	}
}
?>