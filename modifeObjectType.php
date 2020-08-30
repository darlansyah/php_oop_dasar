<?php
// penggunaan :
  // abstract class
  // abstract method

abstract class Produk { // Produk
  public $judul,
         $penulis,
         $penerbit;
  private  $harga;
  protected  $diskon = 0;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLebel(){
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfoProduk(); // method abstract

  public function getInfo(){
        $str = "{$this->judul} | {$this->getLebel()} (Rp.{$this->harga})";
        return $str;
  }

  public function getHarga(){
    return $this->harga = $this->harga  * $this->diskon / 100;
  }

}

class Komik extends Produk{ // Komik
  public $halaman;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $halaman = 0){
          parent::__construct($judul, $penulis, $penerbit, $harga);
          $this->halaman = $halaman;
  }

  public function getInfoProduk(){
        $str = "Komik : {$this->getInfo()} ~ {$this->halaman} Hal";
        return $str;
  }

}

class Game extends Produk{ // Game
  public $waktu;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktu = 0){
          parent::__construct($judul, $penulis, $penerbit, $harga);
          $this->waktu = $waktu;
  }

  public function setDiskon($diskon){
      $this->diskon = $diskon;
  }

  public function getInfoProduk(){
        $str = "Game : {$this->getInfo()}  ~ {$this->waktu} Jam";
        return $str;
  }

}

Class CetakInfoProduk{ // cetak info produk
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
$p_game = new Game('PUBG','TeNcent','China',7000,90);

$p_cetak = new CetakInfoProduk();
$p_cetak->tambahkanProduk($p_komik);
$p_cetak->tambahkanProduk($p_game);
echo $p_cetak->cetak();



 ?>
