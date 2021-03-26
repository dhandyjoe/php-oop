<?php 

// Function DateTime -> function untuk mengetahui waktu saat ini.
$date = new DateTime();
$date->setDate(2000, 06, 30);
$date->setTime(15, 10, 10, 0);
$date->add(new DateInterval("P1Y"));

// Function DateInterval -> mengatur jarak waktu yang ditentukan
// invert jika true, maka akan mengurangi tanggal
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$date->add($minusOneMonth);
var_dump($date);

// Function DateTimeZone -> mengatur lokasi waktu
// bisa googling lokasi yg support php
$now = new DateTime();
$now->setTimezone(new DateTimeZone("Europe/Paris"));
var_dump($now);

// Function format() -> dari date ke string
$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini di Paris: $string" . PHP_EOL;

// Function Parse String to Date
$tanggal = DateTime::createFromFormat("Y-m-d H:i:s", "2100-12-12 06:10:10", new DateTimeZone("Asia/Jakarta"));
if ($tanggal) {
    var_dump($tanggal);
} else {
    echo "Format Salah" . PHP_EOL;
}


?>