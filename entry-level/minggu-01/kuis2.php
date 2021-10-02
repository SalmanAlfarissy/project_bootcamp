<?php
function luasLingkaran($phi,$r):void{
    $hasil = $phi * $r * $r;
    echo "</br>Phi = ".$phi."
    <br/>Jari-jari = ".$r.
    "<br/>Luas Lingkaran = (22/7) * r * r ".
    "<br/>Luas Lingkaran = $phi * $r * $r = ".round($hasil,2);
}

function luasSegitiga($a,$t):float{
    $hasil = 0.5*($a*$t);
    return $hasil;
}

echo "===Luas Lingkaran Void===<br/>";
echo "===Lingkaran 1===";
$phi = round(22/7,2);
$r=10;
$hasil = luasLingkaran($phi,$r);
echo $hasil;

echo "<br/>===Lingkaran 2===";
$phi = round(22/7,2);
$r=12.4;
$hasil = luasLingkaran($phi,$r);
echo $hasil;

echo "<br/><br/>===Luas Segitiga Sama Kaki NonVoid===<br/>";
echo "===Segitiga Sama Kaki 1===";
$alas = 4;
$tinggi = 8;
$hasil= luasSegitiga($alas,$tinggi);
echo "<br/>Alas = ".$alas.
"<br/>Tinggi = ".$tinggi.
"<br/>Luas Segitiga = 1/2 * a * t".
"<br/>Luas Segitiga = 0.5 * $alas * $tinggi = ".round($hasil,2);

echo "<br/>===Segitiga Sama Kaki 2===";
$alas = 3;
$tinggi = 8.6;
$hasil= luasSegitiga($alas,$tinggi);
echo "<br/>Alas = ".$alas.
"<br/>Tinggi = ".$tinggi.
"<br/>Luas Segitiga = 1/2 * a * t".
"<br/>Luas Segitiga = 0.5 * $alas * $tinggi = ".round($hasil,2)."<br/><br/>";

?>
<div><button type="submit"><a href="index.php" class="button">back to index</a></button></div>
<div><button type="submit"><a href="kuis1.php" class="button">next to kuis1</a></button></div>
