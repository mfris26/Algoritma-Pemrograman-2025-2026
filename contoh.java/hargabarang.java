import java.util.Scanner;

public class hargabarang {
    public static void main(String[] args) {
        @SuppressWarnings("resource")
        Scanner sc = new Scanner(System.in);
        System.out.println("Masukkan harga barang: ");
        double harga = sc.nextDouble();
        System.out.println("Masukkan jumlah barang: ");
        int jumlah = sc.nextInt();

        double totalHarga = harga * jumlah;

        System.out.println("Total Harga: " + totalHarga);
        if(totalHarga > 100000)
            System.out.println("Status: Diskon 10%");
        else
            System.out.println("Status: Tidak ada diskon");
    }
}