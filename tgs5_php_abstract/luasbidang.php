<?php
class bentuk3d{
    //member1 variabel
    public $namabidang;
    public $luasbidang;
    public $kelilingbidang;
    //member2 constructor
    public function  __construct($luasbidang,$kelilingbidang,$namabidang){
        $this->luasbidang = $luasbidang;
        $this->kelilingbidang = $kelilingbidang;
        $this->namabidang = $namabidang;
            
    }
    public function mencetak(){
        echo 'nama bidang: '.$this->namabidang; 
        echo '<br/>Luas bidang '.$this->luasbidang;
        echo '<br/>keliling bidang: '.$this->kelilingbidang; 

    }
}