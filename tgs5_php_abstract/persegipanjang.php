<?php
require_once 'luasbidang.php';
class persegipanjang extends bentuk3d{
    //member1 variabel
    public $panjang;
    public $lebar;
    //member2 constructor
    public function  __construct($namabidang,$luasbidang,$kelilingbidang,$panjang,$lebar){
        parent::__construct($namabidang,$kelilingbidang,$luasbidang);
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function mencetak(){
        parent::mencetak();
        echo '<br/>panjang '.$this->panjang;
        echo '<br/> lebar '.$this->lebar;
        echo '<hr/>'; 
    }
}