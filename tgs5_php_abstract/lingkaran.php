<?php
require_once 'luasbidang.php';
class lingkaran extends bentuk3d{
    //member1 variabel
    public $jari2;
    //member2 constructor
    public function  __construct($namabidang,$luasbidang,$kelilingbidang,$jari2){
        parent::__construct($namabidang,$kelilingbidang,$luasbidang);
        $this->jari2 = $jari2;
    }
    public function mencetak(){
        parent::mencetak();
        echo '<br/>jari2 '.$this->jari2;
        echo '<hr/>'; 
    }
}