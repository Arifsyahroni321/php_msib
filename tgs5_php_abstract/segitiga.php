<?php
require_once 'luasbidang.php';
class segitiga extends bentuk3d{
    //member1 variabel
    public $alas;
    public $tinggi;
    //member2 constructor
    public function  __construct($namabidang,$luasbidang,$kelilingbidang,$alas,$tinggi){
        parent::__construct($namabidang,$kelilingbidang,$luasbidang);
        $this->tinggi = $alas;
        $this->tinggi = $tinggi;
    }
    public function mencetak(){
        parent::mencetak();
        echo '<br/>Alas '.$this->alas;
        echo '<br/> Tinggi '.$this->tinggi;
        echo '<hr/>'; 
    }
}