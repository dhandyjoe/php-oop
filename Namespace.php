<?php 

/* 

    - Namespace digunakan untuk mengklasifikasikan jenis" class
    - Seperti halnya membuat folder, namespace bisa untuk
      menyimpan class"

    Cara menggunakan namespace :
    + keword namespace Namanamespace\class

    class namespace Data\Person() {}

*/

require_once "data/Person.php";

$orang1 = new Data\Person();
echo $orang1->nama("Dhandy");

$orang2 = new Person();

// tanpa class harus menyebutkan nama namespacenya
echo Data\VERSION;

 
?>