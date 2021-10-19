<?php
#Fungsi dan Parameter

#Fungsi Non Void
function fungsiA():string{
    return "HELLO AKU FUNGSI";
}
//cara baca: fungsiA dengan bertype string dan mengembalikan teks HELLO AKU FUNGSI

function fungsiB():int{
    return 100;
}
//cara baca: fungsiB bertype integer dengan mengembalikan nilai 100

#Fungsi Void
function fungsiC():void{
    echo "AKU ADALAH FUNGSI VOID";
}
//cara baca: fungsiC bertype void dengan output AKU ADALAH FUNGSI VOID

#Cara Memanggil Fungsi => namaFungsi();
//fungsi bisa dimasukkan kedalam variable
$a = fungsiA();
//cara baca: panggil fungsiA dan masukkan kedalam variable a
echo $a;
echo "<br /></br />";

$b = fungsiB();
$b2 = $b + $b; 
echo "Hasil Penjumlahan: $b2";
echo "<br /></br />";

$c = fungsiC();
$c;
//tidak perlu di echo karena sudah ada echo difungsi
echo "<br /></br />";

// Seperti variable, kita tidak perlu mendeklarasikan type dari fungsi, jadi kamu bisa menuliskan fungsiA(){ return "HAI" } saja 

// ===========================================================================

#Parameter
// Kita bisa melempar nilai kedalam fungsi, nilai yg kita lempar inilah disebut parameter

function fungsiBerParameterA($a){
    return $a;
}
//cara baca: fungsiC bertype nonvoid dengan parameter a;

//cara Memanggil
echo fungsiBerParameterA("ISI PARAMTER DISINI");
echo "<br /></br />";

//cara Memanggil
echo fungsiBerParameterA("BISA DINAMIS");
echo "<br /></br />";

//cara Memanggil
// echo fungsiBerParameterA();
//jika dipanggil tanpa parameter akan error

//rumus persegi P*L
function fungsiHitungPersegi($p=1, $l=1){
    return $p*$l;
}

//cara Memanggil
echo fungsiHitungPersegi(3,5);
echo "<br /></br />";

//jika dipanggil tanpa parameter apakah jalan?
// echo fungsiHitungPersegi();
// echo "<br /></br />";

?>