<?php
#Variable, Constanta, Type Data dan Value

#Variable, Type Data dan Value
$nama;
//cara baca: inisialisasi variable nama
//setiap inisialisasi variable wajib menggunakan

$a = (int) 1;
//cara baca: variable a ber-type data ineteger dengan value 1

$b = (string) "Hello Guys";
//cara baca: variable b ber-type data string dengan value Hello Guys

//$a = variable, $b = variable
//(int) = type data
// 1 = value, "Hello Guys" = string

var_dump($a);
echo "<br /><br />";

var_dump($b);
echo "<br /><br />";

//PHP dg otomatis bisa mengenal type data
//tapi untuk belajar alangkah baiknya ditulis, agar lebih mudah ketika belajar bahasa pemprograman lain nantinya
$c = 1;
var_dump($c);
echo "<br /><br />";

//KUIS
$d = (string) 1;
//type data apa yang ada pada variable d?

#Constanta
CONST N = "HELLO, I AM IMRON ROSADI";
// cara baca: constanta n dengan value HELLO, I AM IMRON ROSADI
// CONST tidak bisa diinisialisasi type data
var_dump(N);
echo "<br /><br />";

#Perbedaan
// Value pada variable bisa di replace, constanta tidak bisa
$a = "Hello";
var_dump($a);
echo "<br /><br />";
$a = "Hai";
var_dump($a);
echo "<br /><br />";
// =======================================================
CONST a = "Hello";
var_dump($a);
echo "<br /><br />";
// a = "Hai"; error

#Jenis Type Data
//string
$a = (string) "Ini String";

//integer
$b = (int) 1;

//float
$c = (float) 3.14;

//boolean
$d = (boolean) true;

//null
$e = null;

//cara memanggil
var_dump($a, $b, $c, $d, $e);
echo "<br /><br />";
//array
$f = [10,11,12,13,14,15];
$g = ["nama"=>"Imron Rosadi", "alamat"=>"Pekanbaru"];

//cara memanggil
echo $f[0];
echo "<br /><br />";

echo $g["nama"];
echo "<br /><br />";

//object
$h = (object) $g;

//cara memanggil
echo "Nama: {$h->nama}, Alamat: {$h->alamat}";
?>