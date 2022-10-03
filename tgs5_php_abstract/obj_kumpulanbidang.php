<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$d1 = new lingkaran('40','lingkaran','30','20');
$d2 = new persegipanjang('20','persegipanjang','30','20','20');
$d3 = new segitiga('10','segitiga','30','20','20');

$data = [$d1,$d2,$d3];

foreach($data as $d){
    echo $d->mencetak();
}