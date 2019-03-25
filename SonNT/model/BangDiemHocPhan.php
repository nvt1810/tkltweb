<?php
class BangDiemHocPhan {
	private $maHp;
	private $tenHp;
	private $maLop;
	private $diemQT;
	private $diemKT;
	private $hocKy;
	private $soTinChi;
	
	function BanDiemHocPhan($maHp, $tenHp, $maLop, $diemQT, $diemKT, $hocKy, $soTinChi) {
		$this->maHp = $maHp;
		$this->tenHp = $tenHp;
		$this->maLop = $maLop;
		$this->diemQT = $diemQT;
		$this->diemKT = $diemKT;
		$this->hocKy = $hocKy;
		$this->soTinChi = $soTinChi;
	}
	function getMaHp() {
		return 	$this->maHp;
	}
	function setMaHp($maHp) {
		$this->maHp = $maHp;
	}
	function getTenHp() {
		return $this->tenHp;
	}
	function setTenHp($tenHp) {
		$this->tenHp = $tenHp;
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
		$this->diemKT = diemKT;
	}
	function getHocKy() {
		return $this->hocKy;
	}
	function setHocKy($hocKy) {
		$this->hocKy=$hocKy;
	}
	function getSoTinChi() {
		return $this->soTinChi;
	}
	function setSoTinChi($soTinChi) {
		$this->soTinChi = $soTinChi;
	}
}
?>