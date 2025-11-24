<?php

echo"==============================\n";
echo " INPUT DATA PEMBAYARAN BARANG \n";
echo"==============================\n";

$nama_barang=readline("Masukkan Nama Barang: ");
$harga_barang=readline("Masukkan Harga Barang: ");
$jumlah_beli=readline("Masukkan Jumlah Beli: ");
$total_harga=$harga_barang*$jumlah_beli;
echo"==============================\n";
echo " TOTAL HARGA: $total_harga \n";
echo"==============================\n";
if($total_harga>100000){
    $diskon=$total_harga*0.5;
    echo "Anda Mendapatkan Diskon 10%: $diskon \n";
}else{
    $diskon=0;
    echo "Anda Tidak Mendapatkan Diskon \n";
}
$harga_bayar=$total_harga-$diskon;
echo"==============================\n";
echo " HARGA YANG HARUS DIBAYAR: $harga_bayar \n";
echo"==============================\n";
?>