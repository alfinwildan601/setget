<?php
  
  class orang{
     
    public $nama = "Alfin";
    private $umur = "16";
    protected $jeniskelamin = "laki-laki";

    public function setNama($data){
        $this->nama = $data;   
    }

    public function setUmur($data){
        $this->umur = $data;
    }

    public function setJk($data){
        $this->jeniskelamin = $data;
    }

    public function getNama(){
        return $this->nama;
    }    
    
    public function getUmur(){
        return $this->umur;
    }    

    public function getJk(){
        return $this->jeniskelamin;
    }    
  }
  $orang1 = new orang;
  $orang1 ->setNama("Wildan");
  $orang1 ->setUmur(16);
  $orang1 ->setJk("lanang");
  
  //menampilkan isi dari seter yang diambil menggunakan getter
  echo "Hai... Nama saya adalah " .$orang1->getNama(). "<br>";
  echo "sekarang umur saya " .$orang1->getUmur(). " Tahun <br>";
  echo "dan jenis kelamin saya " .$orang1->getJk();
?>