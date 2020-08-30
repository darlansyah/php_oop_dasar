<?php
abstract class Produk { // Produk
  protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLebel(){
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfo(); // method abstract

  public function getHarga(){
    return $this->harga = $this->harga  * $this->diskon / 100;
  }

}

 ?>
