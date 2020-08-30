<?php 
class Game extends Produk implements InfoProduk{ // Game
  public $waktu;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktu = 0){
          parent::__construct($judul, $penulis, $penerbit, $harga);
          $this->waktu = $waktu;
  }

  public function setDiskon($diskon){
      $this->diskon = $diskon;
  }

  public function getInfo(){
        $str = "{$this->judul} | {$this->getLebel()} (Rp.{$this->harga})";
        return $str;
  }

  public function getInfoProduk(){
        $str = "Game : {$this->getInfo()}  ~ {$this->waktu} Jam";
        return $str;
  }

}
 ?>
