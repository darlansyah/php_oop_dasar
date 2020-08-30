<?php
// penggunaan :
  // interface

interface InfoProduk{
    public function getInfoProduk();
}

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

class Komik extends Produk implements InfoProduk{ // Komik
  public $halaman;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $halaman = 0){
          parent::__construct($judul, $penulis, $penerbit, $harga);
          $this->halaman = $halaman;
  }

  public function getInfo(){
        $str = "{$this->judul} | {$this->getLebel()} (Rp.{$this->harga})";
        return $str;
  }

  public function getInfoProduk(){
        $str = "Komik : {$this->getInfo()} ~ {$this->halaman} Hal";
        return $str;
  }

}

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

class CetakInfoProduk{ // cetak info produk
  public $daftar = array();

  public function tambahkanProduk(Produk $produk){
    return $this->daftar[] = $produk;
  }
  public function cetak(){
    $str = "DAFTAR : <br/>";
    foreach ($this->daftar as $p) {
      $str .= " - {$p->getInfoProduk()} <br/>";
    }
    return $str;
  }

}
// $p = new Produk('One Piece','Ociro Oda','Jepan',5000);
$p_komik = new Komik('One Piece','Ociro Oda','Jepan',5000,10);
$p_game = new Game('PUBG','Tencent','China',7000,90);
$p_game_2 = new Game('ML','Tencent','China',8000,50);

$p_cetak = new CetakInfoProduk();
$p_cetak->tambahkanProduk($p_komik);
$p_cetak->tambahkanProduk($p_game);
$p_cetak->tambahkanProduk($p_game_2);
echo $p_cetak->cetak();

 ?>
