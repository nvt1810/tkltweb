<?php
class PhanHoi {
	private $id;
	private $tieuDe;
	private $noiDung;
	
	function PhanHoi($id, $tieuDe, $noiDung){
		$this->id = id;
		$this->tieuDe = tieuDe;
		$this->noiDung = noiDung;
	}
	function getID() {
		return $this->id;
	}
	function setID() {
		$this->id = id;
	}
	function getTieuDe() {
		return $this->tieuDe;
	}
	function setTieuDe($tieuDe) {
		$this->tieuDe = $tieuDe;
	}
	function getNoiDung() {
		return $this->noiDung;
	}
	function setNoiDung($noiDung) {
		$this->noiDung = $noiDung;
	}
}
?>