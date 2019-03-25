<?php
class HocPhan {
	private $id;
	private $maHocPhan;
	private $tenHocPhan;
	private $soTinChi;
	private $soTinChiHocPhi;
	private $heSo;
	private $idKhoaVien;
	
	function HocPhan($id, $maHocPhan, $tenHocPhan, $soTinChi, $soTinChiHocPhi, $heSo, $idKhoaVien) {
		$this->id = $id;
		$this->maHocPhan = $maHocPhan;
		$this->tenHocPhan = $tenHocPhan;
		$this->soTinChi = $soTinChi;
		$this->soTinChiHocPhi = $soTinChiHocPhi;
		$this->heSo = $heSo;
		$this->idKhoaVien = $idKhoaVien;
	}
	function getID() {
		return $this->id;
	}
	function setID($id) {
		$this->id = $id;
	}
	function getMaHocPhan() {
		return $this->maHocPhan;
	}
	function setMaHocPhan($maHocPhan) {
		$this->maHocPhan = $maHocPhan;
	}
	function getTenHocPhan() {
		return $this->tenHocPhan;
	}
	function setTenHocPhan($tenHocPhan) {
		$this->tenHocPhan = $tenHocPhan;
	}
	function getSoTinChi() {
		return $this->soTinChi;
	}
	function setSoTinChi($soTinChi) {
		$this->soTinChi = $soTinChi;
	}
	function getSoTinChiHocPhi() {
		return $this->soTinChiHocPhi;
	}
	function setSoTinChiHocPhi($soTinChiHocPhi) {
		$this->soTinChiHocPhi = $soTinChiHocPhi;
	}
	function getHeSo() {
		return $this->heSo;
	}
	function setHeSo($heSo) {
		$this->heSo = $heSo;
	}
}
?>
