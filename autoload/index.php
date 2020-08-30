<?php

require_once 'app/init.php';

$p_komik = new Komik('One Piece','Ociro Oda','Jepan',5000,10);
$p_game = new Game('PUBG','Tencent','China',7000,90);
$p_game_2 = new Game('ML','Tencent','China',8000,50);

$p_cetak = new CetakInfoProduk();
$p_cetak->tambahkanProduk($p_komik);
$p_cetak->tambahkanProduk($p_game);
$p_cetak->tambahkanProduk($p_game_2);
echo $p_cetak->cetak();


 ?>
