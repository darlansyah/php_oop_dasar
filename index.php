<?php

class Produk { // Produk
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

  public function getInfoProduk(){
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
        $str = "Komik : ". parent::getInfoProduk()  ." ~ {$this->halaman} Hal";
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
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktu} Jam";
        return $str;
  }

}
$p = new Produk('One Piece','Ociro Oda','Jepan',5000);
echo $p->getInfoProduk();
echo "<br/>";
echo $p->getHarga();
echo "<hr/>";

$p_komik = new Komik('One Piece','Ociro Oda','Jepan',5000,10);
echo $p_komik->getInfoProduk();
// echo "<br/>";
echo '<hr/>';

$p_game = new Game('PUBG','TeNcent','China',7000,90);
echo $p_game->getInfoProduk();
echo "<br/>";
$p_game->setDiskon(50);
echo $p_game->getHarga();
echo "<br/>";
echo "<hr/>";



 ?>
