<?php

$nama=readline("Masukkan Nama Anda: ");
#nim=readline("Masukkan Nim Anda: ");

$tugas=readline("Masukkan Nilai Tugas: ");
$uts=readline("Masukkan Nilai UTS: ");
$uas=readline("Masukkan Nilai UAS: ");

$nilaiAkhir= ($tugas*0.3) + ($uts*0.3) + ($uas*0.4);

echo "Nilai Akhir= $nilaiAkhir\n";
if($nilaiAkhir>=60)
    echo "Status: LULUS\n";
else
    echo "Status: TIDAK LULUS\n";
?>
