<?php
# SYNTAX DASAR
// teks yg yang didahului oleh 2 backslash (//) atau pagar (#) menandakan komentar pada file kerja berekstensi PHP
// line tersebut tidak akan di eksekusi oleh mesin

#CARA MENCETAK OUTPUT PROGRAM KE BROWSER
// gunakan echo untuk data tunggal (seperti string, atau integer)
$string = "Hello World!";
echo $string;
//cara baca: cetak variable string menggunakan echo

//<br /> (break) adalah syntax HTML agar browser mencetak garis baru (cetakan lebih rapi)
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo


// gunakan print_r untuk data objek atau array
$array = ["Aku array ke 0", "Aku array ke 1"];
print_r($array);
//cara baca: cetak variable array menggunakan print_r
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo

$object = (object) ["object1"=>"Hi Aku Object", "object2"=>"Hello Aku Juga Object"];
print_r($object);
//cara baca: cetak variable object menggunakan print_r
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo

//bisa juga untuk string
print_r("Hallo, Sekarang Aku Programmer");
//cara baca: cetak string menggunakan print_r
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo

// gunakan var_dump untuk melihat output beserta type datanya
var_dump($string);
//cara baca: cetak variable string menggunakan var_dump
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo

var_dump($array);
//cara baca: cetak variable array menggunakan var_dump
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo

var_dump($object);
//cara baca: cetak variable object menggunakan var_dump
echo "<br/><br/>";
//cara baca: cetak tag html <br /> dua kali menggunakan echo

?>