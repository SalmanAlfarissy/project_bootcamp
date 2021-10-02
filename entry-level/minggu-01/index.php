<?php
echo "<h1>latihan!!</h1>";
function getFungsiNama():string{
    return "Salman Alfarissy";
    
}

function getFungsiNama1():int{
    return 100;
    
}

function getFungsiNama2():void{
    echo "Salman Alfarissy<br/>";    
}

$nama = getFungsiNama();
$nama2 = getFungsiNama1();

echo "halo nama saya ".$nama."<br/>".$nama2.getFungsinama2();

echo "<br/><br/>===Luas Persegi Panjang===";
echo "<br/>===NonVoid===";
function rusmusPersegi($p,$l):int{ //non void
    $hasil =$p * $l;
    return $hasil;
}
$pj=4;//1
$lb=5;//2
$hasil = rusmusPersegi($pj,$lb);//3
echo "<br/>panjang = ".$pj.
"<br/>lebar = ".$lb.
"<br/>luas = panjang * lebar ".
"<br/>luas = $pj * $lb = ".$hasil;

echo "<br/><br/>===Void===";
function rumusPersegi2($p,$l):void{
    $hasil = $p * $l;
    echo "<br/>panjang = ".$p.
"<br/>lebar = ".$l.
"<br/>luas = panjang * lebar ".
"<br/>luas = $p * $l = ".$hasil."<br/><br/>";
}

$pj=5;
$lb=5;
$hasil = rumusPersegi2($pj,$lb);
echo $hasil;

?>
<div><button type="submit"><a href="kuis1.php" class="button">next to kuis1</a></button></div>
<div><button type="submit"><a href="kuis2.php" class="button">next to kuis2</a></button></div>