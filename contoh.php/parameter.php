<?php
//membuat fugsi
function perkenalan($nama, $salam){
    echo $salam,",";
    echo "Perkenalkan, nama saya ",$nama;
    echo "<br>";
    echo "Senang berkenalan dengan anda semua";
    echo "<hr>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Faris","Assalamu'alaikum Wr. Wb.");

echo "<hr>";
$saya="Faris";
$ucapanSalam="Halo semuanya, selamat pagi!";

//memanggilnya lagi
perkenalan($saya,$ucapanSalam);
?>

