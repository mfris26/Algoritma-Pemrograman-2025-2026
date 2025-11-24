#include <iostream>
using namespace std;    
int main() {
    float hargaBarang, diskon, hargaAkhir;
    cout << "Masukkan harga barang: ";
    cin >> hargaBarang;

    if (hargaBarang > 100000) {
        diskon = 0.1 * hargaBarang;
    } else {
        diskon = 0; 
    }

    hargaAkhir = hargaBarang - diskon;

    cout << "Harga Akhir setelah diskon: " << hargaAkhir << endl;

    return 0;
}