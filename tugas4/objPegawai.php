<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','syahroni','Manager','Kristen Katholik','Belum Menikah');
$salah = new Pegawai('011',' Salahuddin','Assmen','Islam','Menikah');
$messi = new Pegawai('012','jian di','Kabag','Islam','Menikah');

//dst ...
//cetak struktur gaji


echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$messi->mencetak();
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;