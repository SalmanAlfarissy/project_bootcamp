<?php
for($i=0; $i<=10; $i++){
    echo $i;
    echo '</br>';
}

$loop=true;
$halper=1;
$akhir=100;

while($loop){
    echo $halper.'<br/>';
    if($halper == $akhir){
        $loop = false;
    }
$halper ++;
}

$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

$angka=array('1','2','3');
$warna=['merah','kuning','hijau'];
foreach($angka as $item){
    echo "$item <br/>";
    foreach($warna as $color){
        echo "$color <br/>";
    }
    
}