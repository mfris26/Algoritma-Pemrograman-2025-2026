[11.17, 27/10/2025] Ikhsan Mazon UNIDA: <?php
$a = readline("Masukan angk ke satu: ");
$b = readline("Masukan angka ke dua: ");

if($a > $b)
    echo "lebih terbesar dari: " . $a . "\n";
 elseif($b > $a)
    echo "lebih terbesar dari: " . $b . "\n";
 else 
    echo "Kedua sama besar: " . $a . "\n";

 echo "apakah keduanya sama?";
 echo ($a == $b) ? " Ya\n" : " Tidak\n";
?>
[11.17, 27/10/2025] Ikhsan Mazon UNIDA: a = int(input("Masukkan angka pertama: "))
b = int(input("Masukkan angka kedua: "))

if a > b:
    print(f"{a} lebih besar dari.") 
elif a < b:
    print(f"{b} lebih kecil dari.")    
else:
    print("Kedua angka sama besar.")

print("apakah keduanya sama ?", a == b)