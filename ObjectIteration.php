<?php 

/* 
    Kita bisa melakukan iterasi ke semua properties yang terdapat
    pada object menggunakan perulangan foreach.

    - Hanya yang public yang akan dipanggil.
*/

class ObjectIteration {
    var string $name = "Name";
    public string $age = "12";
    protected string $grade = "A";
    private string $number = "100";
}

$data = new ObjectIteration();

foreach($data as $property => $value){
    echo "$property : $value" . PHP_EOL;
}

// Yang dipanggil hanya properties name dan age, karena public

?>