<?php
// define() bersifat global di OOP di simpan di luar Class
define('NAMA','Laode Darlansyah');
echo NAMA;
echo "<br/>";
// const dapat disimpan di dalam class
const UMUR = 25;
echo UMUR;
echo "<br/>";

class Coba{
  const JURUSAN = 'Informatika';
}
echo Coba::JURUSAN;
echo "<br/>";
echo __METHOD__;

// magic constact
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

 ?>
