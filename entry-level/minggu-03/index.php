<!-- Buat variable dengan nama 
a. panjang
b. lebar

Buat fungsi dengan nama "hitungPersegi", dengan parameter fungsi: type, panjang, lebar dan satuan
Didalam block fungsi hitung, terhadap 2 logic bisnis:
	1. Jika user memilih type: "luas", maka fungsi akan menampilkan hasil luas dari persegi => Output: "Luas Lingkaran Adalah: 100 cm",
	2. Jika user memilih type: "keliling", maka fungsi akan menampilkan hasil luas dari persegi => Output: "Luas Lingkaran Adalah: 100 cm",


Kisi kisi:
- variable
- fungsi
- parameter
- menampilkan hasil
- kondisi (gunakan switch)

---------------------------------------------------------------------------------------------------
Buat percabangan dari logika berikut ini: 
"Jika hujan maka ada peluang terjadi banjir, jika banjir maka penduduk desa mengungsi, jika penduduk mengungsi maka pemerintah harus menyalurkan dana"
buat dalam sebuah fungsi dengan nama "danaPemerintah()" lalu kembalikan output: "Pemerintah perlu menyalurkan dana" atau "Pemerintah tidak perlu menyalurkan dana", 
masukkan variable kondisi menjadi parameter pada fungsi:


Kisi kisi
- fungsi
- parameter
- mengembalikan nilai
- kondisi
- percabangan -->

<?php

$panjang = 10;
$lebar = 10;
$satuan = 'cm';
$type = 'luas';
echo "========Hitung Persegi========";
function hitungPersegi($type,$panjang,$lebar,$satuan):void{
    switch($type){
        case 'luas':    {
            $satuan='cm"';
            echo "<br/>luas lingkaran adalah: ".$panjang*$lebar." ".$satuan;
            break;
        }
        case 'keliling':    {
            echo "<br/>keliling lingkaran adalah: ". 2*($panjang+$lebar) ." ".$satuan;
            break;
        }
    }

}

hitungPersegi($type,$panjang,$lebar,$satuan);

echo "<br/>========Dana Pemerintah========";

$kondisi="hujan";
$kondisi2="banjir";

function danaPemerintah($kondisi,$kondisi2):string{
if  ($kondisi=='hujan'){
    
    if ($kondisi2=='banjir'){
        $kondisi="penduduk mengungsi";
        if ($kondisi=="penduduk mengungsi"){
            $kondisi="Pemerintah perlu menyalurkan dana";
        }
    }else {
        $kondisi="penduduk tidak mengungsi";
        if ($kondisi=="penduduk tidak mengungsi"){
            $kondisi="Pemerintah tidak perlu menyalurkan dana";
        }
    }
}else {
    $kondisi = "Pemerintah tidak perlu menyalurkan dana";
}
return $kondisi;
}
echo "<br/>".danaPemerintah($kondisi,$kondisi2);
