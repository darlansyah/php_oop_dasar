<?php
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
 ?>
