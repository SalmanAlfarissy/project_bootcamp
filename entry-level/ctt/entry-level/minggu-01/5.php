<?php
#Kondisi

// if(operator_logika){
//     //block
// }

//Operator logika harus mengembalikan nilai
//True = Benar
//False = Salah

$a = true;
if($a){
    echo "EKSEKUSI BLOK INI";
}
// cara baca: jika kondisinya benar maka print "EKSEKUSI BLOK INI"
echo "<br /><br />";

$a = false;
if($a){
    echo "BLOK INI TIDAK AKAN DIEKSEKUSI";
}
// cara baca: jika kondisinya benar maka print "BLOK INI TIDAK AKAN DIEKSEKUSI"

// pada setiap kondisi, nilai yang ada pada tanda  () harus bernilai true/ false

// jika hanya memiliki 2 kondisi, kita bisa menggunakan IF ELSE
// contoh: Jika hari hujan maka suhu dingin, jika tidak maka suhu normal
$hujan = true;// false; - ubah kondisi disini
if($hujan){
    echo "SUHU DINGIN";
}
else{
    echo "SUHU NORMAL";
}
echo "<br /><br />";

// jika kondisinya lebih dari 2, kita bisa menggunakan IF, ELSE IF dan ELSE
// contoh: Jika hari hujan maka suhu dingin, jika tidak maka suhu normal, tapi jika siang maka suhu panas
$hujan = false; $siang = true;
if($hujan){
    echo "SUHU DINGIN";
}
else if($siang){
    echo "SUHU PANAS ";
}
else{
    echo "SUHU NORMAL";
}

#Switch

?>