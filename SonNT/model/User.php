<?php
class User {
	private $id;
	private $hoTen;
	private $ngaySinh;
	private $gioiTinh;
	private $queQuan;
	private $soDT;
	private $email;
	private $taiKhoan;
	private $matKhau;
	private $category;
	
	function User($id, $hoTen, $ngaySinh, $gioiTinh, $queQuan, $soDT, $email, $taiKhoan, $matKhau, $category) {
		$this->id = id;
		$this->hoTen = $hoTen;
		$this->ngaySinh = $ngaySinh;
		$this->gioiTinh = $gioiTinh;
		$this->queQuan = $queQuan;
		$this->soDT = $soDT;
		$this->email = $email;
		$this->taiKhoan = $taiKhoan;
		$this->matKhau = $matKhau;
		$this->category = $category;
	}
	function getID() {
		return $this->id;
	}
	function setID($id) {
		$this->id = id;
	}
	function getHoTen() {
		return $this->hoTen;
	}
	function setHoTen($hoTen) {
		$this->hoTen = $hoTen;
	}
	function getNgaySinh() {
		return $this->ngaySinh;
	}
	function setNgaySinh($ngaySinh) {
		$this->ngaySinh = $ngaySinh;
	}
	function getQueQuan() {
		return $this->queQuan;
	}
	function setQueQuan($queQuan) {
		$this->queQuan = $queQuan;
	}
	function getSoDT() {
		return $this->soDT;
	}
	function setSoDT($soDT) {
		$this->soDT = soDT;
	}
	function getEmail() {
		return $this->email;
	}
	function setEmail($emai) {
		$this->email = $email;
	}
	function getTaiKhoan() {
		return $this->taiKhoan;
	}
	function setTaiKhoan($taiKhoan) {
		$this->taiKhoan = $taiKhoan;
	}
	function getMatKhau() {
		return $this->matKhau;
	}
	function setMatKhau($matKhau) {
		$this->matKhau = $matKhau;
	}
	function getCategory() {
		return $this->category;
	}
	function setCategory($category) {
		$this->category = $category;
	}
}
?>
