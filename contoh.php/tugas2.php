<?php
function hitungHurufMutu($nilai) {
    if ($nilai >= 85) return "A";
    elseif ($nilai >= 70) return "B";
    elseif ($nilai >= 55) return "C";
    elseif ($nilai >= 40) return "D";
    else return "E";
}

function input($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

echo "=============================\n";
echo "     MENGHITUNG NILAI AKHIR \n";
echo "=============================\n";

$nim = input("NIM   : ");
$nama = input("NAMA  : ");

$hadir = (float)input("Nilai Kehadiran     : ");
$forum = (float)input("Nilai Forum         : ");
$tugasIndividu = (float)input("Nilai Tugas Individu: ");
$tugasKelompok = (float)input("Nilai Tugas Kelompok: ");
$uts = (float)input("Nilai UTS           : ");
$uas = (float)input("Nilai UAS           : ");
$project = (float)input("Nilai Project       : ");

$nilaiAkhir = ($hadir + $forum + $tugasIndividu + $tugasKelompok + $uts + $uas + $project) / 7;
$hurufMutu = hitungHurufMutu($nilaiAkhir);

echo "\n[ $nim - $nama ]\n";
echo "Nilai Akhir : " . round($nilaiAkhir, 2) . "\n";
echo "Huruf Mutu  : $hurufMutu\n";
echo "=============================\n";
?>