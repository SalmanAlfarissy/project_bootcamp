<?php
// kondisi 
// *if else 
// $a = ((true||false)&&(true xor true)||(false && true));

// var_dump($a);
// echo '<br/>';

// $b=00;
// var_dump($b);

// if($b){
//     echo 'hello';
// }else{
//     echo 'apo';
// }

// switch case
// $a="hello";

// switch($a){
//     case "hello":
//         echo 'hello salman';
//         break;
//     //blok
//     case "hay":
//         echo 'hay salman';
//         break;
//     //blok
//     case "guys":
//         echo 'guys';
//         break;
//     //blok
//     default :
//         echo 'anda siapa??';
//         break;

// }

//percabangan
// jika turun salju makan suhu dingin,
// jika suhu dingin dan angka termometer dibawah 0 derajat celcius maka air membeku,
// jika angka pada termometer diatas noll maka air tidak membeku.
// jika tidak turun salju maka suhu normal.

$salju=true;
$termo=0;
if($salju){
    if ($termo<=0){
        echo " air membeku";
    }else {
        echo "air tidak membeku";
    }
}else {
    echo "suhu normal";
}