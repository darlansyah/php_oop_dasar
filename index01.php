<?php
class Produk {
  private $judul,
         $penulis,
         $penerbit,
         $harga;
  protected $diskon = 0;

  public function __construct($judul='judul',$penulis='penulis',$penerbit='penerbit',$harga=0){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function setJudul($judul){
    return $this->judul = $judul;
  }
  public function getJudul(){
    return $this->judul;
  }
  public function setPenulis($penulis){
    return $this->penulis = $penulis;
  }
  public function getPenulis(){
    return $this->penulis;
  }
  public function setPenerbit($penerbit){
    return $this->penerbit = $penerbit;
  }
  public function getPenerbit(){
    return $this->penerbit;
  }
  public function setHarga($harga){
    return $this->harga = $harga;
  }
  public function getHarga(){
    return $this->harga = $this->harga * $this->diskon / 100;
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    return $str;
  }
}

class Komik extends Produk {
  public $halaman;

    public function __construct($judul='judul',$penulis='penulis',$penerbit='penerbit',$harga=0,$halaman=0){
      parent::__construct($judul,$penulis,$penerbit,$harga);
      $this->halaman = $halaman;
    }

    function setDiskon($diskon){
      $this->diskon = $diskon;
    }

  public function getInfoProduk(){
    $str = "Komik = ".parent::getInfoProduk()." ~ {$this->halaman} Halaman";
    return $str;
  }
}

class InfoProduk{
  function cetak(Produk $produk){
    $str =  "{$produk->judul} | $produk->penulis, $produk->penerbit (Rp.{$produk->harga})";
    return $str;
  }
}

$p = new Komik('One Piece','Oda Sense','Jepan',1000,10);
$p->setDiskon(50);
echo $p->getHarga();
echo "<br/>";
echo $p->getInfoProduk();
echo "<hr/>";
$p_produk = new Produk('Produk baru');
$p_produk->setJudul('produk judul baru');
echo $p_produk->getPenulis();



 ?>
