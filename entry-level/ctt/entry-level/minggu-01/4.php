<?php
#Operator Logika
// Ada 4 dasar operator logika

// AND ditulis AND atau and atau &&
// OR ditulis OR atau or atau ||
// XOR ditulis XOR atau  xor
// NOT ditulis NOT atau ! atau !=

// AND jika salah satu false, maka abaikan nilai true
var_dump(true && false && true && true && true);
echo "<br /><br />";

// OR jika salah satu true, maka abaikan nilai false
var_dump(false || false || true || false || false);
echo "<br /><br />";

// XOR jika salah satu true, maka hasilnya true, tapi jika semua true maka akan jadi false
var_dump(false xor false xor true xor false xor false);
echo "<br /><br />";

// XOR contoh 2
var_dump(true xor true);
echo "<br /><br />";

// Sesuatu yang tidak ada nilainya dianggap pale

$a = null;
$b = "";
$c = 0;

var_dump(($a && true), ($b && true), ($c && true));
echo "<br /><br />";

// Kuis
$a = ((true||false)&&(false xor true )||(false && true));

// var_dump($a);

?>